<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('public/frontend_assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend_assets/css/theme.css') }}">
    <title>About</title>
</head>

<body>
    <script src="{{ asset('public/frontend_assets/js/header.js') }}"></script>
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
                            <img src="{{ asset('public/frontend_assets/img/img_inner_1.png') }}" alt="" class="img-fluid ">
                            <img src="{{ asset('public/frontend_assets/img/img_inner_1_fixed.png') }}" alt="" class="img-fluid position-absolute img_fixed_one">
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <h3 class="fs-1 position-relative new_title">Create. Play. Repeat. </h3>
                        <p class="mt-4 text-secondary fw-bold">
                            In 2004, a collective group of producers with a passion for music came together to create a platform for people to showcase their music. 18 years later, that platform has become one of the most sought-after companies specializing in producing original beats, among other digital goods. 
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
                        <img src="{{ asset('public/frontend_assets/img/music-container.png') }}" alt="" class="img-fluid">
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
    <script src="{{ asset('public/frontend_assets/js/footer.js') }}"></script>
</body>
<script src="{{ asset('public/frontend_assets/js/plugins.js') }} " defer></script>
<script src="{{ asset('public/frontend_assets/js/theme.js') }} " defer></script>

</html>