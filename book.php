<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Appointment - Sky Glow</title>
    <!-- Google Fonts Cohesion -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Playfair+Display:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <style>
        /* Base Page Configurations matching Sky Glow Canvas */
        body {
            background-color: #EFECE6; /* Light cream canvas matching reference layout */
            font-family: 'Montserrat', sans-serif;
            color: #1C1B1A;
            margin: 0;
            padding: 0;
        }

        /* Split Screen Container Layout */
        .booking-page-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 140px 40px 80px 40px; /* Leaves clean breathing space below fixed navbar header */
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 80px;
        }

        /* ========================================================
           LEFT SIDE COLUMN: Headers & Brand Visual
           ======================================================== */
        .booking-left-column {
            display: flex;
            flex-direction: column;
        }

        .booking-tagline {
            font-size: 11px;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 0.3em;
            color: #8C7E6E;
            margin: 0 0 16px 0;
        }

        .booking-main-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 52px;
            font-weight: 400;
            line-height: 1.1;
            margin: 0 0 24px 0;
            color: #1C1B1A;
        }

        .booking-subtext {
            font-size: 14px;
            font-weight: 300;
            line-height: 1.6;
            color: #666666;
            margin: 0 0 48px 0;
            max-width: 420px;
        }

        /* Luxury Campaign Imagery Holder */
        /* Luxury Campaign Imagery Holder - Fixed Render Rule */
        .booking-hero-image {
            display: block; /* Forces block element rendering context */
            width: 100%;
            height: 520px; /* Sets fixed vertical space on desktop views */
            background-image: url('assets/img/booking-hero.jpg'); /* Verify this path matches your directory structure */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.02);
        }

        /* ========================================================
           RIGHT SIDE COLUMN: Form Inputs & Studio Details
           ======================================================== */
        .booking-right-column {
            display: flex;
            flex-direction: column;
        }

        /* Meta Studio Details Panel */
        .studio-info-panel {
            display: flex;
            flex-direction: column;
            gap: 28px;
            margin-bottom: 50px;
        }

        .info-block-title {
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 0.05em;
            color: #1C1B1A;
            margin: 0 0 6px 0;
        }

        .info-block-detail {
            font-size: 13px;
            font-weight: 300;
            line-height: 1.6;
            color: #555555;
            margin: 0;
            text-transform: uppercase; /* Matches the uppercase aesthetic of address labels */
        }

        /* Form Layout Headers & Structural Segments */
        .booking-form-element {
            width: 100%;
        }

        .form-section-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 20px;
            font-weight: 400;
            color: #1C1B1A;
            margin: 40px 0 20px 0;
            border-bottom: 1px solid rgba(28, 27, 26, 0.08);
            padding-bottom: 12px;
        }

        .form-section-title:first-of-type {
            margin-top: 0; /* Clear margin above first information form category header */
        }

        /* Grouped Input Row Boxes styling fields */
        .input-group-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 16px;
        }

        .input-wrapper {
            position: relative;
            margin-bottom: 16px;
            width: 100%;
        }

        /* Global Input field designs matching input border structures */
        .sky-input, .sky-select, .sky-textarea {
            width: 100%;
            background-color: #ffffff;
            border: 1px solid #CFCBC4;
            color: #1C1B1A;
            font-family: 'Montserrat', sans-serif;
            font-size: 13px;
            font-weight: 300;
            padding: 16px 16px 16px 48px; /* Extra left padding leaves room for input field vector symbols */
            box-sizing: border-box;
            outline: none;
            border-radius: 0; /* Ensures sharp premium luxury corners */
            transition: border-color 0.3s ease;
            -webkit-appearance: none; /* Disables generic webkit operating engine select arrows */
        }

        /* Adjust textarea tracking box padding values slightly */
        .sky-textarea {
            padding: 16px 16px 16px 48px;
            height: 120px;
            resize: none;
        }

        /* Specific select element overrides to place custom micro dropdown chevron signals */
        .select-container {
            position: relative;
            width: 100%;
        }

        .select-container::after {
            content: '▾';
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 12px;
            color: #8C7E6E;
            pointer-events: none;
        }

        .sky-input:focus, .sky-select:focus, .sky-textarea:focus {
            border-color: #1C1B1A; /* Darkens border bounds when interacting */
        }

        /* Standardized Input Vector Icon Graphics overlays */
        .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            fill: none;
            stroke: #8C7E6E;
            stroke-width: 1.5;
            pointer-events: none;
        }

        .textarea-wrapper .input-icon {
            top: 24px; /* Pins icon neatly to top left quadrant of comment boxes */
            transform: none;
        }

        /* Submit Interactive Actions Elements */
        .submit-btn-container {
            margin-top: 32px;
        }

        .sky-submit-button {
            width: 100%;
            background-color: #1C1B1A; /* Deep solid matching background footer styling specs */
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            padding: 20px;
            border: 1px solid #1C1B1A;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            transition: all 0.3s ease;
        }

        .sky-submit-button:hover {
            background-color: transparent;
            color: #1C1B1A;
        }

        .btn-arrow {
            font-size: 15px;
            line-height: 1;
        }

        /* Bottom Disclosure Policy Legal micro text blocks */
        .booking-disclosure-text {
            font-size: 11px;
            font-weight: 300;
            line-height: 1.6;
            color: #777777;
            text-align: center;
            margin-top: 20px;
            letter-spacing: 0.02em;
        }

        /* ========================================================
           RESPONSIVE VIEWPORT CONSTRAINTS
           ======================================================== */
        @media (max-width: 992px) {
            .booking-page-wrap {
                grid-template-columns: 1fr; /* Drop layouts seamlessly to flat single grid cards stack */
                gap: 60px;
                padding-top: 120px;
            }
            .booking-hero-image {
                height: 400px;
            }
            .studio-info-panel {
                flex-direction: row;
                justify-content: space-between;
                flex-wrap: wrap;
                background-color: rgba(255, 255, 255, 0.4);
                padding: 24px;
                gap: 20px;
            }
        }

        @media (max-width: 600px) {
            .booking-main-title {
                font-size: 38px;
            }
            .input-group-row {
                grid-template-columns: 1fr; /* Stacks split inputs like Date & Time into separate lines */
                gap: 0;
            }
            .studio-info-panel {
                flex-direction: column;
            }
        }
        /* Luxury Multi-Select Grid Setup */
                    .services-selection-block {
                        margin-bottom: 24px;
                        width: 100%;
                    }

                    .form-section-subtitle {
                        display: block;
                        font-size: 11px;
                        font-weight: 500;
                        text-transform: uppercase;
                        letter-spacing: 0.15em;
                        color: #8C7E6E;
                        margin-bottom: 16px;
                    }

                    .services-checkbox-grid {
                        display: grid;
                        grid-template-columns: 1fr;
                        gap: 12px;
                    }

                    /* Individual Checkbox Luxury Cards */
                    .service-check-card {
                        background-color: #ffffff;
                        border: 1px solid #CFCBC4;
                        padding: 16px 20px;
                        display: flex;
                        align-items: center;
                        gap: 16px;
                        cursor: pointer;
                        position: relative;
                        transition: all 0.3s ease;
                    }

                    /* Hide native ugly default browser checkbox inputs */
                    .service-check-card input[type="checkbox"] {
                        position: absolute;
                        opacity: 0;
                        cursor: pointer;
                        height: 0;
                        width: 0;
                    }

                    /* Custom Minimalist Square Checkbox Box */
                    .custom-check-box {
                        width: 16px;
                        height: 16px;
                        border: 1px solid #8C7E6E;
                        position: relative;
                        display: inline-block;
                        flex-shrink: 0;
                        transition: background-color 0.3s ease, border-color 0.3s ease;
                    }

                    /* Text Container inside the Card */
                    .service-check-info {
                        display: flex;
                        justify-content: space-between;
                        width: 100%;
                        align-items: center;
                    }

                    .service-check-name {
                        font-size: 13px;
                        font-weight: 400;
                        color: #1C1B1A;
                    }

                    .service-check-meta {
                        font-size: 11px;
                        font-weight: 300;
                        color: #777777;
                    }

                    /* --- INTERACTIVE STATES --- */

                    /* Hover State Card highlight */
                    .service-check-card:hover {
                        border-color: #1C1B1A;
                    }

                    /* Checked State - Dark Background fill on Card */
                    .service-check-card:has(input:checked) {
                        border-color: #1C1B1A;
                        background-color: rgba(28, 27, 26, 0.03); /* Extremely soft luxury tint shadow */
                    }

                    /* Checked State - Transform custom check icon fill indicator */
                    .service-check-card input:checked ~ .custom-check-box {
                        background-color: #1C1B1A;
                        border-color: #1C1B1A;
                    }

                    /* Tiny crisp internal white dot check indicator inside the box */
                    .service-check-card input:checked ~ .custom-check-box::after {
                        content: '';
                        position: absolute;
                        left: 5px;
                        top: 5px;
                        width: 4px;
                        height: 4px;
                        background-color: #ffffff;
                    }

                    /* Responsive Dual Columns for wider forms */
                    @media (min-width: 600px) {
                        .services-checkbox-grid {
                            grid-template-columns: repeat(2, 1fr);
                        }
                    }
    </style>
</head>
<body>

<main class="booking-page-wrap">
    
    <!-- LEFT COLUMN SECTION -->
    <div class="booking-left-column">
        <p class="booking-tagline">Reserve Your Experience</p>
        <h1 class="booking-main-title">Book Your<br>Appointment</h1>
        <p class="booking-subtext">
            Complete the form below and we'll confirm your appointment within 24 hours.
        </p>
        
        <!-- Luxury Brand Image Block Component -->
        <img src="asset/img/sg1index.jpg" alt="Sky Glow Luxury Nails" style="width:100%; height:520px; object-fit:cover; display:block;">
    </div>

    <!-- RIGHT COLUMN SECTION -->
    <div class="booking-right-column">
        
        <!-- Metadata Info Panel Grid Stack -->
        <div class="studio-info-panel">
            <div class="info-block">
                <h4 class="info-block-title">Location</h4>
                <p class="info-block-detail">C, El Portillo 18<br>San Miguel de Abona, TF 38620.</p>
            </div>
            <div class="info-block">
                <h4 class="info-block-title">Studio Hours</h4>
                <p class="info-block-detail">Tuesday &ndash; Saturday<br>10:00 AM &ndash; 18:00 PM</p>
            </div>
            <div class="info-block">
                <h4 class="info-block-title">Contact</h4>
                <p class="info-block-detail">BRAGDESIGNSTF@GMAIL.COM<br>+34 645301612</p>
            </div>
        </div>

        <!-- Appointment Submission Form Block Handling Structure -->
        <form action="process-booking.php" method="POST" class="booking-form-element">
            
            <!-- Category 1: Personal Data -->
            <h3 class="form-section-title">Personal Information</h3>
            
            <div class="input-wrapper">
                <svg class="input-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                <input type="text" name="full_name" class="sky-input" placeholder="Full Name" required>
            </div>

            <div class="input-wrapper">
                <svg class="input-icon" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <input type="email" name="email" class="sky-input" placeholder="Email Address" required>
            </div>

            <div class="input-wrapper">
                <svg class="input-icon" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <input type="tel" name="phone_number" class="sky-input" placeholder="Phone Number" required>
            </div>

            <!-- Category 2: Reservation Target Logistics -->
            <h3 class="form-section-title">Appointment Details</h3>
            
           <div class="services-selection-block">
    <label class="form-section-subtitle">Select Services (Select all that apply)</label>
    
        <div class="services-checkbox-grid">
            <!-- Nails -->
            <label class="service-check-card">
                <input type="checkbox" name="services[]" value="nails">
                <span class="custom-check-box"></span>
                <div class="service-check-info">
                    <span class="service-check-name">Nails</span>
                    <span class="service-check-meta">60 min</span>
                </div>
            </label>

            <!-- Wax -->
            <label class="service-check-card">
                <input type="checkbox" name="services[]" value="wax">
                <span class="custom-check-box"></span>
                <div class="service-check-info">
                    <span class="service-check-name">Wax</span>
                    <span class="service-check-meta">120 min</span>
                </div>
            </label>

            <!-- Threading -->
            <label class="service-check-card">
                <input type="checkbox" name="services[]" value="threading">
                <span class="custom-check-box"></span>
                <div class="service-check-info">
                    <span class="service-check-name">Threading</span>
                    <span class="service-check-meta">180 min</span>
                </div>
            </label>

            <!-- Eyelashes -->
            <label class="service-check-card">
                <input type="checkbox" name="services[]" value="eyelashes">
                <span class="custom-check-box"></span>
                <div class="service-check-info">
                    <span class="service-check-name">Eyelashes</span>
                    <span class="service-check-meta">75 min</span>
                </div>
            </label>

            <!-- Hair -->
            <label class="service-check-card">
                <input type="checkbox" name="services[]" value="hair">
                <span class="custom-check-box"></span>
                <div class="service-check-info">
                    <span class="service-check-name">Hair</span>
                    <span class="service-check-meta">90 min</span>
                </div>
            </label>

            <!-- Massage -->
            <label class="service-check-card">
                <input type="checkbox" name="services[]" value="massage">
                <span class="custom-check-box"></span>
                <div class="service-check-info">
                    <span class="service-check-name">Massage</span>
                    <span class="service-check-meta">Custom Duration</span>
                </div>
            </label>

            <!-- Facial -->
            <label class="service-check-card">
                <input type="checkbox" name="services[]" value="facial">
                <span class="custom-check-box"></span>
                <div class="service-check-info">
                    <span class="service-check-name">Facial</span>
                    <span class="service-check-meta">Custom Duration</span>
                </div>
            </label>

            <!-- Boutique -->
            <label class="service-check-card">
                <input type="checkbox" name="services[]" value="boutique">
                <span class="custom-check-box"></span>
                <div class="service-check-info">
                    <span class="service-check-name">Boutique</span>
                    <span class="service-check-meta">Browsing</span>
                </div>
            </label>

            <!-- Wellness -->
            <label class="service-check-card">
                <input type="checkbox" name="services[]" value="wellness">
                <span class="custom-check-box"></span>
                <div class="service-check-info">
                    <span class="service-check-name">Wellness</span>
                    <span class="service-check-meta">Consultation</span>
                </div>
            </label>
        </div>
    </div><hr><br>

            <!-- Combined Row: Target Day & Target Hours -->
            <div class="input-group-row">
                <div class="input-wrapper">
                    <svg class="input-icon" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    <input type="date" name="booking_date" class="sky-input" required>
                </div>
                <div class="input-wrapper select-container">
                    <svg class="input-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    <select name="preferred_time" class="sky-select" required>
                        <option value="" disabled selected>Preferred Time</option>
                        <option value="10:00">10:00 AM</option>
                        <option value="11:30">11:30 AM</option>
                        <option value="13:00">01:00 PM</option>
                        <option value="14:30">02:30 PM</option>
                        <option value="16:00">04:00 PM</option>
                        <option value="17:00">05:00 PM</option>
                    </select>
                </div>
            </div>

            <!-- Category 3: Secondary Client Input Details -->
            <h3 class="form-section-title">Additional Notes</h3>
            
            <div class="input-wrapper textarea-wrapper">
                <svg class="input-icon" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                <textarea name="notes" class="sky-textarea" placeholder="Tell us about your vision, inspiration, or any special requests..."></textarea>
            </div>

            <!-- Action Area Block Components -->
            <div class="submit-btn-container">
                <button type="submit" class="sky-submit-button">
                    Request Appointment <span class="btn-arrow">&rarr;</span>
                </button>
                <p class="booking-disclosure-text">
                    By submitting, you agree to our booking policy. A 50% deposit will be required to confirm.
                </p>
            </div>

        </form>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>
</html>