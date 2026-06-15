<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Sky Glow</title>
    <!-- Google Fonts Cohesion -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Playfair+Display:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <style>
        /* Base Canvas Settings */
        body {
            background-color: #EFECE6; /* Light cream canvas backdrop */
            font-family: 'Montserrat', sans-serif;
            color: #1C1B1A;
            margin: 0;
            padding: 0;
        }

        /* Two-Column Grid Setup */
        .contact-page-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 140px 40px 100px 40px; /* Space for absolute navigation bar overlay */
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 100px;
        }

        /* Left Column: Typography Headers & Core Info */
        .contact-left-block {
            display: flex;
            flex-direction: column;
        }

        .contact-small-tag {
            font-size: 11px;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 0.3em;
            color: #8C7E6E;
            margin: 0 0 16px 0;
        }

        .contact-main-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 52px;
            font-weight: 400;
            line-height: 1.1;
            margin: 0 0 24px 0;
            color: #1C1B1A;
        }

        .contact-intro-text {
            font-size: 14px;
            font-weight: 300;
            line-height: 1.7;
            color: #555555;
            margin: 0 0 60px 0;
            max-width: 400px;
        }

        /* Structured Business Meta Grids */
        .contact-details-grid {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .contact-detail-section h4 {
            font-size: 11px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            color: #8C7E6E;
            margin: 0 0 12px 0;
        }

        .contact-detail-section p {
            font-size: 14px;
            font-weight: 300;
            line-height: 1.6;
            color: #1C1B1A;
            margin: 0;
        }

        .contact-detail-section a {
            color: #1C1B1A;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-detail-section a:hover {
            color: #8C7E6E;
        }

        /* Right Column: Premium Contact Form Setup */
        .contact-right-block {
            background-color: #ffffff; /* Crisp white form container sheet overlay */
            padding: 50px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.015);
        }

        .form-block-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 24px;
            font-weight: 400;
            margin: 0 0 8px 0;
            color: #1C1B1A;
        }

        .form-block-desc {
            font-size: 13px;
            font-weight: 300;
            color: #777777;
            margin: 0 0 32px 0;
        }

        .form-input-wrapper {
            margin-bottom: 24px;
        }

        .form-input-wrapper label {
            display: block;
            font-size: 11px;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #1C1B1A;
            margin-bottom: 8px;
        }

        .contact-field {
            width: 100%;
            background-color: #F9F8F6; /* Soft subtle gray-beige interior input fill */
            border: 1px solid #EAE5DC;
            color: #1C1B1A;
            font-family: 'Montserrat', sans-serif;
            font-size: 13px;
            font-weight: 300;
            padding: 16px;
            box-sizing: border-box;
            outline: none;
            border-radius: 0;
            transition: all 0.3s ease;
        }

        .contact-field:focus {
            border-color: #1C1B1A;
            background-color: #ffffff;
        }

        .contact-textarea {
            height: 140px;
            resize: none;
        }

        /* Luxury Action Submission buttons */
        .contact-submit-btn {
            width: 100%;
            background-color: #1C1B1A;
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            padding: 18px;
            border: 1px solid #1C1B1A;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            transition: all 0.3s ease;
        }

        .contact-submit-btn:hover {
            background-color: transparent;
            color: #1C1B1A;
        }

        .arrow-graphic {
            font-size: 15px;
            line-height: 1;
        }

        /* Responsive Breakpoints Adaptations */
        @media (max-width: 992px) {
            .contact-page-container {
                grid-template-columns: 1fr;
                gap: 60px;
                padding-top: 120px;
            }
            .contact-intro-text {
                margin-bottom: 40px;
            }
        }

        @media (max-width: 576px) {
            .contact-main-title {
                font-size: 38px;
            }
            .contact-right-block {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<main class="contact-page-container">
    
    <!-- LEFT SIDE DETAILS WRAP -->
    <section class="contact-left-block">
        <p class="contact-small-tag">Get In Touch</p>
        <h1 class="contact-main-title">Connect<br>With Sky Glow</h1>
        <p class="contact-intro-text">
            Whether you want to inquire about custom packages, verify booking setups, or arrange corporate events, our concierge team is on hand to help.
        </p>

        <!-- Structured Operational Points -->
        <div class="contact-details-grid">
            <div class="contact-detail-section">
                <h4>Our Studio Location</h4>
                <p>
                    C, El Portillo 18<br>
                    San Miguel de Abona, TF 38620.
                </p>
            </div>

            <div class="contact-detail-section">
                <h4>Direct Contact</h4>
                <p>
                    General Inquiries: <a href="mailto:info@skyglow.com">info@skyglow.com</a><br>
                    Concierge Line: <a href="tel:+34645301612">+34 645 301 612</a>
                </p>
            </div>

            <div class="contact-detail-section">
                <h4>Studio Operational Hours</h4>
                <p>
                    Tuesday &ndash; Saturday: 10:00 AM &ndash; 18:00 PM<br>
                    Sunday &ndash; Monday: Private Events Only
                </p>
            </div>
        </div>
    </section>

    <!-- RIGHT SIDE EMAIL FORM WRAP -->
    <section class="contact-right-block">
        <h3 class="form-block-title">Send A Message</h3>
        <p class="form-block-desc">Expect a response within 12–24 business hours.</p>

        <form action="process-contact.php" method="POST">
            
            <div class="form-input-wrapper">
                <label for="client_name">Your Name</label>
                <input type="text" id="client_name" name="name" class="contact-field" placeholder="E.g., Alexandra Vance" required>
            </div>

            <div class="form-input-wrapper">
                <label for="client_email">Email Address</label>
                <input type="email" id="client_email" name="email" class="contact-field" placeholder="alexandra@example.com" required>
            </div>

            <div class="form-input-wrapper">
                <label for="message_subject">Subject</label>
                <input type="text" id="message_subject" name="subject" class="contact-field" placeholder="How can we assist you?">
            </div>

            <div class="form-input-wrapper">
                <label for="client_msg">Your Message</label>
                <textarea id="client_msg" name="message" class="contact-field contact-textarea" placeholder="Write your inquiry here..." required></textarea>
            </div>

            <button type="submit" class="contact-submit-btn">
                Send Message <span class="arrow-graphic">&rarr;</span>
            </button>

        </form>
    </section>

</main>

<?php include 'footer.php'; ?>

</body>
</html>