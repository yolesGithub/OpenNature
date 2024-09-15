<!DOCTYPE html>
<html>
<head>
    <title>NFT Enjoyer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .header {
            background: linear-gradient(to right, #0cbaba, #4de66e);
            padding: 14px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo-and-menu {
            display: flex;
            align-items: center;
            margin-left: 12px;
            margin-right: 15px;
        }
        .menu {
            margin-left: 20px;
            margin-right: -5px;
        }
        .menu a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-size: 18px;
        }
        .user-logo {
            width: 35px;
            height: 35px;
            background-color: white;
            border-radius: 50%;
        }
        .container {
            width: 90%;
            margin: 25px auto;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Set 4 columns */
            gap: 40px;
        }
        .product-card {
            background-color: white;
            padding: 20px;
            padding-bottom: 12px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product-card img {
            width: 100%; /* Make the image take the full width of its container */
            height: 400px; /* Set a specific height for the image */
            object-fit: cover; /* This ensures the image scales to cover the space without stretching */
            margin-bottom: 10px;
            border-radius: 8px; /* Optional: This matches the rounded corners of the product card */
        }
        .product-card .price-and-btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .product-card .name {
            flex-grow: 1; /* This will make the plant name take up the leftmost space */
            text-align: left;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .product-card .price {
            margin-right: 10px; /* Space between price and button */
            font-size: 18px;
            color: #333;
        }
        .product-card .buy-btn {
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 5px;
        }
        .product-card .buy-btn:hover {
            background-color: #45a049;
        }
        #coin-icon {
            width: 24px;
            height: 24px;
            margin-left: -5px;
            margin-top: 5px;
            margin-right: 10px;
        }
        #brand-icon {
            width: 40px;
            height: 40px;
            margin-top: -5px;
        }
        #user-icon {
            width: 28px;
            height: 28px;
            margin-top: -4px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo-and-menu">
            <img id=brand-icon src="{{ asset('/icon/logo.jpg') }}" alt="Logo">
            <div class="menu">
                <a href="./product">Products</a>
                <a href="./transaction">Transactions</a>
            </div>
        </div>
        <div class="logo-and-menu">
            <div class="menu">
                <a href="./user">User</a>
            </div>
            <img id=user-icon src="{{ asset('/icon/user.jpg') }}" alt="Logo">
        </div>
    </div>

    <div class="container">
        <div class="grid">
            <!-- Example Product Cards -->
            @foreach ($plant as $pl)
                <div class="product-card">
                    <img src="{{ asset('img/' . $pl->{'plant-image'}) }}" alt="Plant 1">
                    <div class="price-and-btn">
                        <div class="name">{{ $pl->{'plant-name'} }}</div> <!-- Leftmost plant name -->
                        <div class="price">{{ $pl->{'plant-price'} }}</div> <!-- Price next to button -->
                        <img id=coin-icon src="{{ asset('/icon/coin.jpg') }}" alt="coin">
                        <button class="buy-btn">
                            Beli
                            
                        </button> <!-- Rightmost buy button -->

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
