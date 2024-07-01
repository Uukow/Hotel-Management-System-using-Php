<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from booking.webestica.com/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2023 07:37:22 GMT -->
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
	<link rel="shortcut icon" href="./assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="./assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/vendor/bootstrap-icons/bootstrap-icons.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">

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
Main banner START -->
<section class="pt-4 pt-md-5">
	<div class="container">
		<div class="row g-4 justify-content-between">
			<!-- Title -->
			<div class="col-lg-7 col-xl-8">
				<h1 class="mb-4">Meet And Work With Our Amazing
					<span class="position-relative z-index-9">Hotel Management System
						<!-- SVG START -->
						<span class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-sm-block mt-4">
							<svg width="390.5px" height="21.5px" viewBox="0 0 445.5 21.5">
								<path class="fill-primary opacity-7" d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z"></path>
							</svg>
						</span>
						<!-- SVG END -->
					</span>
				</h1>
				<p class="lead mb-0">After working One Months the result is success thank You for Allah then Thanks every One Of the team</p>
			</div>

			<!-- Rating -->
			<div class="col-lg-4 col-xl-3">
				<div class="card card-body shadow p-4">
					<h6 class="text-primary fw-normal mb-3">20,000 Happy Clients</h6>

					<div class="d-flex justify-content-between align-items-center">
						<!-- Avatar list -->
						<ul class="avatar-group mb-0">
							<li class="avatar avatar-sm">
								<img class="avatar-img rounded-circle border border-white" src="./assets/images/avatar/01.jpg" alt="avatar">
							</li>
							<li class="avatar avatar-sm">
								<img class="avatar-img rounded-circle border border-white" src="./assets/images/avatar/02.jpg" alt="avatar">
							</li>
							<li class="avatar avatar-sm">
								<img class="avatar-img rounded-circle border border-white" src="./assets/images/avatar/03.jpg" alt="avatar">
							</li>
							<li class="avatar avatar-sm">
								<img class="avatar-img rounded-circle border border-white" src="./assets/images/avatar/04.jpg" alt="avatar">
							</li>
							<li class="avatar avatar-sm">
								<img class="avatar-img rounded-circle border border-white" src="./assets/images/avatar/05.jpg" alt="avatar">
							</li>
						</ul>
						<!-- Rating -->
						<span class="h6 mb-0"><i class="fa-solid fa-star text-warning me-1"></i>4.9</span>
					</div>	
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Main banner START -->

<!-- =======================
Team START -->
<section class="py-0">
	<div class="container">
		<!-- Team START -->
		<div class="row g-4">

			<!-- Team item START -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="card card-img-scale card-element-hover overflow-hidden bg-transparent">
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="./assets/images/team/01.jpg" class="card-img" alt=""  style="width: 350px; height: 300px;">
						<!-- Card overlay -->
						<div class="card-img-overlay d-flex align-items-start flex-column p-3">
							<!-- Badge -->
							<span class="badge text-bg-white"><i class="fa-solid fa-star text-warning me-2"></i>4.3</span>
							<!-- Social button -->
							<div class="btn-group hover-element d-flex mt-auto">
								<a href="#" class="btn btn-white"><i class="fa-brands fa-facebook-f text-facebook"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-instagram text-instagram"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-twitter text-twitter"></i></a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2 pb-0">
						<h5 class="card-title mb-1"><a href="#">Abdulkadir Abukar Ibrahim</a></h5>
						<span>C120085</span>
					</div>
				</div>
			</div>
			<!-- Team item END -->

			<!-- Team item START -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="card card-img-scale card-element-hover overflow-hidden bg-transparent">
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="./assets/images/team/02.jpg" class="card-img" alt=""  style="width: 350px; height: 300px;">
						<!-- Card overlay -->
						<div class="card-img-overlay d-flex align-items-start flex-column p-3">
							<!-- Badge -->
							<span class="badge text-bg-white"><i class="fa-solid fa-star text-warning me-2"></i>4.3</span>
							<!-- Social button -->
							<div class="btn-group hover-element d-flex mt-auto">
								<a href="#" class="btn btn-white"><i class="fa-brands fa-facebook-f text-facebook"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-instagram text-instagram"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-twitter text-twitter"></i></a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2 pb-0">
						<h5 class="card-title mb-1"><a href="#">Abdirahman Yusuf Essa</a></h5>
						<span>C120086</span>
					</div>
				</div>
			</div>
			<!-- Team item END -->

			<!-- Team item START -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="card card-img-scale card-element-hover overflow-hidden bg-transparent">
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="./assets/images/team/04.jpg" class="card-img" alt="" style="width: 350px; height: 300px; height: 300px;">
						<!-- Card overlay -->
						<div class="card-img-overlay d-flex align-items-start flex-column p-3">
							<!-- Badge -->
							<span class="badge text-bg-white"><i class="fa-solid fa-star text-warning me-2"></i>4.3</span>
							<!-- Social button -->
							<div class="btn-group hover-element d-flex mt-auto">
								<a href="#" class="btn btn-white"><i class="fa-brands fa-facebook-f text-facebook"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-instagram text-instagram"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-twitter text-twitter"></i></a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2 pb-0">
						<h5 class="card-title mb-1"><a href="#">Fathi Shuuke Mohamed</a></h5>
						<span>C120598</span>
					</div>
				</div>
			</div>
			<!-- Team item END -->

			<!-- Team item START -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="card card-img-scale card-element-hover overflow-hidden bg-transparent">
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="./assets/images/team/03.jpg" class="card-img" alt=""  style="width: 350px; height: 300px;">
						<!-- Card overlay -->
						<div class="card-img-overlay d-flex align-items-start flex-column p-3">
							<!-- Badge -->
							<span class="badge text-bg-white"><i class="fa-solid fa-star text-warning me-2"></i>4.3</span>
							<!-- Social button -->
							<div class="btn-group hover-element d-flex mt-auto">
								<a href="#" class="btn btn-white"><i class="fa-brands fa-facebook-f text-facebook"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-instagram text-instagram"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-twitter text-twitter"></i></a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2 pb-0">
						<h5 class="card-title mb-1"><a href="#">Khadar Aadan Abdisalan</a></h5>
						<span>C120793</span>
					</div>
				</div>
			</div>
			<!-- Team item END -->

			<!-- Team item START -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="card card-img-scale card-element-hover overflow-hidden bg-transparent">
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="./assets/images/team/05.jpg" class="card-img" alt=""  style="width: 350px; height: 300px;">
						<!-- Card overlay -->
						<div class="card-img-overlay d-flex align-items-start flex-column p-3">
							<!-- Badge -->
							<span class="badge text-bg-white"><i class="fa-solid fa-star text-warning me-2"></i>4.3</span>
							<!-- Social button -->
							<div class="btn-group hover-element d-flex mt-auto">
								<a href="#" class="btn btn-white"><i class="fa-brands fa-facebook-f text-facebook"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-instagram text-instagram"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-twitter text-twitter"></i></a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2 pb-0">
						<h5 class="card-title mb-1"><a href="#">Farhan Dahir Ali</a></h5>
						<span>C120148</span>
					</div>
				</div>
			</div>
			<!-- Team item END -->

			<!-- Team item START -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="card card-img-scale card-element-hover overflow-hidden bg-transparent">
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="./assets/images/team/06.jpg" class="card-img" alt="" style="width: 350px; height: 300px;">
						<!-- Card overlay -->
						<div class="card-img-overlay d-flex align-items-start flex-column p-3">
							<!-- Badge -->
							<span class="badge text-bg-white"><i class="fa-solid fa-star text-warning me-2"></i>4.3</span>
							<!-- Social button -->
							<div class="btn-group hover-element d-flex mt-auto">
								<a href="#" class="btn btn-white"><i class="fa-brands fa-facebook-f text-facebook"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-instagram text-instagram"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-twitter text-twitter"></i></a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2 pb-0">
						<h5 class="card-title mb-1"><a href="#">Abdullahi Mascuud Abdullahi</a></h5>
						<span>C120146</span>
					</div>
				</div>
			</div>
			<!-- Team item END -->

			<!-- Team item START -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="card card-img-scale card-element-hover overflow-hidden bg-transparent">
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="./assets/images/team/07.jpg" class="card-img" alt=" style="width: 350px; height: 300px;">
						<!-- Card overlay -->
						<div class="card-img-overlay d-flex align-items-start flex-column p-3">
							<!-- Badge -->
							<span class="badge text-bg-white"><i class="fa-solid fa-star text-warning me-2"></i>4.3</span>
							<!-- Social button -->
							<div class="btn-group hover-element d-flex mt-auto">
								<a href="#" class="btn btn-white"><i class="fa-brands fa-facebook-f text-facebook"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-instagram text-instagram"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-twitter text-twitter"></i></a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2 pb-0">
						<h5 class="card-title mb-1"><a href="#">Rakia Khalif Ali</a></h5>
						<span>C120638</span>
					</div>
				</div>
			</div>
			<!-- Team item END -->

			<!-- Team item START -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="card card-img-scale card-element-hover overflow-hidden bg-transparent">
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="./assets/images/team/09.jpg" class="card-img" alt="" style="width: 350px; height: 300px;">
						<!-- Card overlay -->
						<div class="card-img-overlay d-flex align-items-start flex-column p-3">
							<!-- Badge -->
							<span class="badge text-bg-white"><i class="fa-solid fa-star text-warning me-2"></i>4.3</span>
							<!-- Social button -->
							<div class="btn-group hover-element d-flex mt-auto">
								<a href="#" class="btn btn-white"><i class="fa-brands fa-facebook-f text-facebook"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-instagram text-instagram"></i></a>
								<a href="#" class="btn btn-white"><i class="fa-brands fa-twitter text-twitter"></i></a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2 pb-0">
						<h5 class="card-title mb-1"><a href="#">Hafsa Abdullahi Hassan</a></h5>
						<span>C120640</span>
					</div>
				</div>
			</div>
			<!-- Team item END -->


			
		</div>
		<!-- Team END -->
	</div>
</section>
<!-- =======================
Team END -->

<!-- =======================
Action box START -->
<section>
	<div class="container">
		<div class="bg-success bg-opacity-500 rounded-3 p-4 p-sm-5">	
			<div class="row align-items-center position-relative">
				<div class="col-lg-8">
					<!-- Title -->
					<div class="d-flex">
						<h3>Let's Enjoy Your Room With Booking</h3>
						
					</div>
					<p class="mb-3 mb-lg-0">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy.</p>
				</div>
				<!-- Content and input -->
				<div class="col-lg-4 text-lg-end">
					<a href="#" class="btn btn-lg btn-primary mb-0">Book Your Destination</a>
				</div>
			</div> <!-- Row END -->
		</div>
	</div>
</section>
<!-- =======================
Action box END -->

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

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- ThemeFunctions -->
<script src="./assets/js/functions.js"></script>

</body>

<!-- Mirrored from booking.webestica.com/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2023 07:37:22 GMT -->
</html>