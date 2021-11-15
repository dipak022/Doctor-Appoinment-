
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure-html.dreamguystech.com/cosmetics/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Nov 2021 18:28:41 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Doccure-Cosmetics</title>

<link type="image/x-icon" href="{{ asset('user/')}}/assets/img/favicon.png" rel="icon">

<link rel="stylesheet" href="{{ asset('user/')}}/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="{{ asset('user/')}}/assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="{{ asset('user/')}}/assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="{{ asset('user/')}}/assets/css/style.css">

<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<body>

<div class="main-wrapper">

<header class="header">
<nav class="navbar navbar-expand-lg header-nav">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<a href="index-2.html" class="navbar-brand logo">
<img src="{{ asset('user/')}}/assets/img/logo.png" class="img-fluid" alt="Logo">
</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="index-2.html" class="menu-logo">
<img src="{{ asset('user/')}}/assets/img/logo.png" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>
<ul class="main-nav">
<li class="active">
<a href="index-2.html">Home</a>
</li>
<li class="has-submenu">
<a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
<li><a href="appointments.html">Appointments</a></li>
<li><a href="schedule-timings.html">Schedule Timing</a></li>
<li><a href="my-patients.html">Patients List</a></li>
<li><a href="patient-profile.html">Patients Profile</a></li>
<li><a href="chat-doctor.html">Chat</a></li>
<li><a href="invoices.html">Invoices</a></li>
<li><a href="doctor-profile-settings.html">Profile Settings</a></li>
<li><a href="reviews.html">Reviews</a></li>
<li><a href="doctor-register.html">Doctor Register</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="#">Patients <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li class="has-submenu">
<a href="#">Doctors</a>
<ul class="submenu">
<li><a href="map-grid.html">Map Grid</a></li>
<li><a href="map-list.html">Map List</a></li>
</ul>
</li>
<li><a href="search.html">Search Doctor</a></li>
<li><a href="doctor-profile.html">Doctor Profile</a></li>
<li><a href="booking.html">Booking</a></li>
<li><a href="checkout.html">Checkout</a></li>
<li><a href="booking-success.html">Booking Success</a></li>
<li><a href="patient-dashboard.html">Patient Dashboard</a></li>
<li><a href="favourites.html">Favourites</a></li>
<li><a href="chat.html">Chat</a></li>
<li><a href="profile-settings.html">Profile Settings</a></li>
<li><a href="change-password.html">Change Password</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="voice-call.html">Voice Call</a></li>
<li><a href="video-call.html">Video Call</a></li>
<li><a href="search.html">Search Doctors</a></li>
<li><a href="calendar.html">Calendar</a></li>
<li><a href="components.html">Components</a></li>
 <li class="has-submenu">
<a href="invoices.html">Invoices</a>
<ul class="submenu">
<li><a href="invoices.html">Invoices</a></li>
<li><a href="invoice-view.html">Invoice View</a></li>
</ul>
</li>
<li><a href="blank-page.html">Starter Page</a></li>
<li><a href="about-us.html">About Us</a></li>
<li><a href="contact-us.html">Contact Us</a></li></li>
<li><a href="login.html">Login</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="forgot-password.html">Forgot Password</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="#">Blog <i class="fas fa-chevron-down"></i></a>
<ul class="submenu right-dropdown">
<li><a href="blog-list.html">Blog List</a></li>
<li><a href="blog-grid.html">Blog Grid</a></li>
<li><a href="blog-details.html">Blog Details</a></li>
</ul>
</li>
<li>
<a href="admin/index.html" target="_blank">Admin</a>
</li>
<li class="login-link">
<a href="login.html">Login / Signup</a>
</li>
</ul>
</div>
<ul class="nav header-navbar-rht">
<li class="nav-item">
<a class="nav-link header-login" href="login.html">login / Signup </a>
</li>
</ul>
</nav>
</header>



@yield('content')



<section class="address-section">
<div class="container">
<div class="row">
<div class="col-12 col-md-6">
<address class="m-0 d-flex align-items-center">
<span class="d-flex align-items-center justify-content-center map-icon">
<i class="fas fa-map-marker-alt"></i>
</span>
<span>
3556 Beech Street, San Francisco,<br>California, CA 94108
</span>
</address>
</div>
<div class="col-12 col-md-6">
<div class="social-links">
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</section>


<footer class="footer">

<div class="footer-top">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-about">
<div class="footer-logo">
<img src="{{ asset('user/')}}/assets/img/logo.png" alt="logo">
</div>
<div class="footer-about-content">
<div class="social-icon">
<ul>
<li>
<a href="#" target="_blank"><img src="{{ asset('user/')}}/assets/img/payment1.jpg" alt=""></a>
</li>
<li>
<a href="#" target="_blank"><img src="{{ asset('user/')}}/assets/img/payment2.jpg" alt=""></a>
</li>
<li>
<a href="#" target="_blank"><img src="{{ asset('user/')}}/assets/img/payment3.jpg" alt=""></a>
</li>
<li>
<a href="#" target="_blank"><img src="{{ asset('user/')}}/assets/img/payment4.jpg" alt=""></a>
</li>
</ul>
</div>
</div>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-menu">
<h2 class="footer-title">For Patients</h2>
<ul>
<li><a href="search.html">Search for Doctors</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="booking.html">Booking</a></li>
<li><a href="patient-dashboard.html">Patient Dashboard</a></li>
</ul>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-menu">
<h2 class="footer-title">For Doctors</h2>
<ul>
<li><a href="appointments.html">Appointments</a></li>
<li><a href="chat.html">Chat</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="doctor-register.html">Register</a></li>
<li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
</ul>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-menu">
<h2 class="footer-title">Sitemap</h2>
<ul>
<li><a href="blog.html">Blog</a></li>
<li><a href="chat.html">FAQs</a></li>
<li><a href="payment.html">Payment</a></li>
<li><a href="checkout.html">Shipment</a></li>
<li><a href="privacy-policy.html">Return policy</a></li>
</ul>
</div>

</div>
</div>
</div>
</div>


<div class="footer-bottom">
<div class="container-fluid">

<div class="copyright">
<div class="row">
<div class="col-md-6 col-lg-6">
<div class="copyright-text">
<p class="mb-0">&copy; 2020 Doccure. All rights reserved.</p>
</div>
</div>
<div class="col-md-6 col-lg-6">

<div class="copyright-menu">
<ul class="policy-menu">
<li><a href="term-condition.html">Terms and Conditions</a></li>
<li><a href="privacy-policy.html">Policy</a></li>
</ul>
</div>

</div>
</div>
</div>

</div>
</div>

</footer>

</div>


<script src="{{ asset('user/')}}/assets/js/jquery-3.6.0.min.js"></script>

<script src="{{ asset('user/')}}/assets/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('user/')}}/assets/js/slick.js"></script>

<script src="{{ asset('user/')}}/assets/js/script.js"></script>
</body>

<!-- Mirrored from doccure-html.dreamguystech.com/cosmetics/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Nov 2021 18:28:57 GMT -->
</html>