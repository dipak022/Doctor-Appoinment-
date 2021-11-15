@extends('layouts.user.app')

@section('content')

@include('layouts.user.slider')











<section class="specialities">
<div class="container">
<div class="section-title text-center">
<h2>We are specialists in</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
</div>
<div class="row justify-content-center">
<div class="col-12 col-md-6 col-lg-3">
<div class="specialities-col">
<div class="card">
<a href="#" class="specialities-img">
<img src="{{ asset('user/')}}/assets/img/specialities/specialities-01.png" alt="">
</a>
<div class="card-body">
<div class="specialities-content">
<a href="#"><h5>Hardware Cosmetology</h5></a>
<p>Lorem ipsum dolor sit dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut. </p>
<a href="#" class="btn">Read More</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-3">
<div class="specialities-col">
<div class="card">
<a href="#" class="specialities-img">
<img src="{{ asset('user/')}}/assets/img/specialities/specialities-02.png" alt="">
</a>
<div class="card-body">
<div class="specialities-content">
<a href="#"><h5>Aesthetic Cosmetology</h5></a>
<p>Lorem ipsum dolor sit dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut. </p>
<a href="#" class="btn">Read More</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-3">
<div class="specialities-col">
<div class="card">
<a href="#" class="specialities-img">
<img src="{{ asset('user/')}}/assets/img/specialities/specialities-03.png" alt="">
</a>
<div class="card-body">
<div class="specialities-content">
<a href="#"><h5>Injection Cosmetology</h5></a>
<p>Lorem ipsum dolor sit dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut. </p>
<a href="#" class="btn">Read More</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-3">
<div class="specialities-col">
<div class="card">
<a href="#" class="specialities-img">
<img src="{{ asset('user/')}}/assets/img/specialities/specialities-04.png" alt="">
</a>
<div class="card-body">
<div class="specialities-content">
<a href="#"><h5>Laser Cosmetology</h5></a>
<p>Lorem ipsum dolor sit dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut. </p>
<a href="#" class="btn">Read More</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="our-service">
<div class="container">
<div class="row align-items-center">
<div class="col-12 col-lg-5">
<div class="left">
<h2>our services range</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
<a href="#" class="btn">View All</a>
</div>
</div>
<div class="col-12 col-lg-7">
<div class="right">
<div class="price-box">
<ul>
<li class="d-flex align-items-center">
<div class="left-col">
<h5>Makeup & Cosmetics</h5>
<p>Lorem ipsum dolor sit dolor amet, consectetur adipiscing elit eiusmod tempor incididunt ut. labore et dolore magna. </p>
</div>
<div class="right-col">
<h2>$35.00</h2>
</div>
</li>
<li class="d-flex align-items-center">
<div class="left-col">
<h5>perfumes</h5>
<p>Lorem ipsum dolor sit dolor amet, consectetur adipiscing elit eiusmod tempor incididunt ut. labore et dolore magna. </p>
</div>
<div class="right-col">
<h2>$42.00</h2>
</div>
</li>
<li class="d-flex align-items-center">
<div class="left-col">
<h5>Skincare</h5>
<p>Lorem ipsum dolor sit dolor amet, consectetur adipiscing elit eiusmod tempor incididunt ut. labore et dolore magna. </p>
</div>
<div class="right-col">
<h2>$18.00</h2>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="cosmetics-specialist">
<div class="container">
<div class="section-title text-center">
<h2>choose your cosmetics specialist</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
</div>
<div class="row justify-content-center">
<div class="col-12 col-md-6 col-lg-3">
<div class="specialities-col">
<div class="card">
<a href="doctor-profile.html" class="specialities-img">
<img src="{{ asset('user/')}}/assets/img/doctors/doctor-01.png" alt="">
</a>
<div class="card-body">
<div class="specialities-content">
<a href="doctor-profile.html"><h5>Eric Buckles</h5></a>
<p>MBBS, MDS - Cosmetics Surgeon</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(35)</span>
</div>
<a href="doctor-profile.html" class="booknow-btn">Book now</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-3">
<div class="specialities-col">
<div class="card">
<a href="doctor-profile.html" class="specialities-img">
<img src="{{ asset('user/')}}/assets/img/doctors/doctor-02.png" alt="">
</a>
<div class="card-body">
<div class="specialities-content">
<a href="doctor-profile.html"><h5>Lane Seay</h5></a>
<p>MBBS, MDS - Cosmetics Surgeon</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(35)</span>
</div>
<a href="doctor-profile.html" class="booknow-btn">Book now</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-3">
<div class="specialities-col">
<div class="card">
<a href="doctor-profile.html" class="specialities-img">
<img src="{{ asset('user/')}}/assets/img/doctors/doctor-03.png" alt="">
</a>
<div class="card-body">
<div class="specialities-content">
<a href="doctor-profile.html"><h5>Matthew Dodd</h5></a>
<p>MBBS, MDS - Cosmetics Surgeon</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(35)</span>
</div>
<a href="doctor-profile.html" class="booknow-btn">Book now</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-3">
<div class="specialities-col">
<div class="card">
<a href="doctor-profile.html" class="specialities-img">
<img src="{{ asset('user/')}}/assets/img/doctors/doctor-04.png" alt="">
</a>
<div class="card-body">
<div class="specialities-content">
<a href="doctor-profile.html"><h5>Carol Alba</h5></a>
<p>MBBS, MDS - Cosmetics Surgeon</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(35)</span>
</div>
<a href="doctor-profile.html" class="booknow-btn">Book now</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="news-letter">
<div class="container">
<div class="row">
<div class="col-12">
<div class="news-letter-col">
<div class="section-title pb-2">
<h2>Grab Our Newsletter</h2>
<p>To receive latest offers and discounts from the shop.</p>
</div>
<form>
<div class="d-flex align-items-center">
<div>
<input type="email" name="email" placeholder="Enter Your Email Address">
</div>
<div>
<input type="submit" value="subscribe">
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

@endsection


