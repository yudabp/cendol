
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/bootstrap-popover-x.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>{{config('app.name')}}</title>

    <style>
        .angka span{
            width: 36px;
            height: 36px;
            line-height: 36px;
            text-align: center;
            border-radius: 50%;
            color: #fff;
            display: inline-block;
            font-size: 18px;
            font-weight: 600;
            background-image: -o-linear-gradient(4deg, #ec038b 0%, #fb6468 44%, #fbb936 100%);
            background-image: linear-gradient(
        86deg
        , #ec038b 0%, #fb6468 44%, #fbb936 100%);
            -webkit-box-shadow: 0px 7px 7px 0px rgb(243 42 126 / 23%);
            box-shadow: 0px 7px 7px 0px rgb(243 42 126 / 23%);
        }
    </style>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->

    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="top-header">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-area-inner">
                            <a href="{{route('index')}}" class="logo">
                                <img src="assets/images/logo.png" alt="">
                            </a>
                            <div class="right-area">
                                <div class="log-reg-area">
                                    {{-- <a href="#" class="custom-button1" data-toggle="modal"
                                        data-target="#registerModal">Register</a> --}}
                                    <a href="{{route('result')}}" class="custom-button2">All Result</a>
                                </div>
                                {{-- <div class="cart-area">
                                    <div class="icon">
                                        <img src="assets/images/cart.png" alt="">
                                        <span>06</span>
                                    </div>
                                    <div class="amount">
                                        <h4 class="mony">$ 23.60</h4>
                                        <p>To checkout</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="header-section">
            <div class="container">
                <div class="header-wrapper">
                    <ul class="menu">
                        <li>
                            <a href="index.html" class="active">Home</a>
                        </li>
                        <li>
                            <a href="single-lottery.html">Lottery</a>
                        </li>
                        <li>
                            <a href="result.html">Results</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="faq.html">Faq</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul class="submenu">
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <div class="right-tools">
                        <select class="select-bar">
                            <option value="">BTC</option>
                            <option value="">BDT</option>
                            <option value="">USD</option>
                        </select>
                        <select class="select-bar">
                            <option value="">EN</option>
                            <option value="">IN</option>
                            <option value="">BN</option>
                        </select>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div> --}}
    </header>
    <!-- Register Area -->
    <div class="modal fade log-reg-modal-wrapper" id="registerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="log-reg-inner">
                        <h2 class="title">
                            Create an Account
                        </h2>
                        <div class="main-content">
                            <form action="#">
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" class="my-form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Your Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="text" class="my-form-control"
                                        placeholder="Enter Your Confirm Password">
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">
                                        I agree to the <a href="#">Terms, Privacy Policy and Fees</a>
                                    </label>
                                </div>
                                <div class="button-wrapper">
                                    <button type="submit" class="custom-button2">Register Now</button>
                                    <p class="or-signup">
                                        Already have an account? <a href="#" data-toggle="modal"
                                            data-target="#loginModal">
                                            Login
                                        </a>
                                    </p>
                                </div>
                                <div class="or">
                                    <p>OR</p>
                                </div>
                                <div class="socials">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Area -->

    <!-- Login Area -->
    <div class="modal fade log-reg-modal-wrapper log" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="log-reg-inner">
                        <h2 class="title">
                            Welcome to Fantra
                        </h2>
                        <div class="main-content">
                            <form action="#">
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" class="my-form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Your Password">
                                </div>
                                <p class="f-pass">
                                    Forgot your password? <a href="#">recover password</a>
                                </p>
                                <div class="button-wrapper">
                                    <button type="submit" class="custom-button2">Sign In</button>
                                </div>
                                <div class="or log">
                                    <p>OR</p>
                                </div>
                                <div class="or-content">
                                    <p>Sign up with your email</p>
                                    <a href="#" class="or-btn"><img src="assets/images/google.png" alt=""> Sign Up with
                                        Google</a>
                                    <p class="or-signup">
                                        Don't have an account? <a href="#" data-toggle="modal"
                                            data-target="#registerModal">
                                            Sign up here
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Area -->
    <!-- ==========Header-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="banner-subtitle">Exclusive Lottery </p>
                    <h1 class="banner-title">
                        {{config('app.name')}}
                    </h1>
                    <p class="text">Power up for a chance to win in this electrifying instant game!</p>
                    {{-- <a href="#" class="custom-button2">Start Playing Now</a> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Draw-Section========== -->
    <section class="draw-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <center>
                    <h1 class="text-white">Result For {{date('M j Y', strtotime($date))}} ( {{$waktu}} )</h1>
                    <div class="draw-slider owl-carousel">
                        <div class="item">
                            <div class="single-draw">
                                <img class="overlay" src="assets/images/overlaymask1.png" alt="">
                                <div class="icon">
                                    <img src="images/win1.png" alt="">
                                </div>
                                <h4>
                                    1st Winner
                                </h4>
                                <div class="angka">
                                    @if(!$arr1)
                                    <p>-</p>
                                    @else
                                    @foreach($arr1 as $arr)
                                    <span>{{$arr}}</span>
                                    {{-- <img src="images/numbers/{{$arr}}.png" alt="" style=" height: 1000px;"> --}}
                                    @endforeach
                                    @endif
                                </div>
                                {{-- <h4>
                                    $116 Million
                                    Win BTC
                                </h4>
                                <a href="#" class="custom-button1">Play Now</a>
                                <div class="next-draw">
                                    <span class="text">Next Draw :</span>
                                    <div class="time">
                                        <img src="assets/images/time.png" alt="">
                                        <h6 class="time-countdown" data-countdown="01/01/2021"></h6>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-draw">
                                <img class="overlay" src="assets/images/overlaymask.png" alt="">
                                <div class="icon">
                                    <img src="images/win2.png" alt="">
                                </div>
                                <h4>
                                    2nd Winner
                                </h4>
                                <div class="angka">
                                    @if(!$arr2)
                                    <p>-</p>
                                    @else
                                    @foreach($arr2 as $arr)
                                    <span>{{$arr}}</span>
                                    {{-- <img src="images/numbers/{{$arr}}.png" alt="" style=" height: 40px;"> --}}
                                    @endforeach
                                    @endif
                                </div>
                                {{-- <h4>
                                    $106 Million
                                    Win BTC
                                </h4>
                                <a href="#" class="custom-button2">Play Now</a>
                                <div class="next-draw">
                                    <span class="text">Next Draw :</span>
                                    <div class="time">
                                        <img src="assets/images/time.png" alt="">
                                        <h6 class="time-countdown" data-countdown="01/06/2021"></h6>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-draw">
                                <img class="overlay" src="assets/images/overlaymask3.png" alt="">
                                <div class="icon">
                                    <img src="images/win3.png" alt="">
                                </div>
                                <h4>
                                    3rd Winner
                                </h4>
                                <div class="angka">
                                    @if(!$arr3)
                                    <p>-</p>
                                    @else
                                    @foreach($arr3 as $arr)
                                    <span>{{$arr}}</span>
                                    {{-- <img src="images/numbers/{{$arr}}.png" alt="" style=" height: 40px;"> --}}
                                    @endforeach
                                    @endif
                                </div>
                                {{-- <h4>
                                    $145 Million
                                    Win BTC
                                </h4>
                                <a href="#" class="custom-button1">Play Now</a>
                                <div class="next-draw">
                                    <span class="text">Next Draw :</span>
                                    <div class="time">
                                        <img src="assets/images/time.png" alt="">
                                        <h6 class="time-countdown" data-countdown="01/02/2021"></h6>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Feature-Section========== -->

    <!-- ==========Features-Section========== -->
    <section class="features-section mt-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-feature">
                        <div class="icon">
                            <img src="assets/images/f1.png" alt="">
                        </div>
                        <h4 class="title">Trust</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-feature">
                        <div class="icon">
                            <img src="assets/images/f2.png" alt="">
                        </div>
                        <h4 class="title">Safe & Security</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-feature">
                        <div class="icon">
                            <img src="assets/images/f3.png" alt="">
                        </div>
                        <h4 class="title">Zero commission</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-feature">
                        <div class="icon">
                            <img src="assets/images/f4.png" alt="">
                        </div>
                        <h4 class="title">24/7 Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Features-Section========== -->

    <!-- ==========Lottery-Result-Section========== -->
    <section class="lottery-result">
        {{-- <img class="bg-image" src="assets/images/result-background.jpg" alt=""> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="result-box">
                        <div class="result-list" style="margin-top: -20px">
                            <img src="img/bannerkecil.jpg" alt="" style="width: 100%; height: auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Lottery-Result-Section========== -->


    {{-- TEST --}}
    <section class="lottery-result">
        <img class="bg-image" src="assets/images/result-background.jpg" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9" style="margin-top: 200px">
                    <div class="content">
                        <div class="section-header">
                            <h2 class="title">
                                Latest Lottery results
                            </h2>
                            <p class="text">
                                Check Your lotto online, find all the lotto winning numbers and see
                                if you won the latest lotto jackpots
                            </p>
                            <br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="result-box">
                        <div class="result-list">
                            <table class="table">
                                <thead class="text-white" style="background-image: linear-gradient(
                                    7deg
                                    , #ec1379 0%, #6c0092 100%);">
                                    <tr style="font-size:11px;">
                                        <th>DATE</th>
                                        <th>MORNING</th>
                                        <th>DAY</th>
                                        <th>NIGHT</th>
                                    </tr>
                                </thead>
                                <tbody>
    
                                  <tr>
                                    <td>{{$day1}}</td>
                                    @foreach($number1 as $num)
                                    <td class="angka">
                                      @foreach(str_split(strval($num->no_satu)) as $n)
                                      <span>{{$n}}</span>
                                      {{-- <img src="images/numbers/{{$n}}.png" alt="" style="height: 10px;"> --}}
                                      @endforeach
                                    </td>
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td>{{$day2}}</td>
                                    @foreach($number2 as $num)
                                    <td class="angka">
                                      @foreach(str_split(strval($num->no_satu)) as $n)
                                      <span>{{$n}}</span>
                                      {{-- <img src="images/numbers/{{$n}}.png" alt="" style="height: 10px;"> --}}
                                      @endforeach
                                    </td>
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td>{{$day3}}</td>
                                    @foreach($number3 as $num)
                                    <td class="angka">
                                      @foreach(str_split(strval($num->no_satu)) as $n)
                                      <span>{{$n}}</span>
                                      {{-- <img src="images/numbers/{{$n}}.png" alt="" style="height: 10px;"> --}}
                                      @endforeach
                                    </td>
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td>{{$day4}}</td>
                                    @foreach($number4 as $num)
                                    <td class="angka">
                                      @foreach(str_split(strval($num->no_satu)) as $n)
                                      <span>{{$n}}</span>
                                      {{-- <img src="images/numbers/{{$n}}.png" alt="" style="height: 10px;"> --}}
                                      @endforeach
                                    </td>
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td>{{$day5}}</td>
                                    @foreach($number5 as $num)
                                    <td class="angka">
                                      @foreach(str_split(strval($num->no_satu)) as $n)
                                      <span>{{$n}}</span>
                                      {{-- <img src="images/numbers/{{$n}}.png" alt="" style="height: 10px;"> --}}
                                      @endforeach
                                    </td>
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td>{{$day6}}</td>
                                    @foreach($number6 as $num)
                                    <td class="angka">
                                      @foreach(str_split(strval($num->no_satu)) as $n)
                                      <span>{{$n}}</span>
                                      {{-- <img src="images/numbers/{{$n}}.png" alt="" style="height: 10px;"> --}}
                                      @endforeach
                                    </td>
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td>{{$day7}}</td>
                                    @foreach($number7 as $num)
                                    <td class="angka">
                                      @foreach(str_split(strval($num->no_satu)) as $n)
                                      <span>{{$n}}</span>
                                      {{-- <img src="images/numbers/{{$n}}.png" alt="" style="height: 10px;"> --}}
                                      @endforeach
                                    </td>
                                    @endforeach
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="check-number">
        {{-- <img class="bg-image" src="assets/images/result-background.jpg" alt=""> --}}
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="result-box">
                        <div class="result-list"">
                            <img src="img/bannerbesar.jpg" alt="" width="100%" height="auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========Newslater-Section========== -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-links">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-top-area">
                            <div class="left">
                                <a href="#">
                                    <img src="img/payment.png" alt="" width="300px" class="bg-white rounded">
                                </a>
                                <!--<a href="#">-->
                                <!--    <img src="assets/images/goole_play_btn.png" alt="">-->
                                <!--</a>-->
                            </div>
                            {{-- <div class="right">
                                <ul class="links">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQs</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms of Service</a>
                                    </li>a
                                    <li>
                                        <a href="#">Privacy</a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <hr class="hr2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="copyr-text">
                            <span>
                                Copyright © 2000.All Rights Reserved By
                            </span>
                            <a href="{{route('index')}}">{{config('app.name')}}</a>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <ul class="footer-social-links">
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========Newslater-Section========== -->
    <!-- All js link starts hear -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/bootstrap-popover-x.min.js"></script>
    <script src="assets/js/amd.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>