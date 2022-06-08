<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/theme.css') }}">
    <title>Our Services</title>
</head>

<body>
    <script src="{{ asset('frontend_assets/js/header.js') }}"></script>
    <main>
        <section class="banner_inner d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="banner_inner_title">Our Services</h1>
                    </div>
                </div>
            </div>
        </section>
        @foreach($services as $key => $service)
        @if($key % 2 == 0)
        <section class="services services_section_inner_one">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 z-index-1 mb-4 mb-md-0">
                        <div class="position-relative text-center">
                            <img src="../storage/services/{{ $service->image }}" alt="" class="img-fluid ">
                            <img src="{{ asset('frontend_assets/img/img_inner_1_fixed.png') }}" alt="" class="img-fluid position-absolute img_fixed_one">
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <h3 class="fs-1 position-relative new_title">{{ $service->name }}</h3>
                        <div class="text_dark my-4">
                            {!! $service->desc !!}
                        </div>
                        <div class="mt-4">
                            <a href="#" class="btn-1 text-white">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @else
        <section class="services services_section_inner_one membership">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center mb-4 mb-md-0">
                        <h3 class="fs-1 position-relative new_title text-white">{{ $service->name }}</h3>
                        <div class="my-4">
                            {!! $service->desc !!}
                        </div>
                        <div class="mt-4">
                            <a href="#" class="btn-1 text-white">Add To Cart</a>
                        </div>
                    </div>
                    <div class="col-md-6 z-index-1">
                        <div class="position-relative text-center">
                            <img src="../storage/services/{{ $service->image }}" alt="" class="img-fluid ">
                            <img src="{{ asset('frontend_assets/img/img_inner_1_fixed.png') }}" alt="" class="img-fluid position-absolute img_fixed_one two">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        @endforeach
    </main>
    <script src="{{ asset('frontend_assets/js/footer.js') }}"></script>
</body>
<script src="{{ asset('frontend_assets/js/plugins.js') }} " defer></script>
<script src="{{ asset('frontend_assets/js/theme.js') }} " defer></script>

</html>