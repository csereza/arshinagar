<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arshinagar</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Faveicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Custom css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="products.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <div class="menubar">
        <!-- Why use Container -->
        <div class="container">
            <div class="menubar-top-item">
                <div class="logo">
                    <a href=""><img src="img/Logo.png" alt=""></a>
                </div>
                <div class="search-bar">
                    <form action="">
                        <select id="selects" name="" id="">
                            <option value="">All</option>
                            <option value="">Book</option>
                            <option value="">Fashion</option>
                            <option value="">New</option>
                            <option value="">Super Store</option>
                        </select>
                        <input type="text" id="inputField">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="menubar-right">
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                    <a class="singin" href="{{ url('login') }}">Sign in</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Body Area -->
    <div class="container text-center">
        <div class="row">
            <!-- Banner Section -->
            <div class="col-md-12">
                <div class="banner">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/Banner-1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Banner-2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/babber-3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/banner-4.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product Section -->
            <div class="col-md-12">
                <div class="product-section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-section-title">
                                <h1>বেস্ট সেলার বই</h1>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="all-product">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book1.webp" alt="">
                                            <p class="book-name">ইসলামিক বই</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book2.webp" alt="">
                                            <p class="book-name">উপন্যাস</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book3.webp" alt="">
                                            <p class="book-name">ভর্তি, নিয়োগ এবং প্রস্তুতি</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book4.webp" alt="">
                                            <p class="book-name">শিশু কিশোর বই</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book5.webp" alt="">
                                            <p class="book-name">আত্ত্ব উন্নয়ন ও মোটিভেশন</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book6.webp" alt="">
                                            <p class="book-name">আত্ত্ব উন্নয়ন ও মোটিভেশন</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Section -->
            <div class="col-md-12">
                <div class="product-section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-section-title">
                                <h1>বেস্ট সেলার বই</h1>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="all-product">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book1.webp" alt="">
                                            <p class="book-name">ইসলামিক বই</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book2.webp" alt="">
                                            <p class="book-name">উপন্যাস</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book3.webp" alt="">
                                            <p class="book-name">ভর্তি, নিয়োগ এবং প্রস্তুতি</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book4.webp" alt="">
                                            <p class="book-name">শিশু কিশোর বই</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book5.webp" alt="">
                                            <p class="book-name">আত্ত্ব উন্নয়ন ও মোটিভেশন</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book6.webp" alt="">
                                            <p class="book-name">আত্ত্ব উন্নয়ন ও মোটিভেশন</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Section -->
            <div class="col-md-12">
                <div class="product-section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-section-title">
                                <h1>বেস্ট সেলার বই</h1>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="all-product">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book1.webp" alt="">
                                            <p class="book-name">ইসলামিক বই</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book2.webp" alt="">
                                            <p class="book-name">উপন্যাস</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book3.webp" alt="">
                                            <p class="book-name">ভর্তি, নিয়োগ এবং প্রস্তুতি</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book4.webp" alt="">
                                            <p class="book-name">শিশু কিশোর বই</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book5.webp" alt="">
                                            <p class="book-name">আত্ত্ব উন্নয়ন ও মোটিভেশন</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="product-item">
                                            <img src="img/book6.webp" alt="">
                                            <p class="book-name">আত্ত্ব উন্নয়ন ও মোটিভেশন</p>
                                            <p class="text-info">Up to 70% OFF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Delivery and coutomer service -->
            <div class="col-md-12">
                <div class="deliver-and-customer-service">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="cod">
                                <div class="cod-icon">
                                    <img src="img/social/cash-on-delivery.png" alt="">
                                </div>
                                <div class="cod-text">
                                    <h2>CASH ON DELIVERY</h2>
                                    <p>Pay cash at your doorstep</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="delivery">
                                <div class="delivery-icon">
                                    <img src="img/social/fast-delivery.png" alt="">
                                </div>
                                <div class="cod-text">
                                    <h2>DELIVERY</h2>
                                    <p>All over Bangladesh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="delivery">
                                <div class="delivery-icon">
                                    <img src="img/social/return-of-investment.png" alt="">
                                </div>
                                <div class="cod-text">
                                    <h2>HAPPY RETURN</h2>
                                    <p>7 days return facility</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Area -->
            <div class="col-md-12">
                <div class="footer-area">
                    <div class="row">
                        <!-- footer logo -->
                        <div class="col-md-3">
                            <div class="footer-logo">
                                <a href=""><img src="img/Footer Logo.png" alt=""></a>
                            </div>
                            <div class="footer-social">
                                <p>Stay Connected</p>
                                <div class="social-icon">
                                    <a href="#"><i id="instagram" class="fab fa-whatsapp"></i></a>
                                    <a href="#"><i id="facebook" class="fab fa-facebook"></i></a>
                                    <a href="#"><i id="youtube" class="fab fa-youtube"></i></a>
                                    <a href="#"><i id="linkedin" class="fab fa-linkedin"></i></a>
                                    <a href="#"><i id="twitter" class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="footer-head-office"><h1>প্রধান কার্যালয়</h1>
                                <p><i class="fa-solid fa-square-phone"></i> <strong>+8801711-993829</strong></p>
                                <p><i class="fa-solid fa-envelope"></i> arshinagargroup@yahoo.com</p>
                            </div>
                            <div class="footer-address">
                                <i class="fa-solid fa-location-dot"></i><em>হিসনা রোড,আরশীনগর এলাকা,ফারাক পুর,<br>
                                    তারাগুনিয়া,দৌলতপুর,কুষ্টিয়া।</em>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-corporate-office">
                                <h1>কর্পোরেট অফিস</h1>
                                <p><i class="fa-solid fa-square-phone"></i> +8801811-533480</p>
                                <p><i class="fa-solid fa-envelope"></i> arshinagargroup@gmail.com</p>
                            </div>
                            <div class="footer-address">
                                <i class="fa-solid fa-location-dot"></i><em>৫/৮ কাজী নজরুল ইসলাম রোড,কোর্টপাড়া,কুষ্টিয়া।</em>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Footer -->
            <div class="col-md-12">
                <div class="bottom-footer">
                    <p>
                        Copyright 
                        <script>
                            var date = new Date();
                                year = date.getFullYear()

                            document.write(year);
                        </script>
                        @ <a href=""><em><strong>Arshinagar Group</strong></em></a> All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
    <script src="style.js"></script>
</body>

</html>