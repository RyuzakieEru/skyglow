<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts needed for Hero Section -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Playfair+Display:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <style>
        .hero-container {
            position: relative;
            width: 100%;
            height: calc(100vh - 70px); /* Adjust based on your header height */
            min-height: 750px;
            
            background-image: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)), 
                                url('asset/img/sgindex.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #ffffff;
            padding: 20px;
        }

        .hero-content {
            max-width: 700px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 24px;
        }

        .hero-tagline {
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 0.3em;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 5px;
        }

        .hero-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 84px;
            font-weight: 400;
            line-height: 1.1;
            letter-spacing: -1px;
            color: #ffffff;
        }

        .hero-description {
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: 300;
            line-height: 1.6;
            letter-spacing: 0.02em;
            color: rgba(255, 255, 255, 0.85);
            max-width: 520px;
            margin: 0 auto;
        }

        .hero-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            padding: 16px 36px;
            margin-top: 10px;
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            transition: all 0.3s ease;
        }

        .hero-btn:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.6);
            transform: translateY(-1px);
        }

        .hero-btn .arrow {
            font-size: 16px;
            transition: transform 0.3s ease;
            line-height: 1;
        }

        .hero-btn:hover .arrow {
            transform: translateX(4px);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 52px;
            }
            .hero-description {
                font-size: 14px;
                padding: 0 15px;
            }
            .hero-tagline {
                font-size: 10px;
                letter-spacing: 0.2em;
            }
        }
    </style>
</head>
<body>

<main class="hero-container">
    <div class="hero-content">
        <!-- Top Subtitle -->
        <p class="hero-tagline">LUXURY COSMETICS ARTISTRY &middot; DOHA QATAR</p>
        
        <!-- Center Main Title -->
        <h1 class="hero-title">SKY GLOW</h1>
        
        <!-- Bottom Description -->
        <p class="hero-description">
            "All About You" &mdash; Where precision meets artistry. Each design is a signature, each nail a canvas.
        </p>
        
        <!-- Action Call to Button -->
        <a href="book.php" class="hero-btn">
            Book a Session <span class="arrow">&rarr;</span>
        </a>
        <a href="services.php" class="hero-btn">
            View Services <span class="arrow">&rarr;</span>
        </a>
    </div>
</main>

</body>
</html> 

<?php include 'footer.php'; ?>