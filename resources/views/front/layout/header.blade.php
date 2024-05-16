<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from creativelayers.net/themes/luxride-html/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2024 10:18:11 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/front/assets/imgs/template/favicon.png') }}">
    <link href="{{ asset('front/assets/css/stylee209.css?v=1.0.0') }}" rel="stylesheet">
    <title>About - Multipurpose Startup SaaS HTML Template</title>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="page-loading">
            <div class="page-loading-inner">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <header class="header sticky-bar">
      <div class="container-sub">
        <div class="main-header">
          <div class="header-left">
            <div class="header-logo"><a class="d-flex" href="index.html"><img alt="Arter" src="assets/imgs/logo.png"></a></div>
            <div class="header-nav">
              <nav class="nav-main-menu d-none d-xl-block">
                <ul class="main-menu">
                  <li><a class="active" href="{{ route('index') }}">Home</a></li>
                  <li><a href="{{ route(app()->getLocale().'.about') }}">About</a></li>
                  <li><a href="fleet-list-4.html">Our Fleet</a></li>
                  <li><a href="{{ route(app()->getLocale().'.services') }}">Services</a></li>
                  <li><a href="{{ route(app()->getLocale().'.blogs') }}">Blog</a></li>
                  <li><a href="{{ route(app()->getLocale().'.contact') }}">Contact</a></li>
                </ul>
              </nav>
              <div class="burger-icon burger-icon-white"><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
            </div>
            <div class="header-right">
              <div class="box-button-login d-inline-block mr-10 align-middle"><a class="btn text-14-medium color-white hover-up" href="login.html">Log In</a></div>
              <div class="box-button-login d-none2 d-inline-block align-middle"><a class="btn btn-border hover-up" href="register.html">Sign Up</a></div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <div class="mobile-menu-wrap mobile-header-border">
              <nav class="mt-15">
                <ul class="mobile-menu font-heading">
                  <li><a class="active" href="{{ route('index') }}">Home</a></li>
                  <li><a href="{{ route(app()->getLocale().'.about') }}">About</a></li>
                  <li><a href="fleet-list-4.html">Our Fleet</a></li>
                  <li><a href="{{ route(app()->getLocale().'.services') }}">Services</a></li>
                  <li><a href="{{ route(app()->getLocale().'.blogs') }}">Blog</a></li>
                  <li><a href="{{ route(app()->getLocale().'.contact') }}">Contact</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="register.html">Sign Up</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>