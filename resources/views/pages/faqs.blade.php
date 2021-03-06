<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/theme.css') }}">
    <title>Faqs</title>
</head>

<body>
<header class="fixed-top header-bg py-md-3 py-2"> <div class="container"> <div class="row d-lg-none"> <div class="col-6"> <a class="navbar-brand" href="./"><img src="../frontend_assets/img/logo.png" width="200px" height="70px" alt="" class="img-fluid"></a> </div><div class="col-6 text-end align-self-center"> <button data-trigger="navbar_main" class="d-lg-none btn" type="button"> <img src="assets/img/bar_img.png" alt=""> </button> </div></div></div><nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg header"> <div class="container-fluid justify-content-start navigation-padding"> <div class="offcanvas-header"> <button class="btn-close float-end">x</button> </div><a class="navbar-brand d-none d-lg-inline" href="./"><img src="../frontend_assets/img/logo.png" width="200px" height="70px" alt="" class=""></a> <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0"> <li class="nav-item"> <a class="nav-link" aria-current="page" href="./">Home</a> </li><li class="nav-item"> <a class="nav-link" href="./about">About</a> </li><li class="nav-item"> <a class="nav-link" href="./membership">Membership</a> </li><li class="nav-item"> <a class="nav-link" href="./services">Our Services</a> </li><li class="nav-item"> <a class="nav-link" href="./faqs">FAQs</a > </li > <li class="nav-item"> <a class="nav-link" href="javascript:;">Contest</a> </li><li class="nav-item"> <a class="nav-link" href="./contact">Contact</a></li></ul> <a href="./cart"><i class="fa badge" style="font-size:24px" value="{{ count((array) session('cart')) }}">&#xf07a;</i></a><form class="d-lg-flex justify-content-between"> <a class="btn-1 mx-2 text-white" href="./register"> Register </a> <a class="btn-2" href="./login">Log in</a> </form> </div></nav> </header>
    <main>
        <section class="banner_inner d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="banner_inner_title">FAQ's</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="membership_inner_section my-5 py-md-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="accordion" id="accordionExample">
                            <!-- <div class="accordion-item custom-accordion">-->
                            <!--    <h2 class="accordion-header" id="headingOne1">-->
                            <!--        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">-->
                            <!--               01) What kind of beats do you guys produce?-->
                            <!--        </button>-->
                            <!--    </h2>-->
                            <!--    <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample">-->
                            <!--        <div class="accordion-body">-->
                            <!--            <p class="accordion-desc">-->
                            <!--               Whatever music genre you can think of ??? hip hop, pop, trap, dance, or R&B ??? we promise to produce beats that will have people shaking their legs.-->
                            <!--            </p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div> -->
                            <div class="accordion-item custom-accordion">
                                <h2 class="accordion-header" id="headingTwo1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                        01) What kind of beats do you offer?
                                    </button>
                                </h2>
                                <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="accordion-desc">
                                            Our roster of producers are versatile and whether you need a loop or beat for a hip hop, pop, trap, dance, or R&B track you can find quality tracks here.                                        </p>
                                    </div>
                                </div> 
                            </div> 
                            <div class="accordion-item custom-accordion ">
                                <h2 class="accordion-header" id="headingThree1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                        02) Sounds interesting. How do I begin?
                                    </button>
                                </h2>
                                <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="accordion-desc">
                                           Well, it???s quite simple. Just get in touch with one of our friendly representatives to get started, and we???ll take things from there.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item custom-accordion ">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        03) Do you guys offer beats on a lease?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="accordion-desc">
                                            Yes, that???s how GotDemBeatz works. We offer original beats on lease in exchange for an affordable price. As long as your premium membership is current, you???re free to use the beats.   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item custom-accordion ">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        04) What makes you different than other beats-producing companies?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="accordion-desc">
                                            We eat, sleep, and breathe music, which means you can expect beats of the highest quality from GotDemBeatz. And the best part? We offer them at an affordable price in exchange for premium membership
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            
                             <div class="accordion-item custom-accordion ">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseFive">
                                        05) What do you hope to achieve by producing beats for artists?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="accordion-desc">
                                           Well, it???s quite simple: we want to support artists who envision great things for their future. And by offering a wide range of music-related services, we hope to help them achieve all their goals.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="membership services contest py-lg-5 py-3">
            <div class="container">
                <div class="row row-cols-md-4 row-cols-1">
                    <div class="col-12  text-center py-md-5 py-3">
                        <h3 class="fs-1 position-relative text-white">Our Contest</h3>
                        <p class="mx-auto width-50 pt-5 text-secondary text-white">From video games to television shows, we???ve produced blockbuster beats for clients across various industries. </p>
                    </div>
                    <div class="col mb-4 mb-md-0 text-center">
                        <div class="rounded-3">
                            <a href="javascript:void(0)" class="position-relative text-white fs-5 fw-bold">
                                <img src="{{ asset('frontend_assets/img/contest/1.png') }}" class="img-fluid" alt="img">
                                <span class="position-absolute end-0 start-0">Contest 1</span>
                            </a>
                        </div>
                    </div>
                    <div class="col mb-4 mb-md-0 text-center">
                        <div class="rounded-3">
                            <a href="javascript:void(0)" class="position-relative text-white fs-5 fw-bold">
                                <img src="{{ asset('frontend_assets/img/contest/1.png') }}" class="img-fluid" alt="img">
                                <span class="position-absolute end-0 start-0">Contest 1</span>
                            </a>
                        </div>
                    </div>
                    <div class="col mb-4 mb-md-0 text-center">
                        <div class="rounded-3">
                            <a href="javascript:void(0)" class="position-relative text-white fs-5 fw-bold">
                                <img src="{{ asset('frontend_assets/img/contest/1.png') }}" class="img-fluid" alt="img">
                                <span class="position-absolute end-0 start-0">Contest 1</span>
                            </a>
                        </div>
                    </div>
                    <div class="col mb-4 mb-md-0 text-center">
                        <div class="rounded-3">
                            <a href="javascript:void(0)" class="position-relative text-white fs-5 fw-bold">
                                <img src="{{ asset('frontend_assets/img/contest/1.png') }}assets/img/contest/1.png" class="img-fluid" alt="img">
                                <span class="position-absolute end-0 start-0">Contest 1</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 text-center my-5">
                        <a href="#" class="btn-1 text-white">View All</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="services py-md-5 py-3 contact position-relative">
            <div class="container">
                <div class="row row-col-1">
                    <div class="col-12  text-center py-md-5 py-3">
                        <span class="Contact_Us">Contact Us</span>
                        <h3 class="fs-1 position-relative">Let???s Get Started</h3>
                        <p class="mx-auto width-50 pt-5 text-secondary">Do you have any questions related to our services? Feel free to send us a message, and we???ll try to get back ASAP. </p>

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

