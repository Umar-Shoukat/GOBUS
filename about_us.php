<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Canberra Bus</title>

    <link rel="stylesheet" href="assets/css/about_us.css">
    <style>
        .hero-section {
    position: relative;
    background: url('assets/images/hero_banner.jpg') no-repeat center center;
    background-size: cover;
    height: 500px;
    display: flex;
    align-items: center;
    text-align: center;
    color: white;
}
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1>About <span>GOBus</span></h1>
                <p>Australia's premier bus service committed to excellence in transportation since 2008</p>
            </div>
        </div>
    </section>

    <!-- Company Overview Section -->
    <section class="overview-section section-padding">
        <div class="container">
            <div class="overview-content">
                <div class="overview-image">
                    <img src="assets/images/bus1.jpg" alt="GOBus Company">
                </div>
                <div class="overview-text">
                    <h2>Our Journey</h2>
                    <p>GOBus was established in 2008-[demo] with a vision to transform bus travel across Australia. What began as a small fleet connecting Canberra to neighboring cities has evolved into one of the country's most trusted transportation networks.</p>
                    <p>Over the years, we've expanded our routes, modernized our fleet, and enhanced our services while maintaining our core values of safety, reliability, and customer satisfaction. Today, we're proud to serve over 2 million passengers annually, connecting major cities and regional areas with comfort and convenience.</p>
                    
                    <div class="key-facts">
                        <div class="fact">
                            <span class="fact-number">15+</span>
                            <span class="fact-text">Years of Experience</span>
                        </div>
                        <div class="fact">
                            <span class="fact-number">500+</span>
                            <span class="fact-text">Daily Trips</span>
                        </div>
                        <div class="fact">
                            <span class="fact-number">2M+</span>
                            <span class="fact-text">Annual Passengers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values Section -->
    <section class="mission-section section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Our Mission & Values</h2>
                <p>Guided by strong principles that drive every aspect of our service</p>
            </div>
            
            <div class="mission-values-container">
                <div class="mission-block">
                    <div class="mission-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L1 12H4V22H20V12H23L12 2Z" stroke="#0055aa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To connect people and communities through safe, reliable, and sustainable transportation that exceeds customer expectations while contributing positively to the regions we serve.</p>
                </div>
                
                <div class="values-block">
                    <div class="value-item">
                        <div class="value-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 11.0801V12.0001C21.9988 14.1565 21.3005 16.2548 20.0093 17.9819C18.7182 19.7091 16.9033 20.9726 14.8354 21.5839C12.7674 22.1952 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2462 3.61096 17.4372C2.43727 15.6281 1.87979 13.4882 2.02168 11.3364C2.16356 9.18467 2.99721 7.13643 4.39828 5.49718C5.79935 3.85793 7.69279 2.71549 9.79619 2.24025C11.8996 1.76502 14.1003 1.98245 16.07 2.86011" stroke="#0055aa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22 4L12 14.01L9 11.01" stroke="#0055aa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="value-content">
                            <h4>Safety First</h4>
                            <p>The safety of our passengers, staff, and the public is our top priority in every decision we make.</p>
                        </div>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#0055aa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 6V12L16 14" stroke="#0055aa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="value-content">
                            <h4>Reliability</h4>
                            <p>We pride ourselves on punctuality and consistency, ensuring our customers can depend on our services.</p>
                        </div>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="#0055aa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="#0055aa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="value-content">
                            <h4>Customer Focus</h4>
                            <p>We listen to our customers and continuously evolve our services to meet their changing needs.</p>
                        </div>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 8H19C20.0609 8 21.0783 8.42143 21.8284 9.17157C22.5786 9.92172 23 10.9391 23 12C23 13.0609 22.5786 14.0783 21.8284 14.8284C21.0783 15.5786 20.0609 16 19 16H18" stroke="#0055aa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 8H18V17C18 18.0609 17.5786 19.0783 16.8284 19.8284C16.0783 20.5786 15.0609 21 14 21H10C8.93913 21 7.92172 20.5786 7.17157 19.8284C6.42143 19.0783 6 18.0609 6 17V8Z" stroke="#0055aa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 8H5C3.93913 8 2.92172 8.42143 2.17157 9.17157C1.42143 9.92172 1 10.9391 1 12C1 13.0609 1.42143 14.0783 2.17157 14.8284C2.92172 15.5786 3.93913 16 5 16H6" stroke="#0055aa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="value-content">
                            <h4>Sustainability</h4>
                            <p>We're committed to reducing our environmental footprint through eco-friendly practices and fleet modernization.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Leadership Team</h2>
                <p>Meet the dedicated professionals driving our mission forward</p>
            </div>
            
            <div class="team-grid">
                <!-- Team Member 1 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="assets/images/team_member_1.jpg" alt="Ruby">
                    </div>
                    <div class="member-info">
                        <h3>Ruby</h3>
                        <p class="member-position">Founder & CEO</p>
                        <p class="member-bio">With over 15 years in the transportation industry, Ruby leads GOBus with a vision for innovation and excellence. Her leadership has transformed the company into a leading transportation provider in Australia.</p>
                        <div class="member-social">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                            <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="assets/images/team_member_2.jpg" alt="Umar Shoukat">
                    </div>
                    <div class="member-info">
                        <h3>Umar Shoukat</h3>
                        <p class="member-position">Operations Manager</p>
                        <p class="member-bio">Umar oversees the daily operations of GOBus, ensuring smooth service delivery across all routes. His expertise in logistics and fleet management has been instrumental in maintaining our high service standards.</p>
                        <div class="member-social">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                            <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="assets/images/team_member_3.jpg" alt="Tarun Sharma">
                    </div>
                    <div class="member-info">
                        <h3>Tarun Sharma</h3>
                        <p class="member-position">Head of Customer Experience</p>
                        <p class="member-bio">Tarun leads our customer service initiatives, focusing on enhancing passenger satisfaction at every touchpoint. His customer-centric approach has helped establish GOBus as a service-oriented transportation company.</p>
                        <div class="member-social">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                            <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>What Our Customers Say</h2>
                <p>Feedback from passengers who travel with us regularly</p>
            </div>
            
            <div class="testimonials-slider">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"I've been using GOBus for my weekly commute between Sydney and Canberra for over 3 years. The service is consistently reliable, and the staff are always friendly and helpful. It's become my preferred way to travel."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="assets/images/testimonial_1.jpg" alt="Sarah Williams">
                        <div>
                            <h4>Sarah Williams</h4>
                            <p>Regular Commuter</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"As a business traveler, I appreciate the punctuality and comfort that GOBus provides. The onboard amenities like WiFi and power outlets allow me to work during my journey, making my travel time productive."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="assets/images/testimonial_2.jpg" alt="James Taylor">
                        <div>
                            <h4>James Taylor</h4>
                            <p>Business Professional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="contact-cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Have Questions About Our Services?</h2>
                <p>Our team is here to help with any inquiries about routes, bookings, or special requirements.</p>
                <a href="contact_us.php" class="btn-primary">Contact Us Today</a>
            </div>
        </div>
    </section>

    <!-- Let's create a custom CSS file for the new About Us page -->


    <!-- Include Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <?php include 'includes/footer.php'; ?>
</body>
</html>
