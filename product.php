<?php
    include "service.php";
    $products = get_where("product", 'status', 1 );
    // Declare for this page
    // var_dump($products);
    // die;
    $_SESSION["title"] = "Beranda";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aesthetic Template">
    <meta name="keywords" content="Aesthetic, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aesthetic | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn">
            <a href="#" class="primary-btn">Appointment</a>
        </div>
        <ul class="offcanvas__widget">
            <li><i class="fa fa-phone"></i> 1-677-124-44227</li>
            <li><i class="fa fa-map-marker"></i> Los Angeles Gournadi, 1230 Bariasl</li>
            <li><i class="fa fa-clock-o"></i> Mon to Sat 9:00am to 18:00pm</li>
        </ul>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="header__top__left">
                            <li><i class="fa fa-phone"></i> 1-677-124-44227</li>
                            <li><i class="fa fa-map-marker"></i> Los Angeles Gournadi, 1230 Bariasl</li>
                            <li><i class="fa fa-clock-o"></i> Mon to Sat 9:00am to 18:00pm</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="header__top__right">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__menu__option">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="./index.html">Home</a></li>
                                <li><a href="./about.html">About</a></li>
                                <li><a href="./services.html">Services</a></li>
                                <li class="active"><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./pricing.html">Pricing</a></li>
                                        <li><a href="./doctor.html">Doctor</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">News</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__btn">
                            <a href="#" class="primary-btn">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Our Prices</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Pricing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <div class="pricing__item__title">
                            <p>BREASTS</p>
                            <h3>Dr. Laura Leon <span>Plastic surgeon</span></h3>
                        </div>
                        <ul>
                            <li>
                                <h6>Belt Lipectomy (Body Lift)</h6>
                                <span>$14,630</span>
                            </li>
                            <li>
                                <h6>Brachioplasty (Arm Lift)</h6>
                                <span>$7,750</span>
                            </li>
                            <li>
                                <h6>Liposuction (Whole Body)</h6>
                                <span>$3,550 – 8,500</span>
                            </li>
                            <li>
                                <h6>Thigh / Buttock Lift</h6>
                                <span>$10,100</span>
                            </li>
                        </ul>
                        <a href="#" class="primary-btn">Book now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <div class="pricing__item__title">
                            <p>Body contouring</p>
                            <h3>Dr. John Doe <span>Plastic surgeon</span></h3>
                        </div>
                        <ul>
                            <li>
                                <h6>Belt Lipectomy (Body Lift)</h6>
                                <span>$14,630</span>
                            </li>
                            <li>
                                <h6>Brachioplasty (Arm Lift)</h6>
                                <span>$7,750</span>
                            </li>
                            <li>
                                <h6>Liposuction (Whole Body)</h6>
                                <span>$3,550 – 8,500</span>
                            </li>
                            <li>
                                <h6>Thigh / Buttock Lift</h6>
                                <span>$10,100</span>
                            </li>
                        </ul>
                        <a href="#" class="primary-btn">Book now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <div class="pricing__item__title">
                            <p>FACIAL PROCEDURES</p>
                            <h3>Dr. Manuel Benet <span>Plastic surgeon</span></h3>
                        </div>
                        <ul>
                            <li>
                                <h6>Belt Lipectomy (Body Lift)</h6>
                                <span>$14,630</span>
                            </li>
                            <li>
                                <h6>Brachioplasty (Arm Lift)</h6>
                                <span>$7,750</span>
                            </li>
                            <li>
                                <h6>Liposuction (Whole Body)</h6>
                                <span>$3,550 – 8,500</span>
                            </li>
                            <li>
                                <h6>Thigh / Buttock Lift</h6>
                                <span>$10,100</span>
                            </li>
                        </ul>
                        <a href="#" class="primary-btn">Book now</a>
                    </div>
                </div>
                <?php foreach($products as $product) :?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="pricing__item">
                            <div class="pricing__item__title">
                                <p><?= $product["title"] ?></p>
                                <h3>Dr. Manuel Benet <span><?= $product["description"] ?></span></h3>
                            </div>
                            <ul>
                                <li>
                                    <h6><?= $product["treatments"] ?></h6>
                                    <span><?= $product["price"] ?></span>
                                </li>
                                
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#" onclick="setUser(<?= $product['id'] ?>)" class="primary-btn">Book now</a>
                        </div>
                    </div>
                <?php endforeach?>
                
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="footer__newslatter">
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit" class="site-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Departments</a></li>
                            <li><a href="#">Find a Doctor</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Quick links</h5>
                        <ul>
                            <li><a href="#">Facial Fillers</a></li>
                            <li><a href="#">Breast Surgery</a></li>
                            <li><a href="#">Body Lifts</a></li>
                            <li><a href="#">Face & Neck</a></li>
                            <li><a href="#">Fat Reduction</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__address">
                        <h5>Contact Us</h5>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Los Angeles Gournadi, 1230 Bariasl</li>
                            <li><i class="fa fa-phone"></i> 1-677-124-44227</li>
                            <li><i class="fa fa-envelope"></i> Support@gmail.com</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-lg-5">
                        <ul>
                            <li>All Rights Reserved</li>
                            <li>Terms & Use</li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Home</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
               <div class="card">
               <div class="card-body">
                    <div class="services__appoinment">
                                <div class="services__title">
                                    <h4><img src="img/icons/services-icon.png" alt=""> Get an appointment</h4>
                                </div>
                                <form action="service.php" method="post">
                                    <!-- isi value sesion id  -->
                                    <input type="hidden" id="member_id" name="member_id" value="<?= '1'?>">
                                    <input type="hidden" id="status_payment" name="status_payment" value="pending">
                                    <input type="hidden" id="done_status" name="done_status" value="pending">
                                    <input type="hidden" id="payment" name="payment" value="pending">
                                    <input type="hidden" id="product_id" name="product_id" value="">
                                    <div class="datepicker__item">
                                        <input name="date"  onchange="fetch_select(this.value);" type="text" placeholder="Date" class="datepicker">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input id="time" type="hidden" name="time_id" value="">
                                    <div class="nice-select open" tabindex="0">
                                        <span class="current">chose</span>
                                        <ul  onchange="setTime()" class="list">
                                        </ul>
                                    </div>
                                    <button onclick="setTime()" name="add_reservation" type="submit" class="site-btn">Book appoitment</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        function fetch_select(val)
        {
            $.ajax({
                type: 'post',
                url: 'service.php',
                data: {
                get_option:val
                },
                cache: false,
                success: function (response) {
                    $(".list").html(response)                      
                },
            });
        }
    </script>
    <script>
        function setTime()
        {
            var val = $('.selected').attr('data-value'); 
            $("#time").val(val)          
        }
        function setUser(data)
        {
            $("#product_id").val(data)
        }
    </script>
</body>

</html>