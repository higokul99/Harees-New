<?php
// Database connection (adjust credentials as needed)
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "hjdb";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Process form submission if POST request
// $message = "";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'] ?? '';
//     $email = $_POST['email'] ?? '';
//     $phone = $_POST['phone'] ?? '';
//     $subject = $_POST['subject'] ?? '';
//     $messageText = $_POST['message'] ?? '';
    
//     // Basic validation
//     if (!empty($name) && !empty($email) && !empty($messageText)) {
//         // In a real application, you'd want to sanitize inputs
//         $sql = "INSERT INTO contact_messages (name, email, phone, subject, message) 
//                 VALUES ('$name', '$email', '$phone', '$subject', '$messageText')";
        
//         if ($conn->query($sql) === TRUE) {
//             $message = "<div class='success-message'>Thank you for your message. We'll get back to you soon!</div>";
//         } else {
//             $message = "<div class='error-message'>Sorry, there was an error sending your message.</div>";
//         }
//     } else {
//         $message = "<div class='error-message'>Please fill all required fields.</div>";
//     }
// }

// // Fetch branch data from database
// $branches = [];
// $sql = "SELECT * FROM branches ORDER BY name ASC";
// $result = $conn->query($sql);

// if ($result && $result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         $branches[] = $row;
//     }
// } else {
    // Fallback data if database is empty or query fails
    $branches = [
        [
            'name' => 'Abu Dhabi Branch',
            'address' => '456 Business Street, Abu Dhabi, UAE',
            'phone' => '+971 2 987 6543',
            'email' => 'abudhabi@harees.com',
            'lat' => 24.4539,
            'lng' => 54.3773
        ],
        [
            'name' => 'Sharjah Branch',
            'address' => '789 Commerce Road, Sharjah, UAE',
            'phone' => '+971 6 345 6789',
            'email' => 'sharjah@harees.com',
            'lat' => 25.3463,
            'lng' => 55.4209
        ],
        [
            'name' => 'Ajman Branch',
            'address' => '101 Industry Boulevard, Ajman, UAE',
            'phone' => '+971 6 111 2222',
            'email' => 'ajman@harees.com',
            'lat' => 25.4111,
            'lng' => 55.4354
        ]
    ];
//}

//$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Locations - Harees FE Directory</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" defer></script>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        a {
            color: #054ea2;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        a:hover {
            color: #033a7a;
        }
        
        /* Header Styles */
        .header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .header-top {
            background-color: #054ea2;
            padding: 10px 0;
            color: #fff;
        }
        
        .header-top .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .contact-info {
            display: flex;
            gap: 20px;
        }
        
        .contact-info a {
            color: #fff;
            font-size: 14px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            color: #fff;
            font-size: 14px;
        }
        
        .header-main {
            padding: 15px 0;
        }
        
        .header-main .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo img {
            height: 50px;
        }
        
        .nav-menu {
            display: flex;
            gap: 30px;
        }
        
        .nav-menu a {
            color: #333;
            font-weight: 500;
            position: relative;
            padding: 5px 0;
        }
        
        .nav-menu a:hover {
            color: #054ea2;
        }
        
        .nav-menu a.active {
            color: #054ea2;
        }
        
        .nav-menu a.active:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #054ea2;
        }
        
        .mobile-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }
        
        /* Banner Section */
        .banner-section {
            background: linear-gradient(rgba(5, 78, 162, 0.8), rgba(5, 78, 162, 0.8)), url('images/location-bg.jpg') no-repeat center/cover;
            padding: 80px 0;
            color: #fff;
            text-align: center;
        }
        
        .banner-content h1 {
            font-size: 36px;
            margin-bottom: 15px;
        }
        
        .breadcrumb {
            font-size: 14px;
        }
        
        .breadcrumb a {
            color: #fff;
        }
        
        /* Section Styles */
        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .section-title h2 {
            font-size: 32px;
            color: #054ea2;
            margin-bottom: 10px;
        }
        
        .section-title p {
            color: #666;
        }
        
        /* Location Section */
        .location-section {
            padding: 80px 0;
        }
        
        .location-wrapper {
            margin-bottom: 60px;
        }
        
        .main-location {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .location-info {
            padding: 30px;
        }
        
        .location-info h3 {
            color: #054ea2;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .location-info address {
            font-style: normal;
            margin-bottom: 20px;
        }
        
        .location-info address p {
            margin-bottom: 10px;
        }
        
        .location-info address i {
            color: #054ea2;
            width: 20px;
            margin-right: 10px;
        }
        
        .hours h4 {
            margin-bottom: 10px;
            color: #333;
        }
        
        .hours p {
            margin-bottom: 5px;
            color: #666;
        }
        
        .location-map {
            height: 100%;
            min-height: 300px;
        }
        
        /* Branch Locations */
        .branch-locations h3 {
            font-size: 24px;
            color: #054ea2;
            margin-bottom: 20px;
        }
        
        .location-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .branch-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .branch-card h4 {
            background-color: #054ea2;
            color: #fff;
            padding: 15px;
            font-size: 18px;
        }
        
        .branch-card address {
            padding: 20px;
            font-style: normal;
        }
        
        .branch-card address p {
            margin-bottom: 10px;
        }
        
        .branch-card address i {
            color: #054ea2;
            width: 20px;
            margin-right: 10px;
        }
        
        .branch-map {
            height: 200px;
        }
        
        /* Contact Form */
        .contact-form-section {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        #location-contact-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .form-group:last-child,
        .form-group:nth-last-child(2) {
            grid-column: span 2;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: inherit;
            font-size: 14px;
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .form-group button {
            background-color: #054ea2;
            color: #fff;
            border: none;
            padding: 14px 30px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        
        .form-group button:hover {
            background-color: #033a7a;
        }
        
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
            grid-column: span 2;
        }
        
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
            grid-column: span 2;
        }
        
        /* Footer Styles */
        .footer {
            background-color: #0a2640;
            color: #fff;
            padding-top: 60px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
        }
        
        .footer-column h3:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: #054ea2;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #ccc;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: #fff;
        }
        
        .footer-contact p {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }
        
        .footer-contact i {
            color: #054ea2;
            margin-right: 10px;
            width: 20px;
        }
        
        .footer-bottom {
            background-color: #051e34;
            padding: 20px 0;
            text-align: center;
            font-size: 14px;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .main-location {
                grid-template-columns: 1fr;
            }
            
            .location-map {
                height: 300px;
            }
        }
        
        @media (max-width: 768px) {
            .header-top .container {
                flex-direction: column;
                gap: 10px;
            }
            
            .contact-info {
                flex-direction: column;
                align-items: center;
                gap: 5px;
            }
            
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: #fff;
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            }
            
            .nav-menu.active {
                display: flex;
            }
            
            .mobile-toggle {
                display: block;
            }
            
            #location-contact-form {
                grid-template-columns: 1fr;
            }
            
            .form-group:last-child,
            .form-group:nth-last-child(2) {
                grid-column: span 1;
            }
            
            .success-message,
            .error-message {
                grid-column: span 1;
            }
        }
        
        @media (max-width: 576px) {
            .banner-section {
                padding: 50px 0;
            }
            
            .banner-content h1 {
                font-size: 28px;
            }
            
            .section-title h2 {
                font-size: 24px;
            }
            
            .location-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="contact-info">
                    <a href="mailto:info@harees.com"><i class="fas fa-envelope"></i> info@harees.com</a>
                    <a href="tel:+97142354789"><i class="fas fa-phone"></i> +971 4 235 4789</a>
                </div>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <div class="logo">
                    <a href="index">
                        <img src="images/logo.png" alt="Harees FE Directory">
                    </a>
                </div>
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <nav class="nav-menu">
                    <a href="index">Home</a>
                    <a href="about">About Us</a>
                    <a href="services">Services</a>
                    <a href="directory">Directory</a>
                    <a href="location" class="active">Locations</a>
                    <a href="contact">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Banner Section -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-content">
                <h1>Our Locations</h1>
                <div class="breadcrumb">
                    <a href="index">Home</a> / <span>Locations</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="location-section">
        <div class="container">
            <div class="section-title">
                <h2>Find Us</h2>
                <p>Visit our offices or reach out to our locations worldwide</p>
            </div>

            <div class="location-wrapper">
                <!-- Main Location -->
                <div class="main-location">
                    <div class="location-info">
                        <h3>Headquarters</h3>
                        <address>
                            <p><i class="fas fa-map-marker-alt"></i> 123 Business Avenue, Dubai, UAE</p>
                            <p><i class="fas fa-phone"></i> +971 4 123 4567</p>
                            <p><i class="fas fa-envelope"></i> info@harees.com</p>
                        </address>
                        <div class="hours">
                            <h4>Business Hours</h4>
                            <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                            <p>Saturday: 10:00 AM - 2:00 PM</p>
                            <p>Sunday: Closed</p>
                        </div>
                    </div>
                    <div class="location-map" id="main-map">
                        <!-- Map will be initialized here -->
                    </div>
                </div>

                <!-- Branch Locations -->
                <div class="branch-locations">
                    <h3>Our Branches</h3>
                    <div class="location-grid">
                        <?php foreach ($branches as $index => $branch): ?>
                            <div class="branch-card">
                                <h4><?php echo htmlspecialchars($branch['name']); ?></h4>
                                <address>
                                    <p><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($branch['address']); ?></p>
                                    <p><i class="fas fa-phone"></i> <?php echo htmlspecialchars($branch['phone']); ?></p>
                                    <p><i class="fas fa-envelope"></i> <?php echo htmlspecialchars($branch['email']); ?></p>
                                </address>
                                <div class="branch-map" id="branch-map-<?php echo $index; ?>" 
                                     data-lat="<?php echo htmlspecialchars($branch['lat']); ?>" 
                                     data-lng="<?php echo htmlspecialchars($branch['lng']); ?>">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="contact-form-section">
                <div class="section-title">
                    <h2>Get in Touch</h2>
                    <p>Send us a message and we'll get back to you as soon as possible</p>
                </div>
                
                <?php //echo $message; ?>
                
                <form id="location-contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Your Phone">
                    </div>
                    <div class="form-group">
                        <select name="subject" required>
                            <option value="" disabled selected>Select Subject</option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Business Proposal">Business Proposal</option>
                            <option value="Support">Support</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn primary-btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>About Us</h3>
                    <p>Harees FE Directory provides comprehensive business listings and services across the UAE, connecting businesses and customers efficiently.</p>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="index">Home</a></li>
                        <li><a href="about">About Us</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="directory">Directory</a></li>
                        <li><a href="location">Locations</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Business Listings</a></li>
                        <li><a href="#">Premium Directories</a></li>
                        <li><a href="#">Business Consultation</a></li>
                        <li><a href="#">Marketing Solutions</a></li>
                        <li><a href="#">Event Management</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <div class="footer-contact">
                        <p><i class="fas fa-map-marker-alt"></i> 123 Business Avenue, Dubai, UAE</p>
                        <p><i class="fas fa-phone"></i> +971 4 123 4567</p>
                        <p><i class="fas fa-envelope"></i> info@harees.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; <?php echo date('Y'); ?> Harees FE Directory. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-toggle').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
        });
        
        // Initialize Google Maps
        function initMap() {
            // Headquarters map
            const mainLocation = { lat: 25.2048, lng: 55.2708 }; // Dubai coordinates
            const mainMap = new google.maps.Map(document.getElementById("main-map"), {
                zoom: 15,
                center: mainLocation,
            });
            const mainMarker = new google.maps.Marker({
                position: mainLocation,
                map: mainMap,
                title: "Harees FE Headquarters"
            });

            // Branch maps
            document.querySelectorAll('.branch-map').forEach(element => {
                const lat = parseFloat(element.dataset.lat);
                const lng = parseFloat(element.dataset.lng);
                const branchLocation = { lat, lng };
                
                const branchMap = new google.maps.Map(element, {
                    zoom: 14,
                    center: branchLocation,
                });
                
                const branchMarker = new google.maps.Marker({
                    position: branchLocation,
                    map: branchMap,
                    title: element.parentElement.querySelector('h4').textContent
                });
            });
        }
    </script>
</body>
</html>