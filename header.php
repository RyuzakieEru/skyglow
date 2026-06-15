<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKY GLOW - All About You</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }

            .global-navbar {
            background-color: rgba(239, 236, 230, 0);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 60px;
            width: 100%;
            box-shadow: none;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);

            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .navbar-brand {
            text-decoration: none;
            display: flex;
            flex-direction: column;
        }

        .brand-main {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 24px;
            letter-spacing: 2px;
            font-weight: 600;
            line-height: 1.2;
            
            background: linear-gradient(135deg, #dfba84 0%, #b88e4c 40%, #e8cb99 70%, #966d31 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            
            filter: drop-shadow(0px 1px 1px rgba(255, 255, 255, 0.4)) drop-shadow(0px 1px 2px rgba(150, 109, 49, 0.3));
        }

        .brand-sub {
            font-family: 'Playfair Display', Georgia, serif;
            font-style: italic;
            font-size: 14px;
            color: #8C7E6E;
            margin-top: 4px;
            letter-spacing: 1px;
        }

        .navbar-menu {
            display: flex;
            list-style: none;
            gap: 40px;
            align-items: center;
        }

        .navbar-item a {
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            font-size: 13px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            color: #8C7E6E;
            transition: color 0.3s ease;
        }

        .navbar-item a:hover {
            color: #1C1B1A;
        }

       
        @media (max-width: 768px) {
            .global-navbar {
                flex-direction: column;
                align-items: flex-start;
                padding: 20px;
                gap: 20px;
            }
            .navbar-menu {
                gap: 20px;
            }
        }
    </style>
</head>
<body>

<header class="global-navbar">
    <a href="index.php" class="navbar-brand">
        <span class="brand-main">SKY GLOW</span>
    </a>

    <nav>
        <ul class="navbar-menu">
            <li class="navbar-item"><a href="index.php">Home</a></li>
            <li class="navbar-item"><a href="services.php">Services</a></li>
            <li class="navbar-item"><a href="book.php">Book</a></li>
            <li class="navbar-item"><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
</header>

</body>
</html> 