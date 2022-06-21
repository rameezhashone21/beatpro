@extends('layout')
  
@section('content')
        <section class="tracks">
            <div class="col-12  text-center py-md-5">
                <h3 class="fs-1 position-relative">All Beats</h3>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col-lg-11 align-items-center justify-content-between mx-auto">
                    <div class="py-4" id="waveform"></div>
                        <form action="{{ route('search') }}" class="position-relative" method="GET">
                            <input name="search" type="text" placeholder="search..."
                                class="text-uppercase form-control rounded-0 search mx-auto input-search">
                            <button type="submit" class="btn border-0 rounded-0 position-absolute" type="submit" id="search"><img
                                    src="{{ asset('frontend_assets/img/search-icon.png') }}" class="img-fluid" alt="search"> </button>
                        </form>
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
                                        <td class="td_size position-relative">
                                            <img src="../storage/songs/{{ $song->image }}" class="img-fluid" alt="" width="100" height="100">
                                        <button class="border-0 play-pause-button py-2 px-3 bg-transparent position-absolute" value="{{ $song->song_file }}" 
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
                                                <!-- <div class="">
                                                    <a class=" px-3" href="javscript:void(0)"><svg fill="#888888"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path
                                                                d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z" />
                                                        </svg></a>
                                                </div> -->
                                                <!-- <div class="">
                                                    <a class=" px-3" href="javscript:void(0)"><svg fill="#888888"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path
                                                                d="M511.1 367.1c0 44.18-42.98 80-95.1 80s-95.1-35.82-95.1-79.1c0-44.18 42.98-79.1 95.1-79.1c11.28 0 21.95 1.92 32.01 4.898V148.1L192 224l-.0023 208.1C191.1 476.2 149 512 95.1 512S0 476.2 0 432c0-44.18 42.98-79.1 95.1-79.1c11.28 0 21.95 1.92 32 4.898V126.5c0-12.97 10.06-26.63 22.41-30.52l319.1-94.49C472.1 .6615 477.3 0 480 0c17.66 0 31.97 14.34 32 31.99L511.1 367.1z" />
                                                        </svg></a>
                                                </div> -->
                                                <div class="">
                                                <p class=""><a href="{{ route('add.to.cart', $song->id) }}" style="" class="btn-1 text-white" role="button">Add to cart</a> </p>

                                                </div>

                                                <!-- <div class="mb-4 mb-md-0">
                                <a href="#" class="btn-1 mx-1 text-white"><img src="{{ asset('frontend_assets/img/play-all.png') }}"
                                        class="img-dluid" /> Play All </a>
                            </div> -->
                                            </div>
                                            
                                        </td>
                                    </tr>
                                @endforeach  
                                </tbody>
                            </table>
                        </div>
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

@endsection
  
@section('scripts')

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
</script>
@endsection
