<footer class="global-footer">
    <div class="footer-container">
        
        <!-- Column 1: Brand Info with Integrated Logo Image -->
                <div class="footer-column brand-column">
                    <div class="footer-logo-header">
                        <img src="asset/img/sg.png" alt="Sky Glow Logo" class="footer-logo-img">
                        <h2 class="footer-brand-title">Sky Glow</h2>
                    </div>
                    <p class="footer-brand-tagline">Luxury cosmetics artistry & meticulous nail design.</p>
                </div>

        <div class="footer-column">
            <h3 class="footer-column-heading">Explore</h3>
            <ul class="footer-links-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="booking.php">Book Now</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3 class="footer-column-heading">Information</h3>
            <ul class="footer-links-list">
                <li><a href="terms.php">Terms of Service</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3 class="footer-column-heading">Connect</h3>
            <ul class="footer-links-list contact-list">
                <li>
                    <a href="https://instagram.com/skyglow" target="_blank" class="instagram-link">
                        <svg class="instagram-icon" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                        @skyglow.nails
                    </a>
                </li>
                <li class="location-text">Doha, Qatar</li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom-bar">
        <div class="footer-bottom-container">
            <p class="copyright-text">&copy; 2026 Sky Glow. All rights reserved.</p>
            <p class="credits-text">Designed with EainRmSolutions</p>
        </div>
    </div>
</footer>

<style>
    /* Premium Minimalist Footer Core Styling */
    .global-footer {
        background-color: #1C1B1A; /* Luxe deep obsidian black */
        color: #EFECE6; /* Soft cream text contrast */
        font-family: 'Montserrat', sans-serif;
        padding: 30px 0 0 0;
        margin-top: auto; /* Ensures footer sticks to bottom if page content is short */
        width: 100%;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 40px 60px 40px;
        display: grid;
        grid-template-columns: 2fr repeat(3, 1fr);
        gap: 60px;
    }

    /* Column Typography Formatting */
    .footer-column brand-column {
        padding-right: 40px;
    }

    .footer-brand-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 32px;
        font-weight: 400;
        letter-spacing: 0.04em;
        margin: 0 0 16px 0;
        color: #ffffff;
    }

    .footer-brand-tagline {
        font-size: 13px;
        font-weight: 300;
        line-height: 1.6;
        color: #A6A19A;
        max-width: 260px;
    }

    .footer-column-heading {
        font-size: 11px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: #8C7E6E; /* Muted gold accent tone */
        margin: 0 0 24px 0;
    }

    /* Navigation Lists Reset */
    .footer-links-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links-list li {
        margin-bottom: 14px;
    }

    .footer-links-list a {
        color: #CFCBC4;
        text-decoration: none;
        font-size: 13px;
        font-weight: 300;
        transition: color 0.3s ease;
    }

    .footer-links-list a:hover {
        color: #ffffff;
    }

    /* Special Interactive Social Layout elements */
    .contact-list li {
        font-size: 13px;
        font-weight: 300;
        color: #CFCBC4;
    }

    .instagram-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .instagram-icon {
        width: 14px;
        height: 14px;
        fill: none;
        stroke: currentColor;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .location-text {
        margin-top: 16px;
        text-transform: uppercase;
        font-size: 11px !important;
        letter-spacing: 0.1em;
        color: #8C7E6E !important;
    }

    /* Bottom Border Segment Bar details */
    .footer-bottom-bar {
        border-top: 1px solid #2E2D2B;
        padding: 10px 0;
    }

    .footer-bottom-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .copyright-text, .credits-text {
        font-size: 11px;
        font-weight: 300;
        color: #73706B;
        margin: 0;
        letter-spacing: 0.05em;
    }

    /* Responsive Collapse Adjustments */
    @media (max-width: 992px) {
        .footer-container {
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }
        .brand-column {
            grid-column: span 2;
            padding-right: 0;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 576px) {
        .footer-container {
            grid-template-columns: 1fr;
            gap: 35px;
        }
        .brand-column {
            grid-column: span 1;
        }
        .footer-bottom-container {
            flex-direction: column;
            gap: 12px;
            text-align: center;
        }
    }
    /* Inline Flexbox Layout to align Image and Typography */
.footer-logo-header {
    display: flex;
    align-items: center;
    gap: 16px; /* Elegant spacing between the logo graphic and the text */
    margin-bottom: 16px;
}

/* Luxury Logo Image Scale Configurations */
.footer-logo-img {
    width: 45px;          /* Sets a refined, luxury-scale width */
    height: 45px;         /* Keeps a clean 1:1 square ratio mapping */
    object-fit: cover;    /* Ensures perfect framing within bounds */
    border-radius: 4px;   /* Softens the square edges slightly */
    border: 1px solid rgba(140, 126, 110, 0.3); /* Subtle gold-dust border tint */
}

/* Adjusted alignment override for the footer brand title text */
.footer-brand-title {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 32px;
    font-weight: 400;
    letter-spacing: 0.04em;
    margin: 0;            /* Reset margins since parent flexbox container manages layout spacing */
    color: #ffffff;
}
</style>