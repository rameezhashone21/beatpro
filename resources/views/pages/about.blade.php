<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/theme.css') }}">
    <title>About US</title>
</head>

<body>
<header class="fixed-top header-bg py-md-3 py-2"> <div class="container"> <div class="row d-lg-none"> <div class="col-6"> <a class="navbar-brand" href="./"><img src="../frontend_assets/img/logo.png" width="200px" height="70px" alt="" class="img-fluid"></a> </div><div class="col-6 text-end align-self-center"> <button data-trigger="navbar_main" class="d-lg-none btn" type="button"> <img src="assets/img/bar_img.png" alt=""> </button> </div></div></div><nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg header"> <div class="container-fluid justify-content-start navigation-padding"> <div class="offcanvas-header"> <button class="btn-close float-end">x</button> </div><a class="navbar-brand d-none d-lg-inline" href="./"><img src="../frontend_assets/img/logo.png" width="200px" height="70px" alt="" class=""></a> <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0"> <li class="nav-item"> <a class="nav-link" aria-current="page" href="./">Home</a> </li><li class="nav-item"> <a class="nav-link" href="./about">About</a> </li><li class="nav-item"> <a class="nav-link" href="./membership">Membership</a> </li><li class="nav-item"> <a class="nav-link" href="./services">Our Services</a> </li><li class="nav-item"> <a class="nav-link" href="./faqs">FAQs</a > </li > <li class="nav-item"> <a class="nav-link" href="javascript:;">Contest</a> </li><li class="nav-item"> <a class="nav-link" href="./contact">Contact</a></li></ul> <a href="./cart"><i class="fa badge" style="font-size:24px" value="{{ count((array) session('cart')) }}">&#xf07a;</i></a><form class="d-lg-flex justify-content-between"> <a class="btn-1 mx-2 text-white" href="./register"> Register </a> <a class="btn-2" href="./login">Log in</a> </form> </div></nav> </header>
    <main>
        <section class="banner_inner d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="banner_inner_title">About Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="services services_section_inner_one">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 z-index-1 mb-4 mb-md-0">
                        <div class="position-relative text-center">
                            <img src="{{ asset('frontend_assets/img/img_inner_1.png') }}" alt="" class="img-fluid ">
                            <img src="{{ asset('frontend_assets/img/img_inner_1_fixed.png') }}" alt="" class="img-fluid position-absolute img_fixed_one">
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <h3 class="fs-1 position-relative new_title">Create. Play. Repeat. </h3>
                        <p class="mt-4 text-secondary fw-bold">
                            A collective group of producers with a passion for music came together to create a platform for people to showcase their music. later, that platform has become one of the most sought-after companies specializing in producing original beats, among other digital goods. 
                        </p>
                        <p class="text-secondary mt-3">
                            Our highly-skilled sound engineers use state-of-the-art technology to make music that’s catchy, energetic, and upbeat. So, if you’re looking to make a name for yourself in the music industry, GotDemBeatz is the perfect place to get started. 
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="services services_section_inner_one membership">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center mb-4 mb-md-0">
                        <h3 class="fs-1 position-relative new_title text-white">Just Play</h3>
                        <p class="mt-4 text-secondary fw-bold text-white">
                            Life’s a messy business. Between personal obligations and professional responsibilities, things can become chaotic. But music has the power of producing a certain effect on your soul – an unexplainable feeling that can take you out of this world and into another dimension.
                        </p>
                        <p class="text-secondary mt-3 text-white">
                            At GotDemBeatz, that’s exactly the kind of experience we hope to offer to unsigned artists, allowing them to create music that changes the lives of the listeners. 
                        </p>
                    </div>
                    <div class="col-md-6 z-index-1">
                        <img src="{{ asset('frontend_assets/img/music-container.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section class="services py-md-5 py-3 contact position-relative">
            <div class="container">
                <div class="row row-col-1">
                    <div class="col-12  text-center py-md-5 py-3">
                        <span class="Contact_Us">Contact Us</span>
                        <h3 class="fs-1 position-relative">Let’s Get Started</h3>
                        <p class="mx-auto width-50 pt-5 text-secondary">Do you have any questions related to our services? Feel free to send us a message, and we’ll try to get back ASAP. </p>

                        <form action="#" class="row row-cols-md-2 row-cols-1 mx-auto width-50 ">
                            <div class="col py-2">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col py-2">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                            <div class="col py-2">
                                <input type="email" class="form-control" placeholder="Email address">
                            </div>
                            <div class="col py-2">
                                <input type="tel" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="col-12 py-2">
                                <textarea type="text" class="form-control" rows="6" placeholder="Message*"></textarea>
                                <button class="btn-1 text-white mt-4" type="submit">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('frontend_assets/js/footer.js') }}"></script>
</body>
<script src="{{ asset('frontend_assets/js/plugins.js') }} " defer></script>
<script src="{{ asset('frontend_assets/js/theme.js') }} " defer></script>

</html>