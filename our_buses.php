<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Buses - GOBus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/our_buses.css">
    <style>
        .hero-bus {
  background: 
    url("assets/images/hero_banner.jpg") no-repeat center center/cover;
  position: relative;
  height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
}
    </style>
</head>
<body>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-bus">
    <div class="hero-bus-content">
    <div class="hero-overlay"></div>
        <h1>Our Buses</h1>
        <p>Discover our modern, comfortable, and safe fleet for every journey.</p>
        <a href="book_tickets.php" class="btn-hero">Book Your Trip</a>
    </div>
</section>

<!-- Why Travel With Us Section -->
<section class="why-section">
    <div class="container">
        <div class="section-title" style="margin-bottom:30px;">
            <h2 style="margin-bottom:6px;">Why Travel With GOBus?</h2>
            <p>We go the extra mile to make your journey exceptional.</p>
        </div>
        <div class="why-grid">
            <div class="why-item">
                <i class="fas fa-shield-alt"></i>
                <h4>Safety First</h4>
                <p>All our buses undergo rigorous safety checks and are driven by experienced professionals.</p>
            </div>
            <div class="why-item">
                <i class="fas fa-clock"></i>
                <h4>On-Time Guarantee</h4>
                <p>We pride ourselves on punctuality and reliability for every trip.</p>
            </div>
            <div class="why-item">
                <i class="fas fa-wifi"></i>
                <h4>Modern Amenities</h4>
                <p>Enjoy WiFi, power outlets, air conditioning, and more on most of our fleet.</p>
            </div>
            <div class="why-item">
                <i class="fas fa-leaf"></i>
                <h4>Eco-Friendly</h4>
                <p>We invest in fuel-efficient, low-emission vehicles for a greener tomorrow.</p>
            </div>
        </div>
    </div>
</section>

<!-- Fleet Showcase -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Our Fleet</h2>
            <p>Choose the perfect bus for your next trip. All our vehicles are maintained to the highest standards and equipped with modern amenities.</p>
        </div>
        <div class="fleet-grid">
            <!-- Luxury Coach -->
            <div class="fleet-card">
                <div class="fleet-image">
                    <img src="assets/images/bus1.jpg" alt="Luxury Coach">
                </div>
                <div class="fleet-info">
                    <h3>Luxury Coach</h3>
                    <div class="fleet-subtitle"><i class="fas fa-star"></i> Premium Comfort</div>
                    <div class="fleet-details">
                        <div class="fleet-amenities">
                            <span><i class="fas fa-wifi"></i> WiFi</span>
                            <span><i class="fas fa-plug"></i> Power Outlets</span>
                            <span><i class="fas fa-couch"></i> Reclining Seats</span>
                            <span><i class="fas fa-coffee"></i> Refreshments</span>
                            <span><i class="fas fa-restroom"></i> Restroom</span>
                        </div>
                        <div class="fleet-price">From $49</div>
                    </div>
                    <a href="book_tickets.php?type=luxury" class="fleet-btn">Book Now</a>
                </div>
            </div>
            <!-- Standard Coach -->
            <div class="fleet-card">
                <div class="fleet-image">
                    <img src="assets/images/bus2.jpg" alt="Standard Coach">
                </div>
                <div class="fleet-info">
                    <h3>Standard Coach</h3>
                    <div class="fleet-subtitle"><i class="fas fa-thumbs-up"></i> Great Value</div>
                    <div class="fleet-details">
                        <div class="fleet-amenities">
                            <span><i class="fas fa-wifi"></i> WiFi</span>
                            <span><i class="fas fa-tv"></i> Entertainment</span>
                            <span><i class="fas fa-snowflake"></i> Air Conditioning</span>
                            <span><i class="fas fa-chair"></i> Comfortable Seats</span>
                        </div>
                        <div class="fleet-price">From $39</div>
                    </div>
                    <a href="book_tickets.php?type=standard" class="fleet-btn">Book Now</a>
                </div>
            </div>
            <!-- Economy Coach -->
            <div class="fleet-card">
                <div class="fleet-image">
                    <img src="assets/images/bus3.jpg" alt="Economy Coach">
                </div>
                <div class="fleet-info">
                    <h3>Economy Coach</h3>
                    <div class="fleet-subtitle"><i class="fas fa-leaf"></i> Budget Friendly</div>
                    <div class="fleet-details">
                        <div class="fleet-amenities">
                            <span><i class="fas fa-snowflake"></i> Air Conditioning</span>
                            <span><i class="fas fa-lightbulb"></i> Reading Light</span>
                            <span><i class="fas fa-box"></i> Extra Storage</span>
                        </div>
                        <div class="fleet-price">From $29</div>
                    </div>
                    <a href="book_tickets.php?type=economy" class="fleet-btn">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section testimonials-section">
    <div class="container">
        <div class="section-title">
            <h2>What Our Passengers Say</h2>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <img src="assets/images/team_member_1.jpg" alt="Sarah Williams">
                <p>"The luxury coach was spotless and the staff were so friendly. I enjoyed every minute of my trip!"</p>
                <div class="author">Sarah Williams</div>
            </div>
            <div class="testimonial-card">
                <img src="assets/images/team_member_2.jpg" alt="James Taylor">
                <p>"Onboard WiFi and power outlets made my business trip so much easier. Highly recommended!"</p>
                <div class="author">James Taylor</div>
            </div>
            <div class="testimonial-card">
                <img src="assets/images/team_member_3.jpg" alt="Emily Brown">
                <p>"Affordable, reliable, and comfortable. The economy coach is perfect for students like me."</p>
                <div class="author">Emily Brown</div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="faq-title">Frequently Asked Questions</div>
    <div class="faq-item">
        <div class="faq-question">Is WiFi available on all buses? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer">Yes, WiFi is available on all Luxury and Standard coaches.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">Can I change my seat after booking? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer">Yes, you can change your seat up to 1 hour before departure, subject to availability.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">Do your buses have wheelchair access? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer">Yes, selected buses have wheelchair access. Please contact us for more details and to ensure availability.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">Are refreshments provided on all routes? <i class="fas fa-chevron-down"></i></div>
        <div class="faq-answer">Complimentary refreshments are available on Luxury coaches. Standard and Economy coaches offer refreshments for purchase.</div>
    </div>
</section>

<script>
// FAQ Accordion
const faqItems = document.querySelectorAll('.faq-item');
faqItems.forEach(item => {
    item.querySelector('.faq-question').addEventListener('click', () => {
        item.classList.toggle('active');
        // Close others
        faqItems.forEach(other => {
            if (other !== item) other.classList.remove('active');
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>
</body>
</html>
