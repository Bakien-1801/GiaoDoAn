<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal PayMent </title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<main id="cart-main">
        <div class="site-title text-center">
            <h1 class="font-title">Giao Đồ Ăn</h1>
        </div>
        <div class="container">
            <div class="grid">
                <div class="col-1">
                    <div class="flex item justify-content-between">
                        <div class="flex">
                            <div class="img text-center">
                                <img src="./assets/humber.png" alt="">
                            </div>
                            <div class="title">
                                <h3>Humber</h3>
                                <span>Đồ ăn nhanh</span>
                                <div class="buttons">
                                    <button type="submit"><i class="fas fa-chevron-up"></i> </button>
                                    <input type="text" class="font-title" value="1">
                                    <button type="submit"><i class="fas fa-chevron-down"></i> </button>
                                </div>
                                <a href="#">Save for later</a> |
                                <a href="#">Delete From Cart</a>
                            </div>
                        </div>
                        <div class="price">
                            <h4 class="text-red">$2</h4>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="subtotal text-center">
                        <h3>Price Details</h3>
                        <ul>
                            <li class="flex justify-content-between">
                                <label for="price">Products : </label>
                                <span>$2</span>
                            </li>
                            <li class="flex justify-content-between">
                                <label for="price">Delivery Charges : </label>
                                <span>Free</span>
                            </li>
                            <hr>
                            <li class="flex justify-content-between">
                                <label for="price">Amout Payble : </label>
                                <span class="text-red font-title">$2</span>
                            </li>
                        </ul>
                        <div id="paypal-payment-button">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://www.paypal.com/sdk/js?client-id=Ad9bfL5wAUmG13IRkpPJ2OmPaPP1Oeegtqh54eVgWsHbAOVTteG2b9pXDRrmIe9_EaJJhv9RMdofli-j"></script>
    <script>paypal.Buttons().render("#paypal-payment-button");</script>
</body>
</html>