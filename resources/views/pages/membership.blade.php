<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/theme.css') }}">
    <title>Membership</title>
</head>

<body>
    <header class="fixed-top header-bg py-md-3 py-2"> <div class="container"> <div class="row d-lg-none"> <div class="col-6"> <a class="navbar-brand" href="./"><img src="../frontend_assets/img/logo.png" width="200px" height="70px" alt="" class="img-fluid"></a> </div><div class="col-6 text-end align-self-center"> <button data-trigger="navbar_main" class="d-lg-none btn" type="button"> <img src="assets/img/bar_img.png" alt=""> </button> </div></div></div><nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg header"> <div class="container-fluid justify-content-start navigation-padding"> <div class="offcanvas-header"> <button class="btn-close float-end">x</button> </div><a class="navbar-brand d-none d-lg-inline" href="./"><img src="../frontend_assets/img/logo.png" width="200px" height="70px" alt="" class=""></a> <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0"> <li class="nav-item"> <a class="nav-link" aria-current="page" href="./">Home</a> </li><li class="nav-item"> <a class="nav-link" href="./about">About</a> </li><li class="nav-item"> <a class="nav-link" href="./membership">Membership</a> </li><li class="nav-item"> <a class="nav-link" href="./services">Our Services</a> </li><li class="nav-item"> <a class="nav-link" href="./faqs">FAQs</a > </li > <li class="nav-item"> <a class="nav-link" href="javascript:;">Contest</a> </li><li class="nav-item"> <a class="nav-link" href="./contact">Contact</a></li></ul> <a href="../cart"><i class="fa badge" style="font-size:24px" value={{ count((array) session('cart')) }}>&#xf07a;</i></a><form class="d-lg-flex justify-content-between"> <a class="btn-1 mx-2 text-white" href="./register"> Register </a> <a class="btn-2" href="./login">Log in</a> </form> </div></nav> </header>
    <main>
        <section class="banner_inner d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="banner_inner_title">Membership</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="membership_inner_section my-5 py-md-5">
            <div class="container">
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
                    <!-- <div class="col">
                        <div class="membership_box">
                            <h2 class="color_dard_grey title_box">Monthly Beats <span>/ (Premium) </span></h2>
                            <h3 class="color-orange title_box_2">$36.00 <span>/ (Monthly) </span></h3>
                            <ul>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                            </ul>
                            <h4 class="color_dard_grey title_box">Detail</h4>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            </p>
                            <div class="mb-3">
                                <a href="" class="box_button">Join Us</a>
                            </div>
                        </div>
                    </div> -->
                    <div class="col">
                        <div class="membership_box bg_orange">
                            <h2 class="color_dard_grey title_box">Elite VIP <span>/ (Premium) </span></h2>
                            <h3 class="color-orange title_box_2">$77.00 <span>/ (Monthly) </span></h3>
                            <ul>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                            </ul>
                            <h4 class="color_dard_grey title_box">Detail</h4>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            </p>
                            <div class="mb-3">
                                <a href="" class="box_button">Join Us</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="membership_box">
                            <h2 class="color_dard_grey title_box">Monthly Beats <span>/ (Premium) </span></h2>
                            <h3 class="color-orange title_box_2">$36.00 <span>/ (Monthly) </span></h3>
                            <ul>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                            </ul>
                            <h4 class="color_dard_grey title_box">Detail</h4>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            </p>
                            <div class="mb-3">
                                <a href="" class="box_button">Join Us</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('frontend_assets/js/footer.js') }}"></script>
</body>
<script src="{{ asset('frontend_assets/js/plugins.js') }} " defer></script>
<script src="{{ asset('frontend_assets/js/theme.js') }} " defer></script>

</html>