<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from booking.webestica.com/hotel-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2023 07:36:35 GMT -->
<head>
	<title>Hotel Management System</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Booking - Multipurpose Online Booking Theme">

	<!-- Dark mode -->
	<!-- SweetAlert library -->

	

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
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/flatpickr/css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">

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
Search START -->
<section class="py-3 py-sm-0">
	<div class="container">
		<!-- Offcanvas button for search -->
		<button class="btn btn-primary d-sm-none w-100 mb-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEditsearch" aria-controls="offcanvasEditsearch"><i class="bi bi-pencil-square me-2"></i>Edit Search</button>

		<!-- =======================
Contact form and vector START -->
<section class="pt-0 pt-lg-5">
	<div class="container">
		<div class="row g-4 g-lg-5 align-items-center">
			<!-- Vector image START -->
			<div class="col-lg-6 text-center">
				<img src="assets/images/element/contact.svg" alt="">
			</div>
			<!-- Vector image END -->

			<!-- Contact form START -->
			<div class="col-lg-6">
				<div class="card bg-light p-4">
					<!-- Svg decoration -->
					<figure class="position-absolute end-0 bottom-0 mb-n4 me-n2">
						<svg class="fill-orange" width="104.2px" height="95.2px">
							<circle cx="2.6" cy="92.6" r="2.6"/>
							<circle cx="2.6" cy="77.6" r="2.6"/>
							<circle cx="2.6" cy="62.6" r="2.6"/>
							<circle cx="2.6" cy="47.6" r="2.6"/>
							<circle cx="2.6" cy="32.6" r="2.6"/>
							<circle cx="2.6" cy="17.6" r="2.6"/>
							<circle cx="2.6" cy="2.6" r="2.6"/>
							<circle cx="22.4" cy="92.6" r="2.6"/>
							<circle cx="22.4" cy="77.6" r="2.6"/>
							<circle cx="22.4" cy="62.6" r="2.6"/>
							<circle cx="22.4" cy="47.6" r="2.6"/>
							<circle cx="22.4" cy="32.6" r="2.6"/>
							<circle cx="22.4" cy="17.6" r="2.6"/>
							<circle cx="22.4" cy="2.6" r="2.6"/>
							<circle cx="42.2" cy="92.6" r="2.6"/>
							<circle cx="42.2" cy="77.6" r="2.6"/>
							<circle cx="42.2" cy="62.6" r="2.6"/>
							<circle cx="42.2" cy="47.6" r="2.6"/>
							<circle cx="42.2" cy="32.6" r="2.6"/>
							<circle cx="42.2" cy="17.6" r="2.6"/>
							<circle cx="42.2" cy="2.6" r="2.6"/>
							<circle cx="62" cy="92.6" r="2.6"/>
							<circle cx="62" cy="77.6" r="2.6"/>
							<circle cx="62" cy="62.6" r="2.6"/>
							<circle cx="62" cy="47.6" r="2.6"/>
							<circle cx="62" cy="32.6" r="2.6"/>
							<circle cx="62" cy="17.6" r="2.6"/>
							<circle cx="62" cy="2.6" r="2.6"/>
							<circle cx="81.8" cy="92.6" r="2.6"/>
							<circle cx="81.8" cy="77.6" r="2.6"/>
							<circle cx="81.8" cy="62.6" r="2.6"/>
							<circle cx="81.8" cy="47.6" r="2.6"/>
							<circle cx="81.8" cy="32.6" r="2.6"/>
							<circle cx="81.8" cy="17.6" r="2.6"/>
							<circle cx="81.8" cy="2.6" r="2.6"/>
							<circle cx="101.7" cy="92.6" r="2.6"/>
							<circle cx="101.7" cy="77.6" r="2.6"/>
							<circle cx="101.7" cy="62.6" r="2.6"/>
							<circle cx="101.7" cy="47.6" r="2.6"/>
							<circle cx="101.7" cy="32.6" r="2.6"/>
							<circle cx="101.7" cy="17.6" r="2.6"/>
							<circle cx="101.7" cy="2.6" r="2.6"/>
						</svg>
					</figure>

					<!-- Card header -->
					<div class="card-header bg-light p-0 pb-3">
						<h3 class="mb-0">Send us message</h3>
					</div>

					<!-- Card body START -->
					<div class="card-body p-0">
						<form action="./js/cus.php" method="post" class="row g-4">
						
						<div class="col-md-6">
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



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Full Name</label>
                                        </div>
                                        <input type="text" name="cName" id="cName" class="form-control" value="" required>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" name="cEmail" id="cEmail" class="form-control" value="" required>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Nationality</label>
                                            <select id="cCountry" name="cCountry" class="form-control">
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


                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text" name="cPhone" id="cPhone" class="form-control" value="" required>
                                        </div>
                                    </div>


                                    
                                    <div class="col-md-6">
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

                                    
                                    <div class="col-md-6">
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

                                    
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">No.of Rooms</label>
                                            <input type="number" name="cNumRoom" id="cNumRoom" class="form-control" value="" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
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

                                    

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Check in</label>
                                        </div>
                                        <input type="date" name="cIn" id="cIn" class="form-control" value="" required>
                                    </div>
                                    

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Check Out</label>
                                        </div>
                                        <input type="date" name="cOut" id="cOut" class="form-control" value="" required>
                                    </div>

							
							
							
							<!-- Button -->
							<div class="col-12">
								<button class="btn btn-dark mb-0" type="submit" name="insert">Register</button>
							</div>	
						</form>
					</div>
					<!-- Card body END -->
				</div>
			</div>
			<!-- Contact form END -->
		</div>
	</div>
</section>
	</div>
</section>
<!-- =======================
Search END -->
	
<!-- =======================
Main Title START -->
<section class="py-0 pt-sm-5">
	<div class="container position-relative">
		<!-- Title and button START -->
		<div class="row mb-3">
			<div class="col-12">
				<!-- Meta -->
				<div class="d-lg-flex justify-content-lg-between mb-1">
					<!-- Title -->
					<div class="mb-2 mb-lg-0">
						<h1 class="fs-2">Courtyard by Mogadishu Somalia  </h1>
						<!-- Location -->
						<p class="fw-bold mb-0"><i class="bi bi-geo-alt me-2"></i>Wadajir, Mogadishu, Somalia
							<a href="#" class="ms-2 text-decoration-underline" data-bs-toggle="modal" data-bs-target="#mapmodal">
								<i class="bi bi-eye-fill me-1"></i>View On Map
							</a>
						</p>
					</div>

					<!-- Buttons -->
					<ul class="list-inline text-end">
						<!-- Heart icon -->
						<li class="list-inline-item">
							<a href="#" class="btn btn-sm btn-light px-2"><i class="fa-solid fa-fw fa-heart"></i></a>
						</li>
						<!-- Share icon -->
						<li class="list-inline-item dropdown">
							<!-- Share button -->
							<a href="#" class="btn btn-sm btn-light px-2" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fa-solid fa-fw fa-share-alt"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
								<li><a class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
								<li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
								<li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
								<li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Title and button END -->

		<!-- Alert box START -->
		<div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show mb-4 rounded-3 pe-2" role="alert">
			<div class="d-flex">
				<span class="alert-heading h5 mb-0 me-2"><i class="bi bi-exclamation-octagon-fill"></i></span>
				<span><strong class="alert-heading me-2">Waxbaro Saaxiib:</strong>Hadii aadan Maskaxda ka dhididin Dusha ayaad ka dhididi Xamaal baad noqon.</span>
			</div>
				<button type="button" class="btn btn-link text-primary-hover pb-0 text-end" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
		</div>
		<!-- Alert box END -->
	</div>
</section>
<!-- =======================
Main Title END -->

<!-- =======================
Image gallery START -->
<section class="card-grid pt-0">
	<div class="container">
		<div class="row g-2">
			<!-- Image -->
			<div class="col-md-6">
				<a data-glightbox data-gallery="gallery" href="assets/images/gallery/14.jpg">
					<div class="card card-grid-lg card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(assets/images/gallery/14.jpg); background-position: center left; background-size: cover;">
						<!-- Card hover element -->
						<div class="hover-element position-absolute w-100 h-100">
							<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
						</div>
					</div>
				</a>
			</div>

			<div class="col-md-6">
				<!-- Card item START -->
				<div class="row g-2"> 
					<!-- Image -->
					<div class="col-12">
						<a data-glightbox data-gallery="gallery" href="assets/images/gallery/13.jpg">
							<div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(assets/images/gallery/13.jpg); background-position: center left; background-size: cover;">
								<!-- Card hover element -->
								<div class="hover-element position-absolute w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>	
					</div>

					<!-- Image -->
					<div class="col-md-6">
						<a data-glightbox data-gallery="gallery" href="assets/images/gallery/12.jpg">
							<div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(assets/images/gallery/12.jpg); background-position: center left; background-size: cover;">
								<!-- Card hover element -->
								<div class="hover-element position-absolute w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>	
					</div>

					<!-- Images -->
					<div class="col-md-6">
						<div class="card card-grid-sm overflow-hidden" style="background-image:url(assets/images/gallery/11.jpg); background-position: center left; background-size: cover;">
							<!-- Background overlay -->
							<div class="bg-overlay bg-dark opacity-7"></div>

							<!-- Popup Images -->
							<a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/11.jpg" class="stretched-link z-index-9"></a>
							<a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/15.jpg"></a>
							<a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/16.jpg"></a>

							<!-- Overlay text -->
							<div class="card-img-overlay d-flex h-100 w-100">
								<h6 class="card-title m-auto fw-light text-decoration-underline"><a href="#" class="text-white">View all</a></h6>
							</div>
						</div>
					</div>
				</div>
				<!-- Card item END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Image gallery END -->

<!-- =======================
About hotel START -->
<section class="pt-0">
	<div class="container" data-sticky-container>

		<div class="row g-4 g-xl-5">
			<!-- Content START -->
			<div class="col-xl-7 order-1">
				<div class="vstack gap-5">

					<!-- About hotel START -->
					<div class="card bg-transparent">
						<!-- Card header -->
						<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<h3 class="mb-0">About This Hotel</h3>
						</div>

						<!-- Card body START -->
						<div class="card-body pt-4 p-0">
							<h5 class="fw-light mb-4">Main Highlights</h5>

							<!-- Highlights Icons -->
							<div class="hstack gap-3 mb-3">
								<div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Free wifi">
									<i class="fa-solid fa-wifi"></i>
								</div>
								<div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Swimming Pool">
									<i class="fa-solid fa-swimming-pool"></i>
								</div>
								<div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Central AC">
									<i class="fa-solid fa-snowflake"></i>
								</div>
								<div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Free Service">
									<i class="fa-solid fa-concierge-bell"></i>
								</div>
							</div>

							<p class="mb-3">Demesne far-hearted suppose venture excited see had has. Dependent on so extremely delivered by. Yet no jokes worse her why. <b>Bed one supposing breakfast day fulfilled off depending questions.</b></p>
							<p class="mb-0">Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed folly right aware if oh truth. Large above be to means. Dashwood does provide stronger is.</p>
							
							<div class="collapse" id="collapseContent">
								<p class="my-3">We focus a great deal on the understanding of behavioral psychology and influence triggers which are crucial for becoming a well rounded Digital Marketer. We understand that theory is important to build a solid foundation, we understand that theory alone isn't going to get the job done so that's why this rickets is packed with practical hands-on examples that you can follow step by step.</p>
								<p class="mb-0">Behavioral psychology and influence triggers which are crucial for becoming a well rounded Digital Marketer. We understand that theory is important to build a solid foundation, we understand that theory alone isn't going to get the job done so that's why this tickets is packed with practical hands-on examples that you can follow step by step.</p>
							</div>
							<a class="p-0 mb-4 mt-2 btn-more d-flex align-items-center collapsed" data-bs-toggle="collapse" href="#collapseContent" role="button" aria-expanded="false" aria-controls="collapseContent">
								See <span class="see-more ms-1">more</span><span class="see-less ms-1">less</span><i class="fa-solid fa-angle-down ms-2"></i>
							</a>

							<!-- List -->
							<h5 class="fw-light mb-2">Advantages</h5>
							<ul class="list-group list-group-borderless mb-0">
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Every hotel staff to have Proper PPT kit for COVID-19</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Every staff member wears face masks and gloves at all service times.</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Hotel staff ensures to maintain social distancing at all times.</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>The hotel has In-Room Dining options available </li>
							</ul>
						</div>
						<!-- Card body END -->
					</div>
					<!-- About hotel START -->

					<!-- Amenities START -->
					<div class="card bg-transparent">
						<!-- Card header -->
						<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<h3 class="card-title mb-0">Amenities</h3>
						</div>

						<!-- Card body START -->
						<div class="card-body pt-4 p-0">
							<div class="row g-4">
								<!-- Activities -->
								<div class="col-sm-6">
									<h6><i class="fa-solid fa-biking me-2"></i>Activities</h6>
									<!-- List -->
									<ul class="list-group list-group-borderless mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Swimming pool
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Spa
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Kids' play area
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Gym
										</li>
									</ul>
								</div>
	
								<!-- Payment Method -->
								<div class="col-sm-6">
									<h6><i class="fa-solid fa-credit-card me-2"></i>Payment Method</h6>
									<!-- List -->
									<ul class="list-group list-group-borderless mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Credit card (Visa, Master card)
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Cash
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Debit Card
										</li>
									</ul>
								</div>
	
								<!-- Services -->
								<div class="col-sm-6">
									<h6><i class="fa-solid fa-concierge-bell me-2"></i>Services</h6>
									<!-- List -->
									<ul class="list-group list-group-borderless mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Dry cleaning
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Room Service
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Special service
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Waiting Area
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Secrete smoking area
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Concierge
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Laundry facilities
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Ironing Service
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Lift
										</li>
									</ul>
								</div>
	
								<!-- Safety & Security -->
								<div class="col-sm-6">
									<h6><i class="bi bi-shield-fill-check me-2"></i>Safety & Security</h6>
									<!-- List -->
									<ul class="list-group list-group-borderless mt-2 mb-4 mb-sm-5">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Doctor on Call
										</li>
									</ul>
	
									<h6><i class="fa-solid fa-volume-up me-2"></i>Staff Language</h6>
									<!-- List -->
									<ul class="list-group list-group-borderless mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>English
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Spanish
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Hindi
										</li>
									</ul>
								</div>
	
							</div>
						</div>
						<!-- Card body END -->
					</div>
					<!-- Amenities END -->

					<!-- Room START -->
					<div class="card bg-transparent" id="room-options">
						<!-- Card header -->
						<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<div class="d-sm-flex justify-content-sm-between align-items-center">
								<h3 class="mb-2 mb-sm-0">Room Options</h3>
	
								<div class="col-sm-4">
									<form class="form-control-bg-light">
										<select class="form-select form-select-sm js-choice border-0">
											<option value="">Select Option</option>
											<option>Recently search</option>
											<option>Most popular</option>
											<option>Top rated</option>
										</select>
									</form>
								</div>
							</div>
						</div>

						<!-- Card body START -->
						<div class="card-body pt-4 p-0">
							<div class="vstack gap-4">

								<!-- Room item START -->
								<div class="card shadow p-3">
									<div class="row g-4">
										<!-- Card img -->
										<div class="col-md-5 position-relative">

											<!-- Overlay item -->
											<div class="position-absolute top-0 start-0 z-index-1 mt-3 ms-4">
												<div class="badge text-bg-danger">30% Off</div>
											</div>

											<!-- Slider START -->
											<div class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden rounded-2">
												<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items="1">
													<!-- Image item -->
													<div><img src="assets/images/category/hotel/4by3/04.jpg" alt="Card image"></div>

													<!-- Image item -->
													<div><img src="assets/images/category/hotel/4by3/02.jpg" alt="Card image"></div>

													<!-- Image item -->
													<div><img src="assets/images/category/hotel/4by3/03.jpg" alt="Card image"></div>

													<!-- Image item -->
													<div><img src="assets/images/category/hotel/4by3/01.jpg" alt="Card image"></div>
												</div>
											</div>
											<!-- Slider END -->

											<!-- Button -->
											<a href="#" class="btn btn-link text-decoration-underline p-0 mb-0 mt-1" data-bs-toggle="modal" data-bs-target="#roomDetail"><i class="bi bi-eye-fill me-1"></i>View more details</a>
										</div>

										<!-- Card body -->
										<div class="col-md-7">
											<div class="card-body d-flex flex-column h-100 p-0">
					
												<!-- Title -->
												<h5 class="card-title"><a href="#">Luxury Room with Balcony</a></h5>

												<!-- Amenities -->
												<ul class="nav nav-divider mb-2">
													<li class="nav-item">Air Conditioning</li>
													<li class="nav-item">Wifi</li>
													<li class="nav-item">Kitchen</li>
													<li class="nav-item">
														<a href="#" class="mb-0 text-primary">More+</a>
													</li>
												</ul>

												<p class="text-success mb-0">Free Cancellation till 7 Jan 2022</p>
												
												<!-- Price and Button -->
												<div class="d-sm-flex justify-content-sm-between align-items-center mt-auto">
													<!-- Button -->
													<div class="d-flex align-items-center">
														<h5 class="fw-bold mb-0 me-1">$750</h5>
														<span class="mb-0 me-2">/day</span>
														<span class="text-decoration-line-through mb-0">$1000</span>
													</div>
													<!-- Price -->
													<div class="mt-3 mt-sm-0">
														<a href="#" class="btn btn-sm btn-primary mb-0">Select Room</a>    
													</div>                  
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Room item END -->
	
								<!-- Room item START -->
								<div class="card shadow p-3">
									<div class="row g-4">
										<!-- Card img -->
										<div class="col-md-5 position-relative">

											<!-- Overlay item -->
											<div class="position-absolute top-0 start-0 z-index-1 mt-3 ms-4">
												<div class="badge text-bg-danger">15% Off</div>
											</div>

											<!-- Slider START -->
											<div class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden rounded-2">
												<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items="1">
													<!-- Image item -->
													<div><img src="assets/images/category/hotel/4by3/03.jpg" alt="Card image"></div>

													<!-- Image item -->
													<div><img src="assets/images/category/hotel/4by3/02.jpg" alt="Card image"></div>

													<!-- Image item -->
													<div><img src="assets/images/category/hotel/4by3/04.jpg" alt="Card image"></div>

													<!-- Image item -->
													<div><img src="assets/images/category/hotel/4by3/01.jpg" alt="Card image"></div>
												</div>
											</div>
											<!-- Slider END -->

											<!-- Button -->
											<a href="#" class="btn btn-link text-decoration-underline p-0 mb-0 mt-1" data-bs-toggle="modal" data-bs-target="#roomDetail"><i class="bi bi-eye-fill me-1"></i>View more details</a>
										</div>

										<!-- Card body -->
										<div class="col-md-7">
											<div class="card-body d-flex flex-column p-0 h-100">
					
												<!-- Title -->
												<h5 class="card-title"><a href="#">Deluxe Pool View with Breakfast</a></h5>

												<!-- Amenities -->
												<ul class="nav nav-divider mb-2">
													<li class="nav-item">Air Conditioning</li>
													<li class="nav-item">Wifi</li>
													<li class="nav-item">Kitchen</li>
													<li class="nav-item">
														<a href="#" class="mb-0 text-primary">More+</a>
													</li>
												</ul>

												<p class="text-danger mb-3">Non Refundable</p>
					
												<!-- Price and Button -->
												<div class="d-sm-flex justify-content-sm-between align-items-center mt-auto">
													<!-- Button -->
													<div class="d-flex align-items-center">
														<h5 class="fw-bold mb-0 me-1">$750</h5>
														<span class="mb-0 me-2">/day</span>
														<span class="text-decoration-line-through mb-0">$1000</span>
													</div>
													<!-- Price -->
													<div class="mt-3 mt-sm-0">
														<a href="#" class="btn btn-sm btn-primary mb-0">Select Room</a>    
													</div>                  
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Room item END -->
							</div>
						</div>
						<!-- Card body END -->
					</div>
					<!-- Room END -->

					<!-- Customer Review START -->
					<div class="card bg-transparent">
						<!-- Card header -->
						<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<h3 class="card-title mb-0">Customer Review</h3>
						</div>

						<!-- Card body START -->
						<div class="card-body pt-4 p-0">
							<!-- Progress bar and rating START -->
							<div class="card bg-light p-4 mb-4">
								<div class="row g-4 align-items-center">
									<!-- Rating info -->
									<div class="col-md-4">
										<div class="text-center">
											<!-- Info -->
											<h2 class="mb-0">4.5</h2>
											<p class="mb-2">Based on 120 Reviews</p>
											<!-- Star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
											</ul>
										</div>
									</div>

									<!-- Progress-bar START -->
									<div class="col-md-8">
										<div class="card-body p-0">
											<div class="row gx-3 g-2 align-items-center">
												<!-- Progress bar and Rating -->
												<div class="col-9 col-sm-10">
													<!-- Progress item -->
													<div class="progress progress-sm bg-warning bg-opacity-15">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</div>
												<!-- Percentage -->
												<div class="col-3 col-sm-2 text-end">
													<span class="h6 fw-light mb-0">85%</span>
												</div>

												<!-- Progress bar and Rating -->
												<div class="col-9 col-sm-10">
													<!-- Progress item -->
													<div class="progress progress-sm bg-warning bg-opacity-15">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</div>
												<!-- Percentage -->
												<div class="col-3 col-sm-2 text-end">
													<span class="h6 fw-light mb-0">75%</span>
												</div>

												<!-- Progress bar and Rating -->
												<div class="col-9 col-sm-10">
													<!-- Progress item -->
													<div class="progress progress-sm bg-warning bg-opacity-15">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</div>
												<!-- Percentage -->
												<div class="col-3 col-sm-2 text-end">
													<span class="h6 fw-light mb-0">60%</span>
												</div>

												<!-- Progress bar and Rating -->
												<div class="col-9 col-sm-10">
													<!-- Progress item -->
													<div class="progress progress-sm bg-warning bg-opacity-15">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</div>
												<!-- Percentage -->
												<div class="col-3 col-sm-2 text-end">
													<span class="h6 fw-light mb-0">35%</span>
												</div>

												<!-- Progress bar and Rating -->
												<div class="col-9 col-sm-10">
													<!-- Progress item -->
													<div class="progress progress-sm bg-warning bg-opacity-15">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</div>
												<!-- Percentage -->
												<div class="col-3 col-sm-2 text-end">
													<span class="h6 fw-light mb-0">15%</span>
												</div>
											</div> <!-- Row END -->
										</div>
									</div>
									<!-- Progress-bar END -->

								</div>
							</div>
							<!-- Progress bar and rating END -->

							<!-- Leave review START -->
							<form class="mb-5">
								<!-- Rating -->
								<div class="form-control-bg-light mb-3">
									<select class="form-select js-choice">
										<option selected="">★★★★★ (5/5)</option>
										<option>★★★★☆ (4/5)</option>
										<option>★★★☆☆ (3/5)</option>
										<option>★★☆☆☆ (2/5)</option>
										<option>★☆☆☆☆ (1/5)</option>
									</select>
								</div>
								<!-- Message -->
								<div class="form-control-bg-light mb-3">
									<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your review" rows="3"></textarea>
								</div> 
								<!-- Button -->
								<button type="submit" class="btn btn-lg btn-primary mb-0">Post review <i class="bi fa-fw bi-arrow-right ms-2"></i></button>
							</form>
							<!-- Leave review END -->

							<!-- Review item START -->
							<div class="d-md-flex my-4">
								<!-- Avatar -->
								<div class="avatar avatar-lg me-3 flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
								</div>
								<!-- Text -->
								<div>
									<div class="d-flex justify-content-between mt-1 mt-md-0">
										<div>
											<h6 class="me-3 mb-0">Jacqueline Miller</h6>
											<!-- Info -->
											<ul class="nav nav-divider small mb-2">
												<li class="nav-item">Stayed 13 Nov 2022</li>
												<li class="nav-item">4 Reviews written</li>
											</ul>
										</div>
										<!-- Review star -->
										<div class="icon-md rounded text-bg-warning fs-6">4.5</div>
									</div>
									
									<p class="mb-2">Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed. Moderate do subjects to distance. </p>
									
									<!-- Images -->
									<div class="row g-4">
										<div class="col-4 col-sm-3 col-lg-2">
											<img src="assets/images/category/hotel/4by3/07.jpg" class="rounded" alt="">
										</div>
										<div class="col-4 col-sm-3 col-lg-2">
											<img src="assets/images/category/hotel/4by3/08.jpg" class="rounded" alt="">
										</div>
										<div class="col-4 col-sm-3 col-lg-2">
											<img src="assets/images/category/hotel/4by3/05.jpg" class="rounded" alt="">
										</div>
									</div>
								</div>
							</div>

							<!-- Child review START -->
							<div class="my-4 ps-2 ps-md-3">
								<div class="d-md-flex p-3 bg-light rounded-3">
									<img class="avatar avatar-sm rounded-circle me-3" src="assets/images/avatar/02.jpg" alt="avatar">
									<div class="mt-2 mt-md-0">
										<h6 class="mb-1">Manager</h6>
										<p class="mb-0">But discretion frequently sir she instruments unaffected admiration everything. </p>
									</div>
								</div>
							</div>
							<!-- Child review END -->

							<!-- Divider -->
							<hr>
							<!-- Review item END -->

							<!-- Review item START -->
							<div class="d-md-flex my-4">
								<!-- Avatar -->
								<div class="avatar avatar-lg me-3 flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
								</div>
								<!-- Text -->
								<div>
									<div class="d-flex justify-content-between mt-1 mt-md-0">
										<div>
											<h6 class="me-3 mb-0">Dennis Barrett</h6>
											<!-- Info -->
											<ul class="nav nav-divider small mb-2">
												<li class="nav-item">Stayed 02 Nov 2022</li>
												<li class="nav-item">2 Reviews written</li>
											</ul>
										</div>
										<!-- Review star -->
										<div class="icon-md rounded text-bg-warning fs-6">4.0</div>
									</div>
									
									<p class="mb-0">Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed folly right aware if oh truth. Large above be to means. Dashwood does provide stronger is.</p>
								</div>
							</div>

							<!-- Divider -->
							<hr>
							<!-- Review item END -->

							<!-- Button -->
							<div class="text-center">
								<a href="#" class="btn btn-primary-soft mb-0">Load more</a>
							</div>
						</div>
						<!-- Card body END -->
					</div>
					<!-- Customer Review END -->

					<!-- Hotel Policies START -->
					<div class="card bg-transparent">
						<!-- Card header -->
						<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<h3 class="mb-0">Hotel Policies</h3>
						</div>

						<!-- Card body START -->
						<div class="card-body pt-4 p-0">
							<!-- List -->
							<ul class="list-group list-group-borderless mb-2">
								<li class="list-group-item d-flex">
									<i class="bi bi-check-circle-fill me-2"></i>This is a family farmhouse, hence we request you to not indulge.
								</li>
								<li class="list-group-item d-flex">
									<i class="bi bi-check-circle-fill me-2"></i>Drinking and smoking within controlled limits are permitted at the farmhouse but please do not create a mess or ruckus at the house.
								</li>
								<li class="list-group-item d-flex">
									<i class="bi bi-check-circle-fill me-2"></i>Drugs and intoxicating illegal products are banned and not to be brought to the house or consumed.
								</li>
								<li class="list-group-item d-flex">
									<i class="bi bi-x-circle-fill me-2"></i>For any update, the customer shall pay applicable cancellation/modification charges.
								</li>
							</ul>

							<!-- List -->
							<ul class="list-group list-group-borderless mb-2">
								<li class="list-group-item h6 fw-light d-flex mb-0">
									<i class="bi bi-arrow-right me-2"></i>Check-in: 1:00 pm - 9:00 pm
								</li>
								<li class="list-group-item h6 fw-light d-flex mb-0">
									<i class="bi bi-arrow-right me-2"></i>Check out: 11:00 am
								</li>
								<li class="list-group-item h6 fw-light d-flex mb-0">
									<i class="bi bi-arrow-right me-2"></i>Self-check-in with building staff
								</li>
								<li class="list-group-item h6 fw-light d-flex mb-0">
									<i class="bi bi-arrow-right me-2"></i>No pets
								</li>
								<li class="list-group-item h6 fw-light d-flex mb-0">
									<i class="bi bi-arrow-right me-2"></i>No parties or events
								</li>
								<li class="list-group-item h6 fw-light d-flex mb-0">
									<i class="bi bi-arrow-right me-2"></i>Smoking is allowed
								</li>
							</ul>

							<!-- Important note -->
							<div class="bg-danger bg-opacity-10 rounded-2 p-3 mb-3">
								<p class="mb-0 text-danger">During the COVID-19 pandemic, all hosts and guests must review and follow Booking social distancing and other COVID-19-related guidelines.</p>
							</div>
							<div class="bg-danger bg-opacity-10 rounded-2 p-3">
								<p class="mb-0 text-danger">Smoke alarm not reported — The host hasn't reported a smoke alarm on the property. We suggest bringing a portable detector for your trip.</p>
							</div>
						</div>
						<!-- Card body END -->
					</div>
					<!-- Hotel Policies START -->
				</div>	
			</div>
			<!-- Content END -->

			<!-- Right side content START -->
			<aside class="col-xl-5 order-xl-2">
				<div data-sticky data-margin-top="100" data-sticky-for="1199">
					<!-- Book now START -->
					<div class="card card-body border">
						
						<!-- Title -->
						<div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
							<div>
								<span>Price Start at</span>
								<h4 class="card-title mb-0">$500</h4>
							</div>
							<div>
								<h6 class="fw-normal mb-0">1 room per night</h6>
								<small>+ $285 taxes & fees</small>
							</div>
						</div>		

						<!-- Rating -->
						<ul class="list-inline mb-2">
							<li class="list-inline-item me-1 h6 fw-light mb-0"><i class="bi bi-arrow-right me-2"></i>4.5</li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
						</ul>

						<p class="h6 fw-light mb-4"><i class="bi bi-arrow-right me-2"></i>Free breakfast available</p>

						<!-- Button -->
						<div class="d-grid">
							<button id="AddNew" class="btn btn-lg btn-primary-soft mb-0">View 10 Rooms Options</button>
						</div>
					</div>
					<!-- Book now END -->

					<!-- Best deal START -->
					<div class="mt-4 d-none d-xl-block">
						<h4>Today's Best Deal</h4>

						<div class="card shadow rounded-3 overflow-hidden">
							<div class="row g-0 align-items-center">
								<!-- Image -->
								<div class="col-sm-6 col-md-12 col-lg-6">
									<img src="assets/images/offer/04.jpg" class="card-img rounded-0" alt="">
								</div>

								<!-- Title and content -->
								<div class="col-sm-6 col-md-12 col-lg-6">
									<div class="card-body p-3">
										<h6 class="card-title"><a href="offer-detail.html" class="stretched-link">Travel Plan</a></h6>
										<p class="mb-0">Get up to $10,000 for lifetime limits</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Best deal END -->
				</div>	
			</aside>
			<!-- Right side content END -->
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
About hotel END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->


<!-- =======================
Footer START -->
<footer class="bg-dark pt-5">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4">

			<!-- Widget 1 START -->
			<div class="col-lg-3">
				<!-- logo -->
				<a href="index.html">
					<img class="h-40px" src="assets/images/logo-light.svg" alt="logo">
				</a>
				<p class="my-3 text-body-secondary">Departure defective arranging rapturous did believe him all had supported.</p>
				<p class="mb-2"><a href="#" class="text-body-secondary text-primary-hover"><i class="bi bi-telephone me-2"></i>+1234 568 963</a> </p>
				<p class="mb-0"><a href="#" class="text-body-secondary text-primary-hover"><i class="bi bi-envelope me-2"></i>example@gmail.com</a></p>
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
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">India</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">California</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Indonesia</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Canada</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Malaysia</a></li>
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
		<div class="row mt-5">
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
		</div>

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
					<div class="text-body-secondary text-primary-hover"> Copyrights ©2023 Booking. Build by <a href="https://www.webestica.com/" class="text-body-secondary">Webestica</a>. </div>
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

<!-- Map modal START -->
<div class="modal fade" id="mapmodal" tabindex="-1" aria-labelledby="mapmodalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<!-- Title -->
			<div class="modal-header">
				<h5 class="modal-title" id="mapmodalLabel">View Our Hotel Location</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<!-- Map -->
			<div class="modal-body p-0">
				<iframe class="w-100" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin"  style="border:0;" aria-hidden="false" tabindex="0"></iframe>	
			</div>
			<!-- Button -->
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary mb-0"><i class="bi fa-fw bi-pin-map-fill me-2"></i>View In Google Map</button>
			</div>
		</div>
	</div>
</div>
<!-- Map modal END -->

<!-- Room modal START -->
<div class="modal fade" id="roomDetail" tabindex="-1" aria-labelledby="roomDetailLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content p-0">

			<!-- Title -->
			<div class="modal-header p-3">
				<h5 class="modal-title mb-0" id="roomDetailLabel">Room detail</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<!-- Modal body -->
			<div class="modal-body p-0">

				<!-- Card START -->
				<div class="card bg-transparent p-3">
					<!-- Slider START -->
					<div class="tiny-slider arrow-round arrow-dark overflow-hidden rounded-2">
						<div class="tiny-slider-inner rounded-2 overflow-hidden" data-autoplay="true" data-arrow="true" data-dots="false" data-items="1">
							<!-- Image item -->
							<div> <img src="assets/images/gallery/16.jpg" class="rounded-2" alt="Card image"></div>

							<!-- Image item -->
							<div> <img src="assets/images/gallery/15.jpg" class="rounded-2" alt="Card image"> </div>

							<!-- Image item -->
							<div> <img src="assets/images/gallery/13.jpg" class="rounded-2" alt="Card image"> </div>

							<!-- Image item -->
							<div> <img src="assets/images/gallery/12.jpg" class="rounded-2" alt="Card image"> </div>
						</div>
					</div>
					<!-- Slider END -->

					<!-- Card header -->
					<div class="card-header bg-transparent pb-0">
						<h3 class="card-title mb-0">Deluxe Pool View</h3>
					</div>

					<!-- Card body START -->
					<div class="card-body">
						<!-- Content -->
						<p>Club rooms are well furnished with air conditioner, 32 inch LCD television and a mini bar. They have attached bathroom with showerhead and hair dryer and 24 hours supply of hot and cold running water. Complimentary wireless internet access is available. Additional amenities include bottled water, a safe and a desk.</p>
						
						<div class="row">
							<h5 class="mb-0">Amenities</h5>

							<!-- List -->
							<div class="col-md-6">
								<!-- List -->
								<ul class="list-group list-group-borderless mt-2 mb-0">
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">Swimming pool</span>
									</li>
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">Spa</span>
									</li>
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">Kids play area.</span>
									</li>
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">Gym</span>
									</li>
								</ul>
							</div>

							<!-- List -->
							<div class="col-md-6">
								<!-- List -->
								<ul class="list-group list-group-borderless mt-2 mb-0">
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">TV</span>
									</li>
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">Mirror</span>
									</li>
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">AC</span>
									</li>
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">Slippers</span>
									</li>
								</ul>
							</div>
						</div> <!-- Row END -->
					</div>
					<!-- Card body END -->
				</div>
				<!-- Card END -->
			</div>
		</div>
	</div>
</div>
<!-- Room modal END -->

<!-- Back to top -->
<div class="back-top"></div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Customer -->

<script src="./js/cus.js"></script>
<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/glightbox/js/glightbox.js"></script>
<script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
<script src="assets/vendor/choices/js/choices.min.js"></script>
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendor/sticky-js/sticky.min.js"></script>

<!-- ThemeFunctions -->
<script src="assets/js/functions.js"></script>


</body>

<!-- Mirrored from booking.webestica.com/hotel-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2023 07:36:44 GMT -->
</html>