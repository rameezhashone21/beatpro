<!DOCTYPE html>
<html>
<head>
    <title>GotDemBeatz - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/theme.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<header class="fixed-top header-bg py-md-3 py-2"> <div class="container"> <div class="row d-lg-none"> <div class="col-6"> <a class="navbar-brand" href="./"><img src="../frontend_assets/img/logo.png" width="200px" height="70px" alt="" class="img-fluid"></a> </div><div class="col-6 text-end align-self-center"> <button data-trigger="navbar_main" class="d-lg-none btn" type="button"> <img src="assets/img/bar_img.png" alt=""> </button> </div></div></div><nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg header"> <div class="container-fluid justify-content-start navigation-padding"> <div class="offcanvas-header"> <button class="btn-close float-end">x</button> </div><a class="navbar-brand d-none d-lg-inline" href="./"><img src="../frontend_assets/img/logo.png" width="200px" height="70px" alt="" class=""></a> <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0"> <li class="nav-item"> <a class="nav-link" aria-current="page" href="./">Home</a> </li><li class="nav-item"> <a class="nav-link" href="./about">About</a> </li><li class="nav-item"> <a class="nav-link" href="./membership">Membership</a> </li><li class="nav-item"> <a class="nav-link" href="./services">Our Services</a> </li><li class="nav-item"> <a class="nav-link" href="./faqs">FAQs</a > </li > <li class="nav-item"> <a class="nav-link" href="javascript:;">Contest</a> </li><li class="nav-item"> <a class="nav-link" href="./contact">Contact</a></li></ul> <a href="../cart"><i class="fa badge" style="font-size:24px" value={{ count((array) session('cart')) }}>&#xf07a;</i></a><form class="d-lg-flex justify-content-between"> <a class="btn-1 mx-2 text-white" href="./register"> Register </a> <a class="btn-2" href="./login">Log in</a> </form> </div></nav> </header>');
<main>
        <section class="banner pb-3">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <img src="{{ asset('frontend_assets/img/1.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8">
                        <h1>Got dem Beatz</h1>
                        <p>Welcome to GotDemBeatz!</p>
                        <p class="mb-2 mb-4">Are you searching for the right beats that compliment your track perfectly? Well, you’ve come to the right place. GotDemBeatz specializes in producing custom beats, mixing and mastering, loops and drum kits. We can help take your music career to the next level.
                        </p>
                        <div class="d-flex flex-wrap ">
                            <div class="mb-4 mb-md-0">
                                <a href="#" class="btn-1 mx-1 text-white"><img src="{{ asset('frontend_assets/img/play-all.png') }}"
                                        class="img-dluid" /> Play All </a>
                            </div>
                            <div class="mb-4 mb-md-0">
                                <a href="#" class="btn-1 mx-1 text-white"><img src="{{ asset('frontend_assets/img/mix.png') }}"
                                        class="img-dluid" /> Mix all </a>
                            </div>
                            <div class="mb-4 mb-md-0">
                                <a href="#" class="btn-1 mx-1 text-center px-3"><img src="{{ asset('frontend_assets/img/heart.png') }}"
                                        class="img-dluid" /> </a>
                            </div>
                            <div class="mb-4 mb-md-0">
                                <a href="#" class="text-white text-decoration-none text-uppercase text-white"> <img
                                        src="{{ asset('frontend_assets/img/share.png') }}" alt=""> share (124)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @yield('content')

        @yield('scripts')
        
    </main>    
  <script src="{{ asset('frontend_assets/js/footer.js') }}"></script>     
</body>
<!-- <script src="{{ asset('frontend_assets/js/plugins.js') }} " defer></script>
<script src="{{ asset('frontend_assets/js/theme.js') }} " defer></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/wavesurfer.js"></script> -->
</html>