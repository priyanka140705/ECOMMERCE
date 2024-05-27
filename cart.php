<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIDE MAX</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="logo.png" alt="PRIDE MAX" width="400">
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                       <h1>FEEL HAPPY</h1>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <header class="py-3">
        <div class="container">
            <h1>Your Shopping Cart</h1>
        </div>
    </header>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <!-- Cart Items List -->
                <div class="cart-item">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="dress1.jpeg" class="img-fluid" alt="Product">
                        </div>
                        <div class="col-md-5">
                            <h4>Kurti sets</h4>
                            <p>$299.00</p>
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control" value="1">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger">Remove</button>
                        </div>
                    </div>
                </div>
                <!-- Add more cart items here -->
            </div>

            <div class="col-md-4">
                <!-- Cart Summary -->
                <div class="border p-3 mb-3">
                    <h3 class="mb-3">Cart Summary</h3>
                    <div class="d-flex justify-content-between">
                        <span>Subtotal</span>
                        <span>$299.00</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Tax</span>
                        <span>$23.92</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Total</span>
                        <span>$322.92</span>
                    </div>
                    <button class="btn btn-warning w-100 mt-3">Proceed to Checkout</button>
                </div>
            </div>
        </div>
    </section>
    <!--- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="dress4.jpeg" class="mb-2" width="100">
                    <p>Explore the Fashion<br> With PRIDE MAX!</p>
                </div>
                </div>
                </div>
                <div class="col-md-3">
                    <h3>Follow Us</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-light">Facebook</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Twitter</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Instagram</a></li>
                        <li><a href="#" class="text-decoration-none text-light">YouTube</a></li>
                    </ul>
                </div>
            </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-PPmltI4DzdaNfQz9JdGpI3TZfvlw7irzjBn3wKgNmCUp0auj/uTPmSy7Ou1EP9J4" crossorigin="anonymous"></script>
</body>
</html>