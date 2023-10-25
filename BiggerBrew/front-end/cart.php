<!DOCTYPE html>
<html>

<head>
    <title>Milk Tea Shop - Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .cart-item {
            border-bottom: 1px solid #ddd;
            padding: 20px 0;
        }
        .container{
            position: relative;
            top: 130px}

    </style>
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
<header>
        <a href="#" class="logo">
            <img src="img/logo.png" alt="">
        </a>

        <i class='bx bx-menu' id="menu-icon"></i>
        <ul class="navbar">
            <li><a href="shop.html">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#Customers">Customers</a></li>
           
        </ul>
        <div class="header-icon">
            <a href="cart.php"><i class='bx bx-cart-alt'></a></i></a>
            <i class='bx bx-search-alt-2' id="search-icon" ></i>
        </div>
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search Here...">
        </div>
    </header>
    <div class="container">
        <h2>Shopping Cart</h2>
        <div class="cart-item">
            <div class="row">
                <div class="col-md-3">
                    <img src="milk_tea_image.jpg" alt="Milk Tea" style="width: 100%;">
                </div>
                <div class="col-md-6">
                    <h4>Milk Tea Name</h4>
                    <p>Price: $5.00</p>
                    <p>Quantity: 2</p>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-danger">Remove</button>
                </div>
            </div>
        </div>

        <div class="cart-item">
            <div class="row">
                <div class="col-md-3">
                    <img src="milk_tea_image.jpg" alt="Milk Tea" style="width: 100%;">
                </div>
                <div class="col-md-6">
                    <h4>Milk Tea Name 2</h4>
                    <p>Price: $4.50</p>
                    <p>Quantity: 1</p>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-danger">Remove</button>
                </div>
            </div>
        </div>

        <div class="text-right" style="margin-top: 20px;">
            <h4>Total: $14.50</h4>
            <button class="btn btn-primary">Checkout</button>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>