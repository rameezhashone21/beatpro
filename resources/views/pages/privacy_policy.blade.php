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
    <title>Got Dem Beatz</title>
</head>

<body>
<header class="fixed-top header-bg py-md-3 py-2"> <div class="container"> <div class="row d-lg-none"> <div class="col-6"> <a class="navbar-brand" href="./"><img src="../frontend_assets/img/logo.png" width="200px" height="70px" alt="" class="img-fluid"></a> </div><div class="col-6 text-end align-self-center"> <button data-trigger="navbar_main" class="d-lg-none btn" type="button"> <img src="assets/img/bar_img.png" alt=""> </button> </div></div></div><nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg header"> <div class="container-fluid justify-content-start navigation-padding"> <div class="offcanvas-header"> <button class="btn-close float-end">x</button> </div><a class="navbar-brand d-none d-lg-inline" href="./"><img src="../frontend_assets/img/logo.png" width="200px" height="70px" alt="" class=""></a> <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0"> <li class="nav-item"> <a class="nav-link" aria-current="page" href="./">Home</a> </li><li class="nav-item"> <a class="nav-link" href="./about">About</a> </li><li class="nav-item"> <a class="nav-link" href="./membership">Membership</a> </li><li class="nav-item"> <a class="nav-link" href="./services">Our Services</a> </li><li class="nav-item"> <a class="nav-link" href="./faqs">FAQs</a > </li > <li class="nav-item"> <a class="nav-link" href="javascript:;">Contest</a> </li><li class="nav-item"> <a class="nav-link" href="./contact">Contact</a></li></ul> <a href="./cart"><i class="fa badge" style="font-size:24px" value="{{ count((array) session('cart')) }}">&#xf07a;</i></a><form class="d-lg-flex justify-content-between"> <a class="btn-1 mx-2 text-white" href="./register"> Register </a> <a class="btn-2" href="./login">Log in</a> </form> </div></nav> </header>
    <main>
        <section class="banner_inner d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="banner_inner_title">Privacy Policy</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-lg-5 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 align-items-center justify-content-between mx-auto">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                            recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                            recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                            recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                            recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                            recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
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