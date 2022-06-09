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
    <script src="{{ asset('frontend_assets/js/header.js') }}"></script>
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
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 offset-lg-1">
                        <form action="#" class="position-relative">
                            <input type="text" placeholder="search..."
                                class="text-uppercase form-control rounded-0 search mx-auto input-search">
                            <button class="btn border-0 rounded-0 position-absolute" type="submit" id="search"><img
                                    src="{{ asset('frontend_assets/img/search-icon.png') }}" class="img-fluid" alt="search"> </button>
                        </form>
                    </div>
                    <div class="col-lg-11 align-items-center justify-content-between mx-auto">
                    <div id="waveform"></div>
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
                                        <th class="tag">Tag</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($songs as $song)
                                    <tr>
                                        <td class="td_size"><img src="../storage/songs/{{ $song->image }}" class="img-fluid" alt="">
                                        </td>
                                        <td class="td_size"><a href="#" class="text-dark">01 <svg fill="#fe8e44"
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
                                        <td class="tag td_size_2">
                                            <div class="d-flex">
                                                <div class="">
                                                    <a class="border py-2 px-3" href="javscript:void(0)">#Music</a>
                                                </div>
                                                <div class="">
                                                    <a class="border py-2 px-3" href="javscript:void(0)">#Music</a>
                                                </div>
                                                <div class="">
                                                    <a class="px-3" href="javscript:void(0)"><svg fill="#888888"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path
                                                                d="M448 127.1C448 181 405 223.1 352 223.1C326.1 223.1 302.6 213.8 285.4 197.1L191.3 244.1C191.8 248 191.1 251.1 191.1 256C191.1 260 191.8 263.1 191.3 267.9L285.4 314.9C302.6 298.2 326.1 288 352 288C405 288 448 330.1 448 384C448 437 405 480 352 480C298.1 480 256 437 256 384C256 379.1 256.2 376 256.7 372.1L162.6 325.1C145.4 341.8 121.9 352 96 352C42.98 352 0 309 0 256C0 202.1 42.98 160 96 160C121.9 160 145.4 170.2 162.6 186.9L256.7 139.9C256.2 135.1 256 132 256 128C256 74.98 298.1 32 352 32C405 32 448 74.98 448 128L448 127.1zM95.1 287.1C113.7 287.1 127.1 273.7 127.1 255.1C127.1 238.3 113.7 223.1 95.1 223.1C78.33 223.1 63.1 238.3 63.1 255.1C63.1 273.7 78.33 287.1 95.1 287.1zM352 95.1C334.3 95.1 320 110.3 320 127.1C320 145.7 334.3 159.1 352 159.1C369.7 159.1 384 145.7 384 127.1C384 110.3 369.7 95.1 352 95.1zM352 416C369.7 416 384 401.7 384 384C384 366.3 369.7 352 352 352C334.3 352 320 366.3 320 384C320 401.7 334.3 416 352 416z" />
                                                        </svg></a>
                                                </div>
                                                <div class="">
                                                    <a class=" px-3" href="javscript:void(0)"><svg fill="#888888"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path
                                                                d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z" />
                                                        </svg></a>
                                                </div>
                                                <div class="">
                                                    <a class=" px-3" href="javscript:void(0)"><svg fill="#888888"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path
                                                                d="M511.1 367.1c0 44.18-42.98 80-95.1 80s-95.1-35.82-95.1-79.1c0-44.18 42.98-79.1 95.1-79.1c11.28 0 21.95 1.92 32.01 4.898V148.1L192 224l-.0023 208.1C191.1 476.2 149 512 95.1 512S0 476.2 0 432c0-44.18 42.98-79.1 95.1-79.1c11.28 0 21.95 1.92 32 4.898V126.5c0-12.97 10.06-26.63 22.41-30.52l319.1-94.49C472.1 .6615 477.3 0 480 0c17.66 0 31.97 14.34 32 31.99L511.1 367.1z" />
                                                        </svg></a>
                                                </div>
                                                <div class="">
                                                    <button class="border py-2 px-3" href="javscript:void(0)" value="{{ $song->song_file }}" id="playSong" onclick="dosomething(this)">Play</button>
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach  
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <a href="beats.html" class="btn-1">All Tracks</a>
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

    wavesurfer?.destroy()

    wavesurfer = WaveSurfer.create({
    container: '#waveform',
    waveColor: 'yellow',
    progressColor: 'black'
});

const loadSong = wavesurfer.load('../storage/songs/'+element.value+'');

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

    





// wavesurfer.load('audio.wav');

</script>

</html>