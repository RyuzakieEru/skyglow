<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Sky Glow</title>
    <!-- Google Fonts Cohesion -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Playfair+Display:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <style>
        /* Base Canvas Styles matching image_900a09.png */
        body {
            background-color: #EFECE6; /* Cream color */
            font-family: 'Montserrat', sans-serif;
            color: #1C1B1A;
            margin: 0;
            padding: 0;
        }

        /* Services Section Layout Wrap */
        .services-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 120px 40px 80px 40px; /* Top padding leaves space for absolute navbar overlay */
        }

        /* Header Splitting Row Layout */
        .services-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 60px;
            gap: 40px;
        }

        .header-left {
            flex: 1;
        }

        .services-small-tag {
            font-size: 11px;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 0.3em;
            color: #8C7E6E;
            margin-bottom: 12px;
        }

        .services-main-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 56px;
            font-weight: 400;
            line-height: 1.1;
            color: #1C1B1A;
        }

        .header-right {
            flex: 1;
            padding-top: 28px;
        }

        .services-intro-text {
            font-size: 14px;
            font-weight: 300;
            line-height: 1.7;
            color: #555555;
            max-width: 480px;
        }

        /* Responsive Header Wrap */
        @media (max-width: 768px) {
            .services-header {
                flex-direction: column;
                gap: 20px;
            }
            .services-main-title {
                font-size: 40px;
            }
            .header-right {
                padding-top: 0;
            }
        }

        /* 3-Column Service Box Layout Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        @media (max-width: 992px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 Columns on Tablet */
            }
        }

        @media (max-width: 600px) {
            .services-grid {
                grid-template-columns: 1fr; /* 1 Column on Mobile */
            }
        }

        /* Individual Luxury Service Boxes - Converted to Link Elements */
        .service-box {
            position: relative;
            background-color: #ffffff;
            padding: 40px;
            min-height: 320px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.01);
            overflow: hidden;
            z-index: 1;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            
            /* NEW: Cleans up default link styling */
            text-decoration: none; 
            color: inherit;
            cursor: pointer;
        }

        /* Background Image Setup for the boxes */
        .service-box-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0; /* Default hidden to match image text-only look */
            transition: opacity 0.5s ease;
            z-index: -2;
        }

        /* Overlay to keep text readable when an image displays */
        .service-box-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(255,255,255,0.85) 0%, rgba(255,255,255,0.95) 100%);
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: -1;
        }

        /* Hover Interaction Effects */
        .service-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        }

        /* When a class has an image source active, show background components */
        .service-box.has-image .service-box-bg,
        .service-box.has-image .service-box-overlay {
            opacity: 1;
        }

        /* Content Text Formatting inside the boxes */
        .service-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 22px;
            font-weight: 400;
            color: #1C1B1A;
            margin-bottom: 16px;
            letter-spacing: 0.02em;
        }

        .service-desc {
            font-size: 13px;
            font-weight: 300;
            line-height: 1.6;
            color: #666666;
            margin-bottom: 40px;
        }

        /* Bottom Row Divider line & Metadata Layout */
        .service-meta-border {
            border-top: 1px solid #EAE5DC;
            margin-bottom: 20px;
        }

        .service-meta-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
        }

        .service-duration {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #777777;
            font-weight: 400;
        }

        /* Clock Icon Graphic vector */
        .clock-icon {
            width: 14px;
            height: 14px;
            stroke: #8C7E6E;
            fill: none;
            stroke-width: 1.5;
        }

        .service-price {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 18px;
            color: #1C1B1A;
        }
                /* Dark Theme Studio Policies Custom Grid Layout */
        .studio-policies-section {
            background-color: #1C1B1A; /* Matches footer background obsidian shade */
            border-bottom: 1px solid #2E2D2B; /* Subtle separator dividing policy from footer */
            padding: 40px 0;
            width: 100%;
        }

        .policies-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 50px;
        }

        .policy-item {
            text-align: center;
        }

        .policy-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 22px;
            font-weight: 400;
            color: #ffffff; /* Brilliant white for high contrast read */
            margin: 0 0 18px 0;
            letter-spacing: 0.02em;
        }

        .policy-text {
            font-size: 13px;
            font-weight: 300;
            line-height: 1.7;
            color: #A6A19A; /* Elegant muted cream tone matching footer taglines */
            margin: 0 auto;
            max-width: 320px;
        }

        /* Responsive Adaptive Viewports */
        @media (max-width: 868px) {
            .policies-container {
                grid-template-columns: 1fr; /* Stack vertically on tablets and mobile displays */
                gap: 50px;
            }
            .policy-text {
                max-width: 440px;
            }
        }
        /* Dark Theme Premium Booking CTA Layer */
            .booking-cta-section {
                background-color: #EFECE6; /* Luxe obsidian black matching your footer */
                padding: 50px 0 60px 0; /* Elegant spacing pushing elements comfortably */
                text-align: center;
                width: 100%;
            }

            .booking-cta-container {
                max-width: 800px;
                margin: 0 auto;
                padding: 0 40px;
            }

            .booking-cta-title {
                font-family: 'Playfair Display', Georgia, serif;
                font-size: 42px;
                font-weight: 400;
                color: #1C1B1A ; /* Brilliant white for striking contrast */
                margin: 0 0 16px 0;
                letter-spacing: 0.02em;
            }

            .booking-cta-text {
                font-size: 15px;
                font-weight: 300;
                line-height: 1.6;
                color: #1C1B1A; /* Soft elegant cream accent */
                margin: 0 auto 40px auto;
                max-width: 480px;
            }

            /* Luxury Interactive Button State overrides */
            .booking-btn-wrapper {
                display: inline-block;
            }

            .booking-cta-button {
                background-color: #EFECE6; /* Smooth crisp light cream background canvas button */
                color: #1C1B1A; /* Pure dark obsidian typography matching container backgrounds */
                display: inline-flex;
                align-items: center;
                gap: 12px;
                text-decoration: none;
                font-size: 12px;
                font-weight: 500;
                text-transform: uppercase;
                letter-spacing: 0.2em;
                padding: 18px 42px;
                transition: all 0.3s ease;
                border: 1px solid #1C1B1A;
            }

            .booking-cta-button:hover {
                background-color: transparent; /* Elegant dark-reveal swap outline interactive display */
                color: #ffffff;
                border-color: #ffffff;
            }

            .cta-arrow {
                font-size: 16px;
                line-height: 1;
                transition: transform 0.3s ease;
            }

            .booking-cta-button:hover .cta-arrow {
                transform: translateX(4px); /* Fluid reactive slide element movement hint */
            }

            /* Mobile responsive scaling */
            @media (max-width: 576px) {
                .booking-cta-section {
                    padding: 80px 0 40px 0;
                }
                .booking-cta-title {
                    font-size: 32px;
                }
                .booking-cta-button {
                    width: 100%;
                    box-sizing: border-box;
                    justify-content: center;
                }
            }
    </style>
</head>
<body>

<main class="services-container">
    
    <!-- Top Context Row Layout Summary -->
    <header class="services-header">
        <div class="header-left">
            <p class="services-small-tag">The Services</p>
            <h1 class="services-main-title">High and Glowing<br>Experiences</h1>
        </div>
        <div class="header-right">
            <p class="services-intro-text">
                Each service at Sky Glow is designed to be a moment of indulgence. We believe in quality over quantity, taking the time to ensure every detail is perfect.
            </p>
        </div>
    </header>

    <!-- Services Cards Output Grid -->
    <section class="services-grid">
        
        <!-- Box 1 -->
        <a href="booking.php?service=signature-manicure" class="service-box">
            <div class="service-box-bg" style="background-image: url('asset/img/sgindex.png');"></div>
            <div class="service-box-overlay"></div>
            
            <div class="service-top-content">
                <h3 class="service-title">Nails</h3>
                <p class="service-desc">Meticulously sculpted and artfully designed extensions or manicures that serve as the ultimate statement of personal indulgence.</p>
            </div>
            <div class="service-bottom-content">
                <div class="service-meta-border"></div>
                <div class="service-meta-row">
                    <span class="service-duration">
                        <svg class="clock-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6h6"/></svg>
                        60 min
                    </span>
                    <span class="service-price">80</span>
                </div>
            </div>
        </a>

        <!-- Box 2 -->
        <a href="booking.php?service=bespoke-art" class="service-box">
            <div class="service-box-bg" style="background-image: url('asset/img/service2.jpg');"></div>
            <div class="service-box-overlay"></div>
            <div class="service-top-content">
                <h3 class="service-title">Wax</h3>
                <p class="service-desc">A flawless, skin-smoothing botanical treatment executed with the utmost care to leave your skin feeling exquisitely silky and radiant.</p>
            </div>
            <div class="service-bottom-content">
                <div class="service-meta-border"></div>
                <div class="service-meta-row">
                    <span class="service-duration">
                        <svg class="clock-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6h6"/></svg>
                        120 min
                    </span>
                    <span class="service-price">185</span>
                </div>
            </div>
        </a>

        <!-- Box 3 -->
        <a href="booking.php?service=bridal-collection" class="service-box">
            <div class="service-box-bg" style="background-image: url('asset/img/service3.jpg');"></div>
            <div class="service-box-overlay"></div>
            <div class="service-top-content">
                <h3 class="service-title">Threading</h3>
                <p class="service-desc">Expertly detailed facial hair removal utilizing precision techniques to beautifully frame your features with clean, flawless lines.</p>
            </div>
            <div class="service-bottom-content">
                <div class="service-meta-border"></div>
                <div class="service-meta-row">
                    <span class="service-duration">
                        <svg class="clock-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6h6"/></svg>
                        180 min
                    </span>
                    <span class="service-price">325</span>
                </div>
            </div>
        </a>

        <!-- Box 4 -->
        <a href="booking.php?service=chrome-specialty" class="service-box">
            <div class="service-box-bg" style="background-image: url('asset/img/service4.jpg');"></div>
            <div class="service-box-overlay"></div>
            <div class="service-top-content">
                <h3 class="service-title">Eyelashes</h3>
                <p class="service-desc">Custom-tailored lash enhancements designed to add captivating volume, effortless length, and a brilliant, eye-opening glow.</p>
            </div>
            <div class="service-bottom-content">
                <div class="service-meta-border"></div>
                <div class="service-meta-row">
                    <span class="service-duration">
                        <svg class="clock-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6h6"/></svg>
                        75 min
                    </span>
                    <span class="service-price">110</span>
                </div>
            </div>
        </a>

        <!-- Box 5 -->
        <a href="booking.php?service=gel-extension" class="service-box">
            <div class="service-box-bg" style="background-image: url('asset/img/service5.jpg');"></div>
            <div class="service-box-overlay"></div>
            <div class="service-top-content">
                <h3 class="service-title">Hair</h3>
                <p class="service-desc">Premium cutting, coloring, and styling experiences crafted to bring out your hair's natural luminosity and elevate your signature look.</p>
            </div>
            <div class="service-bottom-content">
                <div class="service-meta-border"></div>
                <div class="service-meta-row">
                    <span class="service-duration">
                        <svg class="clock-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6h6"/></svg>
                        90 min
                    </span>
                    <span class="service-price">140</span>
                </div>
            </div>
        </a>

        <!-- Box 6 -->
        <a href="booking.php?service=maintenance-refill" class="service-box">
            <div class="service-box-bg" style="background-image: url('asset/img/service6.jpg');"></div>
            <div class="service-box-overlay"></div>
            <div class="service-top-content">
                <h3 class="service-title">Massage</h3>
                <p class="service-desc">A deeply restorative sensory journey designed to release tight muscle tissue and melt away stress in a tranquil, luxurious atmosphere.</p>
            </div>
            <div class="service-bottom-content">
                <div class="service-meta-border"></div>
                <div class="service-meta-row">
                    <span class="service-duration">
                        <svg class="clock-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6h6"/></svg>
                        60 min
                    </span>
                    <span class="service-price">70</span>
                </div>
            </div>
        </a>

        <!-- Box 7 -->
        <a href="booking.php?service=paraffin-therapy" class="service-box">
            <div class="service-box-bg" style="background-image: url('asset/img/service7.jpg');"></div>
            <div class="service-box-overlay"></div>
            <div class="service-top-content">
                <h3 class="service-title">Facial</h3>
                <p class="service-desc">A high-performance skincare therapy system curated to deeply hydrate, refresh, and reveal a luminous, youthfully radiant complexion.</p>
            </div>
            <div class="service-bottom-content">
                <div class="service-meta-border"></div>
                <div class="service-meta-row">
                    <span class="service-duration">
                        <svg class="clock-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6h6"/></svg>
                        30 min
                    </span>
                    <span class="service-price">45</span>
                </div>
            </div>
        </a>

        <!-- Box 8 -->
        <a href="booking.php?service=luxury-pedicure" class="service-box">
            <div class="service-box-bg" style="background-image: url('asset/img/service8.jpg');"></div>
            <div class="service-box-overlay"></div>
            <div class="service-top-content">
                <h3 class="service-title">Boutique</h3>
                <p class="service-desc">A carefully curated collection of luxury self-care products and bespoke accessories chosen to let you bring the Sky Glow indulgence home.</p>
            </div>
            <div class="service-bottom-content">
                <div class="service-meta-border"></div>
                <div class="service-meta-row">
                    <span class="service-duration">
                        <svg class="clock-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6h6"/></svg>
                        75 min
                    </span>
                    <span class="service-price">95</span>
                </div>
            </div>
        </a>
        <!-- Box 9 -->
                <a href="book.php?service=luxury-pedicure" class="service-box">
                    <div class="service-box-bg" style="background-image: url('asset/img/service8.jpg');"></div>
                    <div class="service-box-overlay"></div>
                    <div class="service-top-content">
                        <h3 class="service-title">Wellness</h3>
                        <p class="service-desc">A holistic, rejuvenating sanctuary of specialized therapies and mindful practices curated to restore internal harmony and ignite your natural vitality.</p>
                    </div>
                    <div class="service-bottom-content">
                        <div class="service-meta-border"></div>
                        <div class="service-meta-row">
                            <span class="service-duration">
                                <svg class="clock-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6h6"/></svg>
                                75 min
                            </span>
                            <span class="service-price">95</span>
                        </div>
                    </div>
                </a>
    </section>
</main>

<section class="studio-policies-section">
    <div class="policies-container">
        
        <div class="policy-item">
            <h3 class="policy-title">Booking Policy</h3>
            <p class="policy-text">
                A 50% deposit is required to secure your appointment. Deposits are non-refundable within 48 hours of service.
            </p>
        </div>

        <div class="policy-item">
            <h3 class="policy-title">Cancellations</h3>
            <p class="policy-text">
                Please provide 48 hours notice for cancellations or rescheduling to avoid forfeiting your deposit.
            </p>
        </div>

        <div class="policy-item">
            <h3 class="policy-title">Arrival</h3>
            <p class="policy-text">
                Please arrive 5-10 minutes early to ensure your full service time. Late arrivals may result in shortened services.
            </p>
        </div>

    </div>
</section>

<section class="booking-cta-section">
    <div class="booking-cta-container">
        <h2 class="booking-cta-title">Ready to Book?</h2>
        <p class="booking-cta-text">
            Secure your appointment and begin your journey to exquisite nails.
        </p>
        <div class="booking-btn-wrapper">
            <a href="book.php" class="booking-cta-button">
                Book Your Session 
                <span class="cta-arrow">&rarr;</span>
            </a>
        </div>
    </div>
</section>

</body>
</html>

<?php include 'footer.php'; ?>