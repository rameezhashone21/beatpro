<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/theme.css')}}">
    <title>Got Dem Beatz - Signup</title>
</head>
<style>
    .btn-login-google,
    .btn-login-fb {
        font-weight: normal;
        padding: 18px 40px;
        border-radius: 2px;
        font-size: 14px;
        transition: 0.3s;
    }
    
    .btn-login-google {
        color: #fff;
        background-color: #fd8102;
        filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.06));
    }
    
    .btn-login-fb {
        background-color: #fff;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.06);
        color: #254ba2;
    }
    
    .btn-login-google:hover,
    .btn-login-fb:hover {
        color: #fff;
        background: linear-gradient(#feb34e 0%, #ff1314 100%);
    }
    
    .show-password-icon {
        top: 11px;
        right: 14px;
        background-color: transparent;
    }
    
    .login-input {
        height: 50px;
        background-color: transparent;
        border: 1px solid #ebebeb;
        border-radius: 25px;
        transition: 0.4s;
        color: #fff;
    }
    
    .login-input:focus {
        border: 1px solid #feb34e;
        background-color: transparent;
        box-shadow: none;
        color: #fff;
    }
    
    .btn-submit-login {
        height: 55px;
        background: linear-gradient(#feb34e 0%, #ff1314 100%);
        filter: drop-shadow(3.99px 22.65px 57px rgba(0, 0, 0, 0.06));
        color: #fff;
        padding: 0 120px;
    }
    
    .btn-submit-login:hover {
        background: #fff;
        color: #000;
    }
    
    .login-hr {
        opacity: 1;
        background-color: #fff;
        width: 30px;
        margin: 2rem 0;
    }
    
    .login-text {
        width: 70%;
        font-weight: normal;
        font-size: 48px;
        letter-spacing: -0.01em;
        line-height: 60px;
    }
</style>

<body>
    <main>
        <div class="container-fluid" style="background-color: #000;">
            <div class="row align-items-center">
                <div class="col-lg-5 ps-0 d-none d-lg-block position-relative">
                    <img src="{{ asset('frontend_assets/img/signup-image.png')}}" alt="" class="img-fluid w-100">
                    <h2 class="text-white position-absolute bottom-0 end-0 text-right login-text display-1">
                        Create your very own masterpiece with Us.
                    </h2>
                </div>
                <div class="col-xl-5 col-lg-7 offset-xl-1">
                    <img src="{{ asset('frontend_assets/img/logo.png')}}" alt="" class="img-fluid" style="height: 80px;">
                    <h3 class="text-white fw-normal fs-3 my-lg-5 my-3">Sign In</h3>
                    <a href="" class="btn-login-google d-inline-block me-md-4 mb-3 mb-md-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20.408" viewBox="0 0 20 20.408">
                            <path id="Icon_simple-google" data-name="Icon simple-google" d="M10.564,8.746v3.5h5.787a5.509,5.509,0,0,1-5.787,4.4,6.442,6.442,0,0,1,0-12.881,5.743,5.743,0,0,1,4.069,1.572L17.4,2.668A9.791,9.791,0,0,0,10.564,0a10.2,10.2,0,0,0,0,20.408c5.889,0,9.8-4.14,9.8-9.971A9.3,9.3,0,0,0,20.2,8.746Z" transform="translate(-0.36)" fill="#fff"/>
                        </svg><span class="ms-2">Sign in with Google</span>
                    </a>
                    <a href="" class="btn-login-fb d-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9.179" height="17.139" viewBox="0 0 9.179 17.139">
                            <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M10.187,9.641l.476-3.1H7.687V4.526A1.551,1.551,0,0,1,9.436,2.85h1.353V.21A16.5,16.5,0,0,0,8.387,0C5.936,0,4.334,1.486,4.334,4.175V6.539H1.609v3.1H4.334v7.5H7.687v-7.5Z" transform="translate(-1.609)" fill="#254ba2"/>
                        </svg> <span class="ms-2">Sign in With facebook</span>
                    </a>
                    <hr class="login-hr">
                    <p class="text-white mb-4">Or sign up using your email address</p>
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label for="name" class="text-white mb-2">Name</label>
                            <input type="text" id="name" name="name" class="form-control login-input" placeholder="Tony Nguyen" :value="old('name')" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="userName" class="text-white mb-2">Email</label>
                            <input type="email" id="email" name="email" class="form-control login-input" placeholder="Tonynguyen@example.com" :value="old('email')" required>

                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="email" class="text-white mb-2">Password</label>
                            <div class="position-relative">
                                <input type="password" id="password" name="password" placeholder="7+ Chareacters" class="form-control login-input" required>
                                <button type="button" onclick="showPassHiddedPass()" class="position-absolute show-password-icon border-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.997" height="12.998" viewBox="0 0 14.997 12.998">
                                        <path id="icon_view_password" data-name="icon view password" d="M1718.325,623.832a.573.573,0,0,1-.066-.707l.022-.03,10.821-11.133a.191.191,0,0,0,.033-.044.251.251,0,0,0,.037-.045l.688-.707a.551.551,0,0,1,.394-.165.537.537,0,0,1,.385.164.566.566,0,0,1,0,.8l-1.331,1.37a11.308,11.308,0,0,1,2.634,3.945.6.6,0,0,1,0,.444c-1.569,3.755-4.355,5.992-7.456,5.992h-.008a6.73,6.73,0,0,1-3.958-1.34l-1.42,1.46a.54.54,0,0,1-.388.165A.519.519,0,0,1,1718.325,623.832Zm4.511-3.847a2.883,2.883,0,0,0,4.057-.772,3.017,3.017,0,0,0,.511-1.714,3.094,3.094,0,0,0-.5-1.694l-.8.824a1.925,1.925,0,0,1,.205.87,1.851,1.851,0,0,1-1.821,1.877,1.777,1.777,0,0,1-.849-.21Zm-5.8-2.262a.581.581,0,0,1,0-.443c1.566-3.75,4.353-5.985,7.448-5.985h.006a6.533,6.533,0,0,1,3,.738l-2.442,2.515a3.315,3.315,0,0,0-.557-.053,2.969,2.969,0,0,0-2.925,3.012,3.562,3.562,0,0,0,.051.572l-2.708,2.786A12.149,12.149,0,0,1,1717.031,617.723Z" transform="translate(-1716.987 -611)" fill="#c0bdcc"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="password_confirmation" class="text-white mb-2"> Confirm Password</label>
                            <div class="position-relative">
                                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="7+ Chareacters" class="form-control login-input" required>
                                <button type="button" onclick="showPassHiddedPassConfirmation()" class="position-absolute show-password-icon border-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.997" height="12.998" viewBox="0 0 14.997 12.998">
                                        <path id="icon_view_password" data-name="icon view password_confirmation" d="M1718.325,623.832a.573.573,0,0,1-.066-.707l.022-.03,10.821-11.133a.191.191,0,0,0,.033-.044.251.251,0,0,0,.037-.045l.688-.707a.551.551,0,0,1,.394-.165.537.537,0,0,1,.385.164.566.566,0,0,1,0,.8l-1.331,1.37a11.308,11.308,0,0,1,2.634,3.945.6.6,0,0,1,0,.444c-1.569,3.755-4.355,5.992-7.456,5.992h-.008a6.73,6.73,0,0,1-3.958-1.34l-1.42,1.46a.54.54,0,0,1-.388.165A.519.519,0,0,1,1718.325,623.832Zm4.511-3.847a2.883,2.883,0,0,0,4.057-.772,3.017,3.017,0,0,0,.511-1.714,3.094,3.094,0,0,0-.5-1.694l-.8.824a1.925,1.925,0,0,1,.205.87,1.851,1.851,0,0,1-1.821,1.877,1.777,1.777,0,0,1-.849-.21Zm-5.8-2.262a.581.581,0,0,1,0-.443c1.566-3.75,4.353-5.985,7.448-5.985h.006a6.533,6.533,0,0,1,3,.738l-2.442,2.515a3.315,3.315,0,0,0-.557-.053,2.969,2.969,0,0,0-2.925,3.012,3.562,3.562,0,0,0,.051.572l-2.708,2.786A12.149,12.149,0,0,1,1717.031,617.723Z" transform="translate(-1716.987 -611)" fill="#c0bdcc"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label text-white ms-2" for="rememberMe">I accept the <a href="" style="color: #feb34e;">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <div class="col-12 mt-5 mb-4">
                            <button type="submit" class="btn-submit-login border-0">{{ __('Register') }}</button>
                        </div>
                        <div class="col-12">
                            <p class="text-white">Already a member? <a href="{{ route('login') }}" style="color: #feb34e;">Sign In</a></p>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="{{ asset('frontend_assets//js/plugins.js')}} " defer></script>
<script src="{{ asset('frontend_assets//js/theme.js')}} " defer></script>
<script>
    function showPassHiddedPass() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function showPassHiddedPassConfirmation() {
        var x = document.getElementById("password_confirmation");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

</html>