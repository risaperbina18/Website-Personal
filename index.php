<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Calculator</title>
    <!-- Link Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Link Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #a5d8ff, #e1f5fe);
            color: #333;
            margin: 0;
            padding: 0;
        }

        nav {
            background: rgba(0, 150, 136, 0.9);
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 10;
        }

        nav h1 {
            color: #ffffff;
            font-size: 1.8em;
            font-weight: bold;
            margin: 0;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        nav ul li a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        header {
            margin-top: 70px;
            text-align: center;
            padding: 50px 20px;
        }

        header h1 {
            font-size: 2.5em;
            color: #ffffff;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
        }

        header p {
            font-size: 1.2em;
            color: #ffffff;
            margin-top: 10px;
        }

        .menu-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
        }

        .menu-item {
            background: rgba(0, 188, 212, 0.8);
            color: white;
            padding: 20px 30px;
            font-size: 1.2em;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            width: 200px;
            transition: transform 0.3s ease, background 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .menu-item:hover {
            transform: scale(1.1);
            background: #00acc1;
        }

        .menu-item i {
            font-size: 2em;
            margin-bottom: 10px;
            display: block;
        }

        footer {
            background: #009688;
            padding: 15px;
            text-align: center;
            color: #ffffff;
            font-size: 0.9em;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <!-- Navigasi -->
    <nav>
        <h1>Shopping App</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#login">Login</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#cart">Cart</a></li>
            <li><a href="#about">About Us</a></li>
        </ul>
    </nav>

    <!-- Header -->
    <header>
        <h1>Welcome to Our calculator Shopping Platform</h1>
        <p>Your one-stop destination for all your shopping needs!</p>
    </header>

    <!-- Menu Section -->
    <div class="menu-container">
        <div class="menu-item" onclick="window.location.href='products.html'">
            <i class="fas fa-tags"></i>
            Browse Products
        </div>
        <div class="menu-item" onclick="window.location.href='calculator.html'">
            <i class="fas fa-calculator"></i>
            Shopping Calculator
        </div>
        <div class="menu-item" onclick="window.location.href='cart.html'">
            <i class="fas fa-shopping-cart"></i>
            View Cart
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 Shopping App. All rights reserved.
    </footer>
</body>
</html>