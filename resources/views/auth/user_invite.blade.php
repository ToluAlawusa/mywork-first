<!doctype html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Mywork - ERP Solution</title>

<link rel="shortcut icon" href="images/MW_Color.png" />

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;Raleway:300,400,500,600,700,800,900" rel="stylesheet">

<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('front/css/owl-carousel/owl.carousel.css')}}" />

<link rel="stylesheet" href="{{asset('front/css/font-awesome.css')}}" />

<link rel="stylesheet" href="{{asset('front/css/magnific-popup/magnific-popup.css')}}" />

<link href="{{asset('front/css/mediaelementplayer.min.css')}}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="{{asset('front/css/animate.css')}}" />

<link rel="stylesheet" href="{{asset('front/css/ionicons.min.css')}}">

<link rel="stylesheet" href="{{asset('front/css/style.css')}}">

<link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">

<link rel="stylesheet" href="{{asset('front/css/custom.css')}}" />

<link rel="stylesheet" href="javascript:void(0)" data-style="styles">
<link rel="stylesheet" href="{{asset('front/css/style-customizer.css')}}" />
</head>
<body data-spy="scroll" data-offset="80">

<div id="loading">
<div id="loading-center">
<div class="loader">
<div class="cube">
<div class="sides">
<div class="top"></div>
<div class="right"></div>
<div class="bottom"></div>
<div class="left"></div>
<div class="front"></div>
<div class="back"></div>
</div>
</div>
</div>
</div>
</div>


<header id="main-header">
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<nav class="navbar navbar-expand-lg navbar-light">
<a class="navbar-brand" href="index.html">
<img class="img-fluid" src="{{asset('front/images/MW_White.png')}}" alt="#">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="ion-navicon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto w-100 justify-content-end">
<li class="nav-item">
<a class="nav-link active" href="#iq-home">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#how-it-works">About</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#software-features">Service</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#great-screenshots">Screenshots</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#pricing">Pricing</a>
 </li>
<!-- <li class="nav-item">
<a class="nav-link" href="#team">Team</a>
</li> -->
<!-- <li class="nav-item">
<a class="nav-link" href="#blog">Blog</a>
</li> -->
<li class="nav-item">
<a class="nav-link" href="#demo">Contact</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{url('login')}}">Login</a>
</li>
</ul>
<a href="#demo" class="button bt-black pull-right">Demo</a>
</div>
</nav>
</div>
</div>
</div>
</header>
 @include('sweetalert::alert')





<section id="iq-home" class="iq-banner overview-block-pt iq-bg-over iq-over-blue-90 jarallax" data-jarallax-video="m4v:./video/01.m4v,webm:./video/01.webm,ogv:./video/01.ogv">
<div class="container-fluid">
<div class="banner-text">
<div class="row">
<div class="col-lg-6">


        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Accept Invite') }}</div>

                    <div class="card-body">

                        <?php
                            $url = explode('/',url()->current());
                        ?>
                         <form method="POST" action="{{url('user_invite/'.$url[4].'/'.$url[5])}}">
                        @csrf

                        <div class="form-group row">
                            <label for="first-name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group row">
                            <label for="last-name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Accept Invite') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>


<div class="waves-box">
<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="iq-video popup-youtube"><i class="ion-ios-play-outline"></i></a>
<div class="iq-waves">
<div class="waves wave-1"></div>
<div class="waves wave-2"></div>
<div class="waves wave-3"></div>
</div>
</div>
</div>
<div class="col-lg-6">
<img class="banner-img" src="{{asset('front/images/banner/01.png')}}" alt="">
</div>
</div>
</div>
</div>
<div class="banner-objects">
<span class="banner-objects-01" data-bottom="transform:translatey(50px)" data-top="transform:translatey(-50px);">
<img src="{{asset('front/images/drive/03.png')}}" alt="drive02">
</span>
<span class="banner-objects-02 iq-fadebounce">
<span class="iq-round"></span>
</span>
<span class="banner-objects-03 iq-fadebounce">
<span class="iq-round"></span>
</span>
</div>
</section>


<div class="main-content">





</div>





<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/popper.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>

<script src="{{asset('front/js/main.js')}}"></script>

<script src='www.google.com/recaptcha/api.js'></script>

<script src="{{asset('front/js/custom.js')}}"></script>

<script src="{{asset('front/js/style-customizer.js')}}"></script>
</body>
</html>
