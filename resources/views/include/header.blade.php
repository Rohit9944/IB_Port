<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="IBPortDash is a modern Transport & Logistics HTML template for shipping, freight, trucking, courier and supply-chain businesses. Clean, responsive design for logistics companies, warehousing, delivery services and transport operators.">
    <meta name="keywords"
        content="transport, logistics, shipping, freight, courier, supply chain, trucking, delivery, warehouse, cargo, transport company, responsive template">
    <meta name="author" content="theme-village">

    <title>IBPortDash</title>
    <link rel="apple-touch-icon" href="{{ asset('/assets/images/logo.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/assets/images/logo.svg') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
</head>

<body>

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3 z-3 shadow" style="z-index: 1060; max-width: 400px;" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <!-- search canvas -->
    <div class="search-popup offcanvas offcanvas-top" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-5 align-items-center position-relative">
            <button type="button" class="btn-close bg-primary rounded-5" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            <div class="col-lg-9 mx-auto">
                <form class="search-form w-100 mb-5">
                    <input id="search-form" type="text" class="form-control shadow-1"
                        placeholder="Type keyword and hit enter">
                </form>

            </div>
        </div>
    </div>

    <!-- Header Start -->
    <header class="header header-2">
        <div class="sticky-height"></div>
        <div class="header-wrapper">
            <div class="header-top m-0">

                <!-- Navigation Menu Start -->
                <div class="header-nav-wrapper header-sticky">
                    <nav class="navbar navbar-expand-xl p-0">
                        <div class="container ct-container bg-white rounded-0">

                            <!-- logo -->
                            <a href="/" class="navbar-brand">
                                <img src="{{asset('/assets/images/logo.svg')}}" alt="logo" class="img-fluid w-75">
                            </a>
                            <!-- menu btn -->
                            <button class="navbar-toggler offcanvas-nav-btn text-primary" type="button">
                                Menu <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" fill="none"
                                    viewBox="0 0 14 12">
                                    <path fill="#020e28"
                                        d="M0 .75Q.063.063.75 0h12.5q.687.063.75.75-.063.687-.75.75H.75Q.063 1.437 0 .75m0 5Q.063 5.063.75 5h12.5q.687.063.75.75-.063.687-.75.75H.75Q.063 6.437 0 5.75m13.25 5.75H.75q-.687-.063-.75-.75.063-.687.75-.75h12.5q.687.063.75.75-.063.687-.75.75" />
                                </svg>
                            </button>

                            <div class="nav-cta d-none d-md-flex  order-lg-3">
                                <div class="d-flex align-items-center justify-content-between gap-3">

                                  @auth
    <span class="fw-bold me-3">
        {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
    </span>

    <form method="POST" action="{{ route('logout') }}" class="d-inline">
        @csrf
        <button type="submit" class="btn border-0 bg-transparent  fw-bold p-0">
            Logout <i class="fa fa-arrow-right ms-1"></i>
        </button>
    </form>
@else
    <a href="{{ route('login') }}" class="btn btn-primary btn-hover">
        Login <i class="fa fa-arrow-right"></i>
    </a>

    <a href="{{ route('register') }}" class="signup btn-hover rounded-5">
        Sign Up <i class="fa fa-arrow-right"></i>
    </a>
@endauth

                                </div>
                            </div>
                            <div class="offcanvas offcanvas-start offcanvas-nav bg-info">
                                <div class="offcanvas-header">
                                    <a href="/" class="text-inverse"><img src="{{asset('/assets/images/logo.svg')}}"
                                            alt="Logo"></a>
                                    <button type="button" class="btn-close bg-primary" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>

                                <div class="offcanvas-body pt-0 align-items-center justify-content-between">
                                    <ul class="navbar-nav mx-auto align-items-lg-center">

                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('home') ? 'active text-info' : '' }}" href="{{ route('home') }}">
                                                Home
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('about') ? 'active text-info' : '' }}" href="{{ route('about') }}">
                                                About Us
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('services') ? 'active text-info' : '' }}" href="{{ route('services') }}">
                                                Services
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('tracker') ? 'active text-info' : '' }}" href="{{ route('tracker') }}">
                                                Tracker
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('blog') ? 'active text-info' : '' }}" href="{{ route('blog') }}">
                                                Blog
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('contact') ? 'active text-info' : '' }}" href="{{ route('contact') }}">
                                                Contact Us
                                            </a>
                                        </li>

                                    </ul>


                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

