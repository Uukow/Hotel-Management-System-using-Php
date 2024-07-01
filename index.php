<!DOCTYPE html>
<html lang="en">

<head>
	<title>Hotel Management System</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Booking - Multipurpose Online Booking Theme">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/flatpickr/css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

<!-- Header START -->
<header class="navbar-light py-3">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container d-block">
			<div class="row align-items-center">
				<div class="col-4">
					<!-- Logo START -->
					<a class="navbar-brand" href="./index.php">
						<img class="light-mode-item navbar-brand-item d-inline h-40px h-md-60px" src="assets/images/hotel logo.png" alt="logo">
						<img class="dark-mode-item navbar-brand-item d-inline h-40px h-md-60px" src="assets/images/logo.png" alt="logo">
					</a>
					<!-- Logo END -->
				</div>

				<div class="col-8">
					<!-- Navbar top Right-->
					<div class="align-items-center justify-content-end d-none d-lg-flex">
						<ul class="nav border-bottom">
							<li class="dropdown nav-item">
								<a class="nav-link small pb-2" href="#" role="button" id="languageDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-globe fa-fw me-2"></i>Language</a>
								<ul class="dropdown-menu dropdown-animation dropdown-menu-end min-w-auto" aria-labelledby="languageDropdown">
									<li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/somalia.png" alt="">Somali</a> </li>
									<li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/uk.svg" alt="">English</a> </li>
									<li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/sp.svg" alt="">Arabic</a> </li>
									<li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/gr.svg" alt="">Deutsch</a> </li>
								</ul>
							</li>
							<li class="nav-item"> <a href="index.php" class="nav-link small pb-2"><i class="bi bi-briefcase me-2"></i>Home</a> </li>
							<li class="nav-item"> <a href="team.php" class="nav-link small pb-2"><i class="fa-solid fa-group-arrows-rotate"></i>Teams</a> </li>
							<li class="nav-item"> <a href="./Views/Login.php" class="nav-link small pb-2"><i class="far fa-user me-2"></i>Sign In or Login</a> </li>
							<!-- Dark mode option START -->
							<li class="nav-item dropdown">
								<button class="btn btn-link text-warning lh-3 p-0 mb-0" id="bd-theme"
								type="button"
								aria-expanded="false"
								data-bs-toggle="dropdown"
								data-bs-display="static">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-circle-half theme-icon-active fa-fw" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
									<use href="#"></use>
								</svg>
								</button>
			
								<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
									<li class="mb-1">
										<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
											<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
												<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
												<use href="#"></use>
											</svg>Light
										</button>
									</li>
									<li class="mb-1">
										<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
												<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
												<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
												<use href="#"></use>
											</svg>Dark
										</button>
									</li>
									<li>
										<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
												<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
												<use href="#"></use>
											</svg>Auto
										</button>
									</li>
								</ul>
							</li>
							<!-- Dark mode option END -->
						</ul>
					</div>	

					<div class="d-sm-flex align-items-center justify-content-end">
						<!-- Main navbar START -->
						
						<!-- Main navbar END -->

						<!-- Toggler button and stay button -->
						<div class="d-flex align-items-center justify-content-end">
							<!-- Responsive navbar toggler -->
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-animation">
									<span></span>
									<span></span>
									<span></span>
								</span>
								<span class="d-none d-sm-inline-block small">Menu</span>
							</button>
		
						</div>	
					</div>
				</div>
			</div>
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Main Banner START -->
<section class="py-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-11 mx-auto">
				<!-- Slider START -->
				<div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
					<div class="tiny-slider-inner" data-gutter="0" data-arrow="true" data-dots="false" data-items="1">
						<!-- Card item START -->
						<div class="card overflow-hidden h-400px h-sm-600px rounded-0" style="background-image:url(assets/images/category/hotel/06.jpg); background-position: center left; background-size: cover;">
							<!-- Background dark overlay -->
							<div class="bg-overlay bg-dark opacity-3"></div>
							<!-- Card image overlay -->
							<div class="card-img-overlay d-flex align-items-center"> 
								<div class="container">
									<div class="row">
										<div class="col-11 col-lg-7">
											<h6 class="text-white fw-normal mb-0">💖 Fall in love with the City</h6>
											<!-- Title -->
											<h1 class="text-white display-6">Modern Luxury In Manhattan</h1>
											<a href="#" class="btn btn-primary mb-0">Reserve Today</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->

						<!-- Card item START -->
						<div class="card overflow-hidden h-400px h-sm-600px bg-parallax text-center rounded-0"  data-jarallax-video="https://www.youtube.com/watch?v=j56YlCXuPFU">
							<!-- Background dark overlay -->
							<div class="bg-overlay bg-dark opacity-3"></div>
							<!-- Card image overlay -->
							<div class="card-img-overlay d-flex align-items-center"> 
								<div class="container w-100 my-auto">
									<div class="row justify-content-center">
										<div class="col-11 col-lg-8">	
											<!-- Title -->
											<h1 class="text-white">Taking luxury hospitality to new heights</h1>
											<a href="#" class="btn btn-dark mb-0">Take Me There</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->
					</div>
				</div>
				<!-- Slider END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Banner END -->
<!-- =======================
Best deal START -->
<section class="pb-2 pb-lg-5">
<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h3 class="mb-0">Special Offers</h3>
			</div>
		</div>
	<!-- <div class="container"> -->
		<!-- Slider START -->
		<div class="tiny-slider arrow-round arrow-blur arrow-hover">
			<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="2" data-dots="false" data-items-xl="3" data-items-lg="2" data-items-md="1">
				<!-- Slider item -->
				<div>
					<div class="card border rounded-3 overflow-hidden">
						<div class="row g-0 align-items-center">
							<!-- Image -->
							<div class="col-sm-6">
								<img src="assets/images/offer/01.jpg" class="card-img rounded-0" alt="">
							</div>

							<!-- Title and content -->
							<div class="col-sm-6">
								<div class="card-body px-3">
									<h6 class="card-title"><a href="hotel-details.php" class="stretched-link">Daily 50 Lucky Winners get a Free Stay</a></h6>
									<p class="mb-0">Valid till: 15 Nov</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider item -->
				<div>
					<div class="card border rounded-3 overflow-hidden">
						<div class="row g-0 align-items-center">
							<!-- Image -->
							<div class="col-sm-6">
								<img src="assets/images/offer/04.jpg" class="card-img rounded-0" alt="">
							</div>

							<!-- Title and content -->
							<div class="col-sm-6">
								<div class="card-body px-3">
									<h6 class="card-title"><a href="hotel-details.php" class="stretched-link">Up to 60% OFF</a></h6>
									<p class="mb-0">On Hotel Bookings Online</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider item -->
				<div>
					<div class="card border rounded-3 overflow-hidden">
						<div class="row g-0 align-items-center">
							<!-- Image -->
							<div class="col-sm-6">
								<img src="assets/images/offer/03.jpg" class="card-img rounded-0" alt="">
							</div>

							<!-- Title and content -->
							<div class="col-sm-6">
								<div class="card-body px-3">
									<h6 class="card-title"><a href="hotel-details.php" class="stretched-link">Book & Enjoy</a></h6>
									<p class="mb-0">20% Off on the best available room rate</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider item -->
				<div>
					<div class="card border rounded-3 overflow-hidden">
						<div class="row g-0 align-items-center">
							<!-- Image -->
							<div class="col-sm-6">
								<img src="assets/images/offer/02.jpg" class="card-img rounded-0" alt="">
							</div>

							<!-- Title and content -->
							<div class="col-sm-6">
								<div class="card-body px-3">
									<h6 class="card-title"><a href="hotel-details.php" class="stretched-link">Hot Summer Nights</a></h6>
									<p class="mb-0">Up to 3 nights free!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- Slider END -->
	</div>
</section>
<!-- =======================
Best deal END -->


<!-- =======================
About START -->
<section class="py-0 py-lg-7">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12">
				<h2>We always provide the best for our hotel visitors. We are happy to help you.</h2>
				<p class="mb-0">We focus a great deal on the understanding of behavioral psychology and influence triggers which are crucial for becoming a well-rounded Digital Marketer. We understand that theory is important to build a solid foundation, we understand that theory alone isn't going to get the job done.</p>
			</div>
		</div>

		<!-- Counters and features START -->
		<div class="row g-4">
			<!-- Counter -->
			<div class="col-xl-4">
				<div class="card card-body bg-primary bg-opacity-10 vstack gap-4 justify-content-center h-100 p-4">
					<!-- Counter item -->
					<div class="d-flex justify-content-between align-items-center">
						<h3 class="purecounter text-primary mb-0" data-purecounter-start="0" data-purecounter-end="10"	data-purecounter-delay="200">0</h3>
						<h6 class="fw-normal mb-0">Total Hotels</h6>
					</div>

					<!-- Counter item -->
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex justify-content-center me-3">
							<h3 class="purecounter text-primary mb-0" data-purecounter-start="0" data-purecounter-end="200"	data-purecounter-delay="300">0</h3>
							<span class="h3 text-primary mb-0">+</span>
						</div>
						<h6 class="fw-normal mb-0">Total Staff</h6>
					</div>

					<!-- Counter item -->
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex justify-content-center me-3">
							<h3 class="purecounter text-primary mb-0" data-purecounter-start="0" data-purecounter-end="50"	data-purecounter-delay="300">0</h3>
							<span class="h3 text-primary mb-0">+</span>
						</div>
						<h6 class="fw-normal mb-0">Amazing Services</h6>
					</div>

				</div>
			</div>

			<!-- Location -->
			<div class="col-md-6 col-xl-4">
				<div class="card  overflow-hidden">
					<!-- Image -->
					<img src="assets/images/about/07.jpg" class="rounded-3" alt="">
					<!-- Full screen button -->
					<div class="w-100 h-100">
						<button class="btn btn-dark position-absolute top-50 start-50 translate-middle mb-0" data-bs-toggle="modal" data-bs-target="#map360">
							<i class="bi bi-eye me-2"></i>View 360
						</button>
					</div>
				</div>
			</div>

			<!-- Features -->
			<div class="col-md-6 col-xl-4">
				<ul class="list-group list-group-borderless">
					<li class="list-group-item py-3">
						<h6 class="mb-0 fw-normal">
							<i class="bi bi-cash-coin fa-fw text-info me-2"></i>Best Rate Guaranteed
						</h6>
					</li>

					<li class="list-group-item py-3">
						<h6 class="mb-0 fw-normal">
							<i class="bi bi-credit-card-2-back fa-fw text-warning me-2"></i>Payment at Hotel
						</h6>
					</li>

					<li class="list-group-item py-3">
						<h6 class="mb-0 fw-normal">
							<i class="bi bi-wallet fa-fw text-success me-2"></i>Exclusive Members Rewards
						</h6>
					</li>

					<li class="list-group-item py-3">
						<h6 class="mb-0 fw-normal">
							<i class="bi bi-wifi fa-fw text-danger me-2"></i>WIFI Access
						</h6>
					</li>

					<li class="list-group-item pt-3 pb-0">
						<h6 class="mb-0 fw-normal">
							<i class="bi bi-tags fa-fw text-orange me-2"></i>No Hidden Changes
						</h6>
					</li>
				</ul>

			</div>
		</div>
		<!-- Counters and features END -->
	</div>
</section>
<!-- =======================
About END -->

<!-- =======================
Near by START -->
<section>
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h2 class="mb-0">Explore Nearby</h2>
			</div>
		</div>

		<div class="row g-4 g-md-5">
			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/01.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Mogadishu</a></h5>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/02.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Hargaysa</a></h5>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/03.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Baydhaba</a></h5>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/04.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Kismaayo</a></h5>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/05.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Dhuusamareeb</a></h5>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/06.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Garoowe</a></h5>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/07.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Marka</a></h5>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/08.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Awdheegle</a></h5>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/09.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Afgooye</a></h5>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/10.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Baraawe</a></h5>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/11.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Gaalkacyo</a></h5>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/01.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Boorama</a></h5>
					</div>
				</div>
			</div>
			<!-- Card item END -->
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Near by END -->
<!-- =======================
Featured Hotels START -->
<section>
	<div class="container">

		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h2 class="mb-0">Book Our Room</h2>
			</div>
		</div>

		<div class="row g-4">
			<!-- Hotel item -->
			<div class="col-sm-6 col-xl-3">
				<!-- Card START -->
				<div class="card card-img-scale overflow-hidden bg-transparent">
					<!-- Image and overlay -->
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="assets/images/category/hotel/01.jpg" class="card-img" alt="hotel image">
						<!-- Badge -->
						<div class="position-absolute bottom-0 start-0 p-3">
							<div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="bi bi-geo-alt me-2"></i>Mogadishu</div>
						</div>
					</div>

					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Title -->
						<h5 class="card-title"><a href="hotel-details.php" class="stretched-link">GUEST ROOMS</a></h5>
						<!-- Price and rating -->
						<div class="d-flex justify-content-between align-items-center">
							<h6 class="text-success mb-0">$455 <small class="fw-light">/starting at</small> </h6>
							<h6 class="mb-0">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
						</div>
					</div>
				</div>
				<!-- Card END -->
			</div>

			<!-- Hotel item -->
			<div class="col-sm-6 col-xl-3">
				<!-- Card START -->
				<div class="card card-img-scale overflow-hidden bg-transparent">
					<!-- Image and overlay -->
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="assets/images/category/hotel/02.jpg" class="card-img" alt="hotel image">
						<!-- Badge -->
						<div class="position-absolute bottom-0 start-0 p-3">
							<div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="bi bi-geo-alt me-2"></i>Mogadishu</div>
						</div>
					</div>

					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Title -->
						<h5 class="card-title"><a href="./hotel-details.php" class="stretched-link">Supperior Room</a></h5>
						<!-- Price and rating -->
						<div class="d-flex justify-content-between align-items-center">
							<h6 class="text-success mb-0">$585 <small class="fw-light">/starting at</small> </h6>
							<h6 class="mb-0">4.8<i class="fa-solid fa-star text-warning ms-1"></i></h6>
						</div>
					</div>
				</div>
				<!-- Card END -->
			</div>

			<!-- Hotel item -->
			<div class="col-sm-6 col-xl-3">
				<!-- Card START -->
				<div class="card card-img-scale overflow-hidden bg-transparent">
					<!-- Image and overlay -->
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="assets/images/category/hotel/03.jpg" class="card-img" alt="hotel image">
						<!-- Badge -->
						<div class="position-absolute bottom-0 start-0 p-3">
							<div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="bi bi-geo-alt me-2"></i>Mogadishu</div>
						</div>
					</div>

					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Title -->
						<h5 class="card-title"><a href="./hotel-details.php" class="stretched-link">Single Room</a></h5>
						<!-- Price and rating -->
						<div class="d-flex justify-content-between align-items-center">
							<h6 class="text-success mb-0">$385 <small class="fw-light">/starting at</small> </h6>
							<h6 class="mb-0">4.6<i class="fa-solid fa-star text-warning ms-1"></i></h6><br>
						</div>
                        
					</div>
				</div>
				<!-- Card END -->
			</div>

			<!-- Hotel item -->
			<div class="col-sm-6 col-xl-3">
				<!-- Card START -->
				<div class="card card-img-scale overflow-hidden bg-transparent">
					<!-- Image and overlay -->
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="assets/images/category/hotel/04.jpg" class="card-img" alt="hotel image">
						<!-- Badge -->
						<div class="position-absolute bottom-0 start-0 p-3">
							<div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="bi bi-geo-alt me-2"></i>Mogadishu</div>
						</div>
					</div>

					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Title -->
						<h5 class="card-title"><a href="hotel-details.php" class="stretched-link">Deluxe</a></h5>
						<!-- Price and rating -->
						<div class="d-flex justify-content-between align-items-center">
							<h6 class="text-success mb-0">$665 <small class="fw-light">/starting at</small> </h6>
							<h6 class="mb-0">4.8<i class="fa-solid fa-star text-warning ms-1"></i></h6>
						</div>
					</div>
				</div>
				<!-- Card END -->
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Featured Hotels END -->
<!-- =======================
Services START -->
<section class="pt-0 pt-lg-5">
	<div class="container">
		<div class="row g-4 align-items-center">
			<div class="col-lg-6">
				<!-- Title -->
				<h2>We Provide Our Best Facilities For You</h2>
				<p>Book your hotel with us and don't forget to grab an awesome hotel deal to save massive on your stay.</p>
				<!-- Button -->
				<a href="#" class="btn btn-dark mb-4">Contact Us</a>
				<!-- Services -->
				<div class="row g-sm-4">
					<div class="col-sm-6">
						<ul class="list-group list-group-borderless mt-2 mb-0">
							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-wifi fa-fw text-primary me-2"></i>Free Wifi</h6>
							</li>

							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-person-swimming fa-fw text-primary me-2"></i>Swimming Pool</h6>
							</li>

							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-person-shelter fa-fw text-primary me-2"></i>Private Workshop</h6>
							</li>

							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-utensils fa-fw text-primary me-2"></i>Breakfast</h6>
							</li>
						</ul>
					</div>

					<div class="col-sm-6">
						<ul class="list-group list-group-borderless">
							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-bolt fa-fw text-primary me-2"></i>Free Electricity</h6>
							</li>

							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-dumbbell fa-fw text-primary me-2"></i>Gym Space</h6>
							</li>

							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-spa fa-fw text-primary me-2"></i>Spa</h6>
							</li>

							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><a href="#"><i class="fa-solid fa-ellipsis fa-fw text-primary me-2"></i>Other Services</a></h6>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="bg-light rounded-3 h-100 p-4">
					<!-- Slider START -->
					<div class="tiny-slider arrow-round arrow-blur">
						<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="2" data-dots="false" data-items-xl="1" data-items-md="1">
							
							<!-- Card START -->
							<div class="card bg-transparent">
								<div class="row g-4 align-items-center">
									<div class="col-sm-6">
										<img src="assets/images/category/flight/02.jpg" class="img-fluid card-img" alt="...">
									</div>
									<div class="col-sm-6">
										<div class="card-body p-0">
											<h6 class="fw-normal mb-3">Honeymoon Sweets</h6>
											<h4 class="card-title mb-3"><a href="#" class="stretched-link">Afgooye Sunshine Hotel</a></h4>
											<a href="#" class="btn btn-link p-0">Explore Now <i class="bi bi-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card END -->

							<!-- Card START -->
							<div class="card bg-transparent">
								<div class="row g-4 align-items-center">
									<div class="col-sm-6">
										<img src="assets/images/category/flight/01.jpg" class="img-fluid card-img" alt="...">
									</div>
									<div class="col-sm-6">
										<div class="card-body p-0">
											<h6 class="fw-normal mb-3">Royal Stay</h6>
											<h4 class="card-title mb-3"><a href="#" class="stretched-link">Booking Grad Palace Mogadishu</a></h4>
											<a href="#" class="btn btn-link p-0">Explore Now <i class="bi bi-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card END -->

							<!-- Card START -->
							<div class="card bg-transparent">
								<div class="row g-4 align-items-center">
									<div class="col-sm-6">
										<img src="assets/images/category/flight/03.jpg" class="img-fluid card-img" alt="...">
									</div>
									<div class="col-sm-6">
										<div class="card-body p-0">
											<h6 class="fw-normal mb-3">Adventure Stay</h6>
											<h4 class="card-title mb-3"><a href="#" class="stretched-link">Golf & Spa Resort in Awdheegle</a></h4>
											<a href="#" class="btn btn-link p-0">Explore Now <i class="bi bi-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card END -->
						</div>
					</div>	
					<!-- Slider END -->
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Services END -->

<!-- =======================
Action box START -->
<section class="py-0 py-md-5">
	<div class="container">
		<div class="position-relative rounded-3 overflow-hidden p-3 p-sm-5" style="background-image:url(assets/images/about/08.jpg); background-position: center left; background-size: cover;">
			<div class="row position-relative z-index-9">
				<div class="col-md-7 col-xl-5 ms-auto">
					<div class="card card-body p-sm-5">
						<div class="d-sm-flex justify-content-between align-items-center mb-2">
							<h6 class="text-primary mb-0">Exclusive Offer</h6>
							<!-- Rating -->
							<ul class="list-inline small mb-0">
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item"><i class="fa-solid fa-star text-warning"></i></li>
							</ul>
						</div>
						<!-- Title -->
						<h5>Enjoy Your Dream Vacation In Switzerland</h5>
						<p class="mb-3">Book your hotel with us and don't forget to grab an awesome hotel deal to save massive on your stay.</p>

						<!-- Price -->
						<h6 class="fw-normal mb-1">2 Days / 3 Nights</h6>
						<div class="d-flex align-items-center">
							<h5 class="text-success mb-0 me-1">$750</h5>
							<span class="mb-0 me-2">/day</span>
							<span class="text-decoration-line-through">$1000</span>
						</div>
							<!-- Button -->
							<a href="#" class="btn btn-primary-soft mb-0 mt-3">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Action box END -->

<!-- =======================
Gallery START -->
<section>
	<div class="container-fluid">
		<!-- Title -->
		<div class="row mb-md-4">
			<div class="col-12 mx-auto text-center mb-4">
				<h2 class="mb-0">Our Hotel Precious Moments</h2>
			</div>
		</div>

			<!-- Slider START -->
			<div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
				<div class="tiny-slider-inner d-flex align-items-end" data-autoplay="true" data-edge="2" data-arrow="true" data-dots="false" data-items="6" data-items-lg="4" data-items-sm="2">
					<!-- Slider item -->
					<div>
						<a data-glightbox="" data-gallery="gallery" href="assets/images/category/hotel/gallery/01.jpg">
							<div class="card card-element-hover card-overlay-hover overflow-hidden">
								<!-- Image -->
								<img src="assets/images/category/hotel/gallery/01.jpg" class="rounded-3" alt="">
								<!-- Full screen button -->
								<div class="hover-element w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>
					</div>

					<!-- Slider item -->
					<div>
						<a data-glightbox="" data-gallery="gallery" href="assets/images/category/hotel/gallery/02.jpg">
							<div class="card card-element-hover card-overlay-hover overflow-hidden">
								<!-- Image -->
								<img src="assets/images/category/hotel/gallery/02.jpg" class="rounded-3" alt="">
								<!-- Full screen button -->
								<div class="hover-element w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>
					</div>

					<!-- Slider item -->
					<div>
						<a data-glightbox="" data-gallery="gallery" href="assets/images/category/hotel/gallery/03.jpg">
							<div class="card card-element-hover card-overlay-hover overflow-hidden">
								<!-- Image -->
								<img src="assets/images/category/hotel/gallery/03.jpg" class="rounded-3" alt="">
								<!-- Full screen button -->
								<div class="hover-element w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>
					</div>

					<!-- Slider item -->
					<div>
						<a data-glightbox="" data-gallery="gallery" href="assets/images/category/hotel/gallery/05.jpg">
							<div class="card card-element-hover card-overlay-hover overflow-hidden">
								<!-- Image -->
								<img src="assets/images/category/hotel/gallery/05.jpg" class="rounded-3" alt="">
								<!-- Full screen button -->
								<div class="hover-element w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>
					</div>

					<!-- Slider item -->
					<div>
						<a data-glightbox="" data-gallery="gallery" href="assets/images/category/hotel/gallery/08.jpg">
							<div class="card card-element-hover card-overlay-hover overflow-hidden">
								<!-- Image -->
								<img src="assets/images/category/hotel/gallery/08.jpg" class="rounded-3" alt="">
								<!-- Full screen button -->
								<div class="hover-element w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>
					</div>

					<!-- Slider item -->
					<div>
						<a data-glightbox="" data-gallery="gallery" href="https://www.youtube.com/embed/tXHviS-4ygo">
							<div class="card card-element-hover card-overlay-hover overflow-hidden">
								<!-- Image -->
								<img src="assets/images/category/hotel/gallery/04.jpg" class="rounded-3" alt="">
								<!-- Full screen button -->
								<div class="hover-element w-100 h-100">
									<span class="btn text-danger btn-round btn-white position-absolute top-50 start-50 translate-middle mb-0">
										<i class="fas fa-play"></i>
									</span>
								</div>
							</div>
						</a>
					</div>

					<!-- Slider item -->
					<div>
						<a data-glightbox="" data-gallery="gallery" href="assets/images/category/hotel/gallery/06.jpg">
							<div class="card card-element-hover card-overlay-hover overflow-hidden">
								<!-- Image -->
								<img src="assets/images/category/hotel/gallery/06.jpg" class="rounded-3" alt="">
								<!-- Full screen button -->
								<div class="hover-element w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>
					</div>

					<!-- Slider item -->
					<div>
						<a data-glightbox="" data-gallery="gallery" href="assets/images/category/hotel/gallery/07.jpg">
							<div class="card card-element-hover card-overlay-hover overflow-hidden">
								<!-- Image -->
								<img src="assets/images/category/hotel/gallery/07.jpg" class="rounded-3" alt="">
								<!-- Full screen button -->
								<div class="hover-element w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>			
		<!-- Slider END	 -->

        <!-- register  -->
        <div class="modal" tabindex="-1" id="CustomerModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Customer Registration</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <form id="customerForm">
                                <input type="hidden" name="update_id" id="update_id">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div id="alert-success" class="alert alert-success d-none" role="alert"></div>
                                        <div id="alert-danger" class="alert alert-danger d-none" role="alert"></div>

                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <select name="cTitle" id="cTitle" class="form-control">
                                                <option value="Dr">
                                                    Dr
                                                </option>
                                                <option value="Mr">
                                                    Mr
                                                </option>
                                                <option value="Miss">
                                                    Miss
                                                </option>
                                                <option value="prof">
                                                    Prof.
                                                </option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Full Name</label>
                                        </div>
                                        <input type="text" name="cName" id="cName" class="form-control" value="" required>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" name="cEmail" id="cEmail" class="form-control" value="" required>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select id="country" name="country" class="form-control">
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>


                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text" name="cPhone" id="cPhone" class="form-control" value="" required>
                                        </div>
                                    </div>


                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Type Of Room</label>
                                            <select name="cTypeRoom" id="cTypeRoom" class="form-control">
                                                <option value="Superior Room">
                                                Superior Room
                                                </option>
                                                <option value="Single Room">
                                                Single Room
                                                </option>
                                                </option>
                                                <option value="Deluxe Room">
                                                Deluxe Room
                                                </option>
                                                </option>
                                                <option value="Guest House">
                                                Guest House
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Bedding Type</label>
                                            <select name="cBedding" id="cBedding" class="form-control">
                                                <option value="Single">
                                                Single
                                                </option>
                                                <option value="Double">
                                                Double
                                                </option>
                                                </option>
                                                <option value="Triple">
                                                Triple
                                                </option>
                                                </option>
                                                <option value="Quad">
                                                Quad
                                                </option>
                                                <option value="None">
                                                None
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">No.of Rooms</label>
                                            <input type="number" name="cNumRoom" id="cNumRoom" class="form-control" value="" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Meal Plan</label>
                                            <select name="cMeal" id="cMeal" class="form-control">
                                                <option value="Room Only">
                                                    Room Only
                                                </option>
                                                <option value="Breakfast">
                                                    Breakfast
                                                </option>
                                                <option value="Halfboard">
                                                    Half Board
                                                </option>
                                                <option value="Full Board">
                                                    Full Board
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Check in</label>
                                        </div>
                                        <input type="date" name="cIn" id="cIn" class="form-control" value="" required>
                                    </div>
                                    

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Check Out</label>
                                        </div>
                                        <input type="date" name="cOut" id="cOut" class="form-control" value="" required>
                                    </div>



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                            </form>



                        </div>
                    </div>
                </div>


            </div> <!-- container -->

	</div>
</section>
<!-- =======================
Gallery END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="pt-5" style="background-color: darkblue;">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4">

			<!-- Widget 1 START -->
			<div class="col-lg-3">
				<!-- logo -->
				<a href="index.php">
					<img class="h-80px" src="assets/images/logo.png" alt="logo">
				</a>
				<p class="my-3 text-body-secondary">Departure defective arranging rapturous did believe him all had supported.</p>
				<p class="mb-2"><a href="#" class="text-body-secondary text-primary-hover"><i class="bi bi-telephone me-2"></i>+252 615 031623</a> </p>
				<p class="mb-0"><a href="#" class="text-body-secondary text-primary-hover"><i class="bi bi-envelope me-2"></i>Abdulkadiruukow@gmail.com</a></p>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-8 ms-auto">
				<div class="row g-4">
					<!-- Link block -->
					<div class="col-6 col-md-3">
						<h5 class="text-white mb-2 mb-md-4">Page</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">About us</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Contact us</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">News and Blog</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Meet a Team</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-3">
						<h5 class="text-white mb-2 mb-md-4">Link</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Sign up</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Sign in</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Privacy Policy</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Terms</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Cookie</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Support</a></li>
						</ul>
					</div>
									
					<!-- Link block -->
					<div class="col-6 col-md-3">
						<h5 class="text-white mb-2 mb-md-4">Global Site</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Mogadishu</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Afgooye</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Awdheegle</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Marka</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Baraawe</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-3">
						<h5 class="text-white mb-2 mb-md-4">Booking</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#"><i class="fa-solid fa-hotel me-2"></i>Hotel</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#"><i class="fa-solid fa-plane me-2"></i>Flight</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#"><i class="fa-solid fa-globe-americas me-2"></i>Tour</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#"><i class="fa-solid fa-car me-2"></i>Cabs</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Widget 2 END -->

		</div><!-- Row END -->

		<!-- Tops Links -->
		<!-- <div class="row mt-5">
			<h5 class="mb-2 text-white">Top Links</h5>
			<ul class="list-inline text-primary-hover lh-lg">
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Flights</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Hotels</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Tours</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Cabs</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">About</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Contact us</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Blogs</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Services</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Detail page</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Services</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Policy</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Testimonials</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Newsletters</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Podcasts</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Protests</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">NewsCyber</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Education</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Sports</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Tech and Auto</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Opinion</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Share Market</a></li>
			</ul>
		</div> -->

		<!-- Payment and card -->
		<div class="row g-4 justify-content-between mt-0 mt-md-2">

			<!-- Payment card -->
			<div class="col-sm-7 col-md-6 col-lg-4">
				<h5 class="text-white mb-2">Payment & Security</h5>
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <a href="#"><img src="assets/images/element/paypal.svg" class="h-30px" alt=""></a></li>
					<li class="list-inline-item"> <a href="#"><img src="assets/images/element/visa.svg" class="h-30px" alt=""></a></li>
					<li class="list-inline-item"> <a href="#"><img src="assets/images/element/mastercard.svg" class="h-30px" alt=""></a></li>
					<li class="list-inline-item"> <a href="#"><img src="assets/images/element/expresscard.svg" class="h-30px" alt=""></a></li>
				</ul>
			</div>

			<!-- Social media icon -->
			<div class="col-sm-5 col-md-6 col-lg-3 text-sm-end">
				<h5 class="text-white mb-2">Follow us on</h5>
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <a class="btn btn-sm px-2 bg-facebook mb-0" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-instagram mb-0" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-twitter mb-0" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-linkedin mb-0" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
				</ul>	
			</div>
		</div>

		<!-- Divider -->
		<hr class="mt-4 mb-0">

		<!-- Bottom footer -->
		<div class="row">
			<div class="container">
				<div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-lg-start">
					<!-- copyright text -->
					<div class="text-body-secondary text-primary-hover"> Copyrights ©2023 Hotel Management System. Build by <a href="#" class="text-body-secondary">Group 6 Class CA202</a>. </div>
					<!-- copyright links-->
					<div class="nav mt-2 mt-lg-0">
						<ul class="list-inline text-primary-hover mx-auto mb-0">
							<li class="list-inline-item me-0"><a class="nav-link text-body-secondary py-1" href="#">Privacy policy</a></li>
							<li class="list-inline-item me-0"><a class="nav-link text-body-secondary py-1" href="#">Terms and conditions</a></li>
							<li class="list-inline-item me-0"><a class="nav-link text-body-secondary py-1 pe-0" href="#">Refund policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Modal START -->
<div class="modal fade" id="map360" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Title -->
			<div class="modal-header">
				<h5 class="modal-title" id="map360label">Hotel 360 View</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<!-- Body -->
			<div class="modal-body p-3">
				<iframe src="https://www.google.com/maps/embed?pb=!4v1664190302197!6m8!1m7!1sgWjBbRwH2wMmQTbvyZwkGw!2m2!1d51.49712857925994!2d-0.1593322776188391!3f348.1837813715552!4f17.07463868756892!5f0.8485845663286693" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</div>
<!-- Modal END -->

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.js"></script>
<script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
<script src="assets/vendor/choices/js/choices.min.js"></script>
<script src="assets/vendor/jarallax/jarallax.min.js"></script>
	<script src="assets/vendor/jarallax/jarallax-video.min.js"></script>

<!-- ThemeFunctions -->
<script src="assets/js/functions.js"></script>
<script src="./js/Customer.js"></script>

</body>

<!-- Mirrored from booking.webestica.com/index-hotel-chain.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2023 07:36:02 GMT -->
</html>