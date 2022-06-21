<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/theme.css') }}">
    <title>Home</title>
</head>

<body>
<header class="fixed-top header-bg py-md-3 py-2"> <div class="container"> <div class="row d-lg-none"> <div class="col-6"> <a class="navbar-brand" href="./"><img src="../frontend_assets/img/logo.png" width="200px" height="70px" alt="" class="img-fluid"></a> </div><div class="col-6 text-end align-self-center"> <button data-trigger="navbar_main" class="d-lg-none btn" type="button"> <img src="assets/img/bar_img.png" alt=""> </button> </div></div></div><nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg header"> <div class="container-fluid justify-content-start navigation-padding"> <div class="offcanvas-header"> <button class="btn-close float-end">x</button> </div><a class="navbar-brand d-none d-lg-inline" href="./"><img src="../frontend_assets/img/logo.png" width="200px" height="70px" alt="" class=""></a> <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0"> <li class="nav-item"> <a class="nav-link" aria-current="page" href="./">Home</a> </li><li class="nav-item"> <a class="nav-link" href="./about">About</a> </li><li class="nav-item"> <a class="nav-link" href="./membership">Membership</a> </li><li class="nav-item"> <a class="nav-link" href="./services">Our Services</a> </li><li class="nav-item"> <a class="nav-link" href="./faqs">FAQs</a > </li > <li class="nav-item"> <a class="nav-link" href="javascript:;">Contest</a> </li><li class="nav-item"> <a class="nav-link" href="./contact">Contact</a></li></ul> <a href="./cart"><i class="fa badge" style="font-size:24px" value="{{ count((array) session('cart')) }}">&#xf07a;</i></a><form class="d-lg-flex justify-content-between"> <a class="btn-1 mx-2 text-white" href="./register"> Register </a> <a class="btn-2" href="./login">Log in</a> </form> </div></nav> </header>
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
       
        <section class="tracks py-lg-5 py-3">
            <div class="col-12  text-center py-md-5 py-3">
                <h3 class="fs-1 position-relative">Top Beats</h3>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col-lg-11 align-items-center justify-content-between mx-auto">
                    <div class="row ">
                    @if(session('success'))
                    <div class="alert alert-success">
                    {{ session('success') }}
                    </div> 
                    @endif
                    <div class="py-4" id="waveform"></div>
                        <!-- <form action="#" class="position-relative">
                            <input type="text" placeholder="search..."
                                class="text-uppercase form-control rounded-0 search mx-auto input-search">
                            <button class="btn border-0 rounded-0 position-absolute" type="submit" id="search"><img
                                    src="{{ asset('frontend_assets/img/search-icon.png') }}" class="img-fluid" alt="search"> </button>
                        </form> -->
                        <div class="table-responsive my-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th></th>
                                        <th>listed</th>
                                        <th>Track</th>
                                        <th>Producer</th>
                                        <th>Time</th>
                                        <th>Bpm</th>
                                        <th class="tag" colspan="2">Tag</th>
                                        <th>Share</th>
                                        <th>Download</th>
                                        <th>Buy</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach($songs as $song)
                                    <tr valign="middle">
                                        <td class="td_size ">
                                            <img src="../storage/songs/{{ $song->image }}" class="img-fluid" alt="" width="60px" height="50">
                                        <button class="border-0 play-pause-button py-2 px-2 bg-transparent position-relative" value="{{ $song->song_file }}" 
                                        id="playSong" onclick="dosomething(this)">
                                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM176 168V344C176 352.7 180.7 360.7 188.3 364.9C195.8 369.2 205.1 369 212.5 364.5L356.5 276.5C363.6 272.1 368 264.4 368 256C368 247.6 363.6 239.9 356.5 235.5L212.5 147.5C205.1 142.1 195.8 142.8 188.3 147.1C180.7 151.3 176 159.3 176 168V168z"/></svg>
                                        </button>
                                        </td>
                                        <td class="td_size"><a href="#" class="text-dark">{{$song->id}} <svg fill="#fe8e44"
                                                    class="heart" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z" />
                                                </svg></a></td>
                                        <td class="td_size">{{$song->title}}</td>
                                        <td class="td_size">Paper Thin</td>
                                        <td class="td_size">04: 36</td>
                                        <td class="td_size"><svg fill="#888888" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z" />
                                            </svg></td>
                                        <td class="tag td_size" colspan="2">
                                                    <a class="border py-2 px-3 d-inline-block" href="javscript:void(0)">#Music</a>
                                                    <a class="border py-2 px-3 d-inline-block" href="javscript:void(0)">#Music</a>  
                                        </td>

                                        <td>
                                        <a class="px-3" href="javscript:void(0)"><svg fill="#888888"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path
                                                                d="M448 127.1C448 181 405 223.1 352 223.1C326.1 223.1 302.6 213.8 285.4 197.1L191.3 244.1C191.8 248 191.1 251.1 191.1 256C191.1 260 191.8 263.1 191.3 267.9L285.4 314.9C302.6 298.2 326.1 288 352 288C405 288 448 330.1 448 384C448 437 405 480 352 480C298.1 480 256 437 256 384C256 379.1 256.2 376 256.7 372.1L162.6 325.1C145.4 341.8 121.9 352 96 352C42.98 352 0 309 0 256C0 202.1 42.98 160 96 160C121.9 160 145.4 170.2 162.6 186.9L256.7 139.9C256.2 135.1 256 132 256 128C256 74.98 298.1 32 352 32C405 32 448 74.98 448 128L448 127.1zM95.1 287.1C113.7 287.1 127.1 273.7 127.1 255.1C127.1 238.3 113.7 223.1 95.1 223.1C78.33 223.1 63.1 238.3 63.1 255.1C63.1 273.7 78.33 287.1 95.1 287.1zM352 95.1C334.3 95.1 320 110.3 320 127.1C320 145.7 334.3 159.1 352 159.1C369.7 159.1 384 145.7 384 127.1C384 110.3 369.7 95.1 352 95.1zM352 416C369.7 416 384 401.7 384 384C384 366.3 369.7 352 352 352C334.3 352 320 366.3 320 384C320 401.7 334.3 416 352 416z" />
                                                        </svg></a>
                                        </td>
                                        <td class="text-center">
                                        <a class=" px-3" href="javscript:void(0)"><svg fill="#888888"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path
                                                                d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z" />
                                                        </svg></a>
                                        </td>
                                        <td>
                                        <a href="{{ route('add.to.cart', $song->id) }}" class="px-3">
                                                <svg fill="#888888" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 24C0 10.75 10.75 0 24 0H96C107.5 0 117.4 8.19 119.6 19.51L121.1 32H312V134.1L288.1 111C279.6 101.7 264.4 101.7 255 111C245.7 120.4 245.7 135.6 255 144.1L319 208.1C328.4 218.3 343.6 218.3 352.1 208.1L416.1 144.1C426.3 135.6 426.3 120.4 416.1 111C407.6 101.7 392.4 101.7 383 111L360 134.1V32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24V24zM224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464zM416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464z"/></svg>
                                                </a>
                                        </td>
                                    </tr>
                                @endforeach  
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <a href="{{url('all_tracks')}}" class="btn-1">All Beats</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="tracks py-lg-5 py-3">
        <div class="container">
            <div class="row">
            <div class="col-12 text-center py-md-5 py-3">
                     <h3 class="fs-1">Drumkit and Loop Packs</h3>
                    <div class="AlbumSlider py-md-5 py-3">
                        @foreach($albums as $album)
                            <div class="slide">
                                <a href="{{ url('/album/'.$album->id) }}"> 
                                    <img  src="../storage/albums/{{ $album->image }}" style="width:200px;height:200px;"alt="img">
                                </a>
                            </div>
                            @endforeach   
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section class="membership py-5 py-3">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8">
                        <div class="row row-cols-md-2 row-cols-1 align-items-center justify-content-center">
                            <div class="col">
                                <div class="img position-relative">
                                    <img src="{{ asset('frontend_assets/img/mem-2.png') }}" class="img-fluid " alt=" ">
                                </div>
                            </div>
                            <div class="col ">
                                <h2 class="fs-1 text-white pb-10 membership_title">Become A Member</h2>
                                <div class="minus">
                                    <p class="py-md-3 py-2">You’ve got plenty of tracks that need fine-tuning. We’ve got the tools and resources to make that happen. Become our member and get access to those as well as hundreds of original and high-quality beats.</p>
                                    <p class="py-3 py-2">And the best part? You won’t have to spend a fortune on that. As long as your membership is current, you’re free to use the beats. So, sign up for our membership today and create chart-topping music.
                                    </p>
                                    <a href="#" class="btn-1">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <img src="{{ asset('frontend_assets/img/mem-1.png') }}" class="img-fluid " alt=" ">
                    </div>
                </div>
            </div>
        </section>

        <section class="services py-md-5 py-3 position-relative">
            <span class="our_services">Our Services</span>
            <div class="container">
                <div class="row row-cols-md-3 row-cols-1">
                    <div class="col-12  text-center py-md-5 py-3">
                        <h3 class="fs-1 position-relative">Our Services</h3>
                        <p class="mx-auto width-50 pt-5 text-secondary">Whether you want to produce R&B music or release a hip-hop single, people will be dancing to the beats of your songs all day long with our help. </p>
                    </div>
                    <div class="col mb-4 mb-md-0">
                        <div class="box border">
                            <img src="{{ asset('frontend_assets/img/services/1.png') }}" class="w-100" alt="">

                            <div class="content p-4">
                                <h4>Custom Beat</h4>
                                <p class="py-md-4 py-2 text-secondary">
                                    We’ll produce custom beats for your song that will encourage people to smash the ‘repeat’ button.
                                </p>
                                <a href="#" class="btn-1 text-white">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 mb-md-0">
                        <div class="box border">
                            <img src="{{ asset('frontend_assets/img/services/1.png') }}" class="w-100" alt="">

                            <div class="content p-4">
                                <h4>Mix and Mastering</h4>
                                <p class="py-md-4 py-2 text-secondary">
                                    We’ll find the perfect balance in your audio, enhancing its quality while maintaining consistency.
                                </p>
                                <a href="#" class="btn-1 text-white">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 mb-md-0">
                        <div class="box border">
                            <img src="{{ asset('frontend_assets/img/services/1.png') }}" class="w-100" alt="">

                            <div class="content p-4">
                                <h4>Drum Kits and Loops</h4>
                                <p class="py-md-4 py-2 text-secondary">
                                    We’ll create a subtle yet worth noticing loop for your music that will keep playing in the background.
                                </p>
                                <a href="#" class="btn-1 text-white">Read More</a>
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
                        <p class="mx-auto width-50 pt-5 text-secondary text-white">From video games to television shows, we’ve produced blockbuster beats for clients across various industries.  </p>
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
                                <img src="{{ asset('frontend_assets/img/contest/1.png') }}" class="img-fluid" alt="img">
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
            <span class="Contact_Us">Contact Us</span>
            <div class="container">
                <div class="row row-col-1">
                    <div class="col-12  text-center py-md-5 py-3">
                        <h3 class="fs-1 position-relative">Contact Us</h3>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('frontend_assets/js/plugins.js') }} " defer></script>
<script src="https://unpkg.com/wavesurfer.js"></script>
<script src="{{ asset('frontend_assets/js/theme.js') }} " defer></script>

<script>

let wavesurfer;

function dosomething(element){
    
        const createSongPlayer = () => {
            localStorage.setItem('music_current_song', element.value)

            wavesurfer?.destroy()
    
            wavesurfer = WaveSurfer.create({
                container: '#waveform',
                waveColor: '#fd743d',
                progressColor: 'rgb(254, 179, 78)'
            });
        }
    
        const playSvg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM176 168V344C176 352.7 180.7 360.7 188.3 364.9C195.8 369.2 205.1 369 212.5 364.5L356.5 276.5C363.6 272.1 368 264.4 368 256C368 247.6 363.6 239.9 356.5 235.5L212.5 147.5C205.1 142.1 195.8 142.8 188.3 147.1C180.7 151.3 176 159.3 176 168V168z"/></svg>';
        const pauseSvg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM224 191.1v128C224 337.7 209.7 352 192 352S160 337.7 160 320V191.1C160 174.3 174.3 160 191.1 160S224 174.3 224 191.1zM352 191.1v128C352 337.7 337.7 352 320 352S288 337.7 288 320V191.1C288 174.3 302.3 160 319.1 160S352 174.3 352 191.1z"/></svg>';
    
    
         $('.play-pause-button').each(function(index, item) {
            $(item).html(playSvg)
        })

        const getSongFromLocalStorage = localStorage.getItem('music_current_song')

        if(getSongFromLocalStorage === element.value) {
            
            try {
                wavesurfer.playPause()
                return;
            } catch {
                localStorage.removeItem('music_current_song')
                createSongPlayer();
            }
           
           
        }
        
        createSongPlayer();

const loadSong = wavesurfer.load('../storage/songs/'+element.value+'');

wavesurfer.on('pause', () => {
    $(element).html(playSvg)
})

wavesurfer.on('play', () => {
    $(element).html(pauseSvg)
})

wavesurfer.on('ready', () => {
    wavesurfer.playPause();
})

$('.controls .btn').on('click', function(){
      var action = $(this).data('action');
      switch (action) {
        case 'play':
          wavesurfer.playPause();
          break;
        case 'back':
          wavesurfer.skipBackward();
          break;
        case 'forward':
          wavesurfer.skipForward();
          break;
        case 'mute':
          wavesurfer.toggleMute();
          break;
      }
    });

    
};

    
// $("#playSong").click(function() {
//      $(this).html(
//      $(this).html() == 
//      '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM224 191.1v128C224 337.7 209.7 352 192 352S160 337.7 160 320V191.1C160 174.3 174.3 160 191.1 160S224 174.3 224 191.1zM352 191.1v128C352 337.7 337.7 352 320 352S288 337.7 288 320V191.1C288 174.3 302.3 160 319.1 160S352 174.3 352 191.1z"/></svg>' ? 
//      '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM176 168V344C176 352.7 180.7 360.7 188.3 364.9C195.8 369.2 205.1 369 212.5 364.5L356.5 276.5C363.6 272.1 368 264.4 368 256C368 247.6 363.6 239.9 356.5 235.5L212.5 147.5C205.1 142.1 195.8 142.8 188.3 147.1C180.7 151.3 176 159.3 176 168V168z"/></svg>' : 
//      '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM224 191.1v128C224 337.7 209.7 352 192 352S160 337.7 160 320V191.1C160 174.3 174.3 160 191.1 160S224 174.3 224 191.1zM352 191.1v128C352 337.7 337.7 352 320 352S288 337.7 288 320V191.1C288 174.3 302.3 160 319.1 160S352 174.3 352 191.1z"/></svg>');
// });




// wavesurfer.load('audio.wav');

</script>

</html>