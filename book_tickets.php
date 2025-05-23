<?php
include 'includes/db_connect.php';
session_start();

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Fetch user balance and recharge code
$user_query = "SELECT balance, recharge_code FROM users WHERE id = '{$_SESSION['user_id']}'";
$user_result = $conn->query($user_query);
$user = $user_result->fetch_assoc();
$user_balance = $user['balance'];
$recharge_code = $user['recharge_code'];

// Fetch routes
$routes_query = "SELECT * FROM routes";
$routes_result = $conn->query($routes_query);

// Initialize variables
$available_buses = [];
$route_name = '';
$booked_seat_message = '';
$booking_successful = false;

// Handle bus search
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search_buses'])) {
    $route_id = $_POST['route_id'];
    $search_date = $_POST['search_date'];

    // Fetch active buses for the selected route and date, ignoring inactive buses
    $bus_query = "SELECT * FROM buses WHERE route_id = '$route_id' AND date = '$search_date' AND status = 'active'";
    $bus_result = $conn->query($bus_query);
    while ($bus = $bus_result->fetch_assoc()) {
        $available_buses[] = $bus;
    }
}

// Handle booking submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['book_now'])) {
    $bus_id = $_POST['bus_id'];
    $selected_seats = $_POST['seats'];  // Array of selected seat numbers
    $total_fare = $_POST['total_fare']; // Total fare calculated by the JavaScript

    if ($user_balance >= $total_fare) {
        // Deduct the total fare from user's balance
        $new_balance = $user_balance - $total_fare;
        $conn->query("UPDATE users SET balance = '$new_balance' WHERE id = '{$_SESSION['user_id']}'");

        // Insert booking record into the bookings table
        $seat_numbers_string = implode(',', $selected_seats);
        $booking_query = "INSERT INTO bookings (user_id, bus_id, seat_numbers, recharge_code) VALUES ('{$_SESSION['user_id']}', '$bus_id', '$seat_numbers_string', '$recharge_code')";
        $conn->query($booking_query);

        // Mark selected seats as reserved using the query
        $seats_query = "UPDATE seats SET status = 'reserved' WHERE seat_number IN ($seat_numbers_string) AND bus_id = '$bus_id'";
        $conn->query($seats_query);

        $booking_successful = true;
        $booked_seat_message = "Successfully booked seat(s): " . implode(', ', $selected_seats) . " at the cost of $total_fare AUD!";
    } else {
        $error_message = "Insufficient balance!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Tickets - Canberra Bus</title>
    <link rel="stylesheet" href="assets/css/book_tickets.css">
    <script src="assets/js/book_tickets.js" defer></script>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <h2>Book Your Tickets</h2>

        <!-- Success or Error Messages -->
        <?php if ($booking_successful): ?>
            <div class="success-message">
                <p><?php echo $booked_seat_message; ?></p>
                <button onclick="window.location.href='booking_history.php';">Check Your Booking</button>
                <button onclick="window.location.href='book_tickets.php';">Book Another Seat</button>
            </div>
        <?php elseif (isset($error_message)): ?>
            <div class="error-message">
                <p><?php echo $error_message; ?></p>
            </div>
        <?php endif; ?>

        <!-- Route and Date Selection -->
        <section class="route-selection">
            <h3>Select Your Route and Date</h3>
            <form action="book_tickets.php" method="POST">
                <div class="form-group">
                    <label for="route_id">Choose Route:</label>
                    <select id="route_id" name="route_id" required>
                        <?php while ($route = $routes_result->fetch_assoc()): ?>
                            <option value="<?php echo $route['id']; ?>"><?php echo $route['route_name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="search_date">Select Date:</label>
                    <input type="date" id="search_date" name="search_date" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+3 days')); ?>" required>
                </div>
                <button type="submit" name="search_buses">Search Available Buses</button>
            </form>
        </section>

        <!-- Available Buses -->
        <?php if (!empty($available_buses)): ?>
            <section class="bus-selection">
                <h3>Available Buses for <?php echo $route_name; ?> on <?php echo $_POST['search_date']; ?></h3>
                <div class="bus-list">
                    <?php foreach ($available_buses as $bus): ?>
                        <div class="bus-item" id="bus-<?php echo $bus['id']; ?>">
                            <p>Bus Number: <?php echo $bus['bus_number']; ?></p>
                            <p>Departure Time: <?php echo $bus['time']; ?></p>
                            <button class="select-bus" data-bus-id="<?php echo $bus['id']; ?>">Select</button>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

        <!-- Seat Selection -->
        <section class="seat-selection hidden">
            <h3>Select Your Seats</h3>
            <div class="seat-legend">
                <div class="legend-item"><div class="seat driver"></div> Driver</div>
                <div class="legend-item"><div class="seat staff"></div> Staff</div>
                <div class="legend-item"><div class="seat available"></div> Available</div>
                <div class="legend-item"><div class="seat reserved"></div> Reserved</div>
            </div>
            <div class="seat-layout">
                <!-- Seat layout will be dynamically generated -->
            </div>
            <form action="book_tickets.php" method="POST" id="booking-form">
                <input type="hidden" id="bus_id" name="bus_id" value="">
                <input type="hidden" id="selected_seats" name="seats[]" required>
                <input type="hidden" id="total_fare" name="total_fare" value="">
                <div id="fare-calculator">
                    <p>Total Fare: <span id="fare-amount">0</span> AUD</p>
                    <p>Your Balance: <span id="user-balance"><?php echo $user_balance; ?></span> AUD</p>
                </div>
                <div class="form-group">
                    <label for="recharge_code">Enter Recharge Code:</label>
                    <input type="text" id="recharge_code" name="recharge_code" value="<?php echo $recharge_code; ?>" readonly>
                </div>
                <button type="submit" name="book_now">Book Now</button>
            </form>
        </section>

        <!-- Slider Section for Upcoming Buses -->
        <section class="upcoming-buses">
            <h3>Upcoming Buses</h3>
            <div class="slider">
                <?php
                // Fetch the upcoming buses (within the next 3 hours)
                $upcoming_buses_query = "SELECT * FROM buses WHERE status = 'active' AND date = CURDATE() AND time > NOW() LIMIT 10";
                $upcoming_buses_result = $conn->query($upcoming_buses_query);

                while ($upcoming_bus = $upcoming_buses_result->fetch_assoc()):
                ?>
                    <div class="bus-slide">
                        <p>Bus Number: <?php echo $upcoming_bus['bus_number']; ?></p>
                        <p>Departure Time: <?php echo $upcoming_bus['time']; ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
