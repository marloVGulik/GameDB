<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--	<meta charset="utf-8">-->
<!--	<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--	<title>MANEGE</title>	-->
<!--	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->
<!--</head>-->
<!--<body>-->
<!--	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">-->
<!--		<a href="--><?//= URL ?><!--home" class="navbar-brand">Manege</a>-->
<!--		<ul class="navbar-nav ml-auto">-->
<!--			<li class="nav-item mx-1"><a href="--><?//= URL ?><!--home" class="nav-link btn btn-outline-primary">Home</a></li>-->
<!--			<li class="nav-item mx-1"><a href="--><?//= URL ?><!--horses" class="nav-link btn btn-outline-primary">Horses</a></li>-->
<!--			<li class="nav-item mx-1"><a href="--><?//= URL ?><!--riders" class="nav-link btn btn-outline-primary">Planning</a></li>-->
<!--			--><?php //if(isset($_SESSION['loggedInRName'])) {
//				if($_SESSION['adminCode'] > 0) { ?>
<!--					<li class="nav-item mx-1"><a href="--><?//= URL ?><!--adminPanel" class="nav-link btn btn-outline-danger">Admin panel</a></li>-->
<!--				--><?php //} ?>
<!--				<li class="nav-item mx-1"><a href="--><?//= URL ?><!--userportal/logout" class="nav-link btn btn-outline-primary">Log out: --><?//= $_SESSION['loggedInRName'] ?><!--</a></li>-->
<!--			--><?php //} ?>
<!--		</ul>-->
<!--	</nav>-->


<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>GameDB</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script defer src="theme.js"></script>
	<link rel="stylesheet" href="<?= URL ?>public/css/style.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
</head>

<body class="dark">
<nav class="navbar">
	<ul class="navbar-nav">
		<li class="logo">
			<a href="<?= URL ?>" class="nav-link">
				<span class="link-text logo-text">gamedb</span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
					<g class="fa-group">
						<path
								fill="currentColor"
								d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
								class="fa-secondary"
						></path>
						<path
								fill="currentColor"
								d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
								class="fa-primary"
						></path>
					</g>
				</svg>
			</a>
		</li>

		<li class="nav-item">
			<a href="<?= URL ?>games" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 650 650">
					<g class="fa-group">
						<path
								fill="currentColor"
								d="M638.59 368.22l-33.37-211.59c-8.86-50.26-48.4-90.77-100.66-103.13h-.07a803.19 803.19 0 0 0-369 0C83.17 65.86 43.64 106.36 34.78 156.63L1.41 368.22C-8.9 426.73 38.8 480 101.51 480c49.67 0 93.77-30.07 109.48-74.64l7.52-21.36h203l7.49 21.36C444.72 449.93 488.82 480 538.49 480c62.71 0 110.41-53.27 100.1-111.78zM280 236a12 12 0 0 1-12 12h-52v52a12 12 0 0 1-12 12h-24a12 12 0 0 1-12-12v-52h-52a12 12 0 0 1-12-12v-24a12 12 0 0 1 12-12h52v-52a12 12 0 0 1 12-12h24a12 12 0 0 1 12 12v52h52a12 12 0 0 1 12 12zm152 76a40 40 0 1 1 40-40 40 40 0 0 1-40 40zm64-96a40 40 0 1 1 40-40 40 40 0 0 1-40 40z"
								class="fa-secondary">
						</path>
						<path
								fill="currentColor"
								d="M280 236a12 12 0 0 1-12 12h-52v52a12 12 0 0 1-12 12h-24a12 12 0 0 1-12-12v-52h-52a12 12 0 0 1-12-12v-24a12 12 0 0 1 12-12h52v-52a12 12 0 0 1 12-12h24a12 12 0 0 1 12 12v52h52a12 12 0 0 1 12 12z"
								class="fa-primary">
						</path>
					</g>
				</svg>
				<span class="link-text">Games</span>
			</a>
		</li>

		<li class="nav-item">
			<a href="<?= URL ?>genres" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
					<g class="fa-group">
						<path
								fill="currentColor"
								d="M560,128H528a15.99954,15.99954,0,0,0-16,16v80H480V176a15.99954,15.99954,0,0,0-16-16H416V96h48a16.00079,16.00079,0,0,0,16-16V48a15.99954,15.99954,0,0,0-16-16H432a15.99954,15.99954,0,0,0-16,16V64H368a15.99954,15.99954,0,0,0-16,16v48H224V80a15.99954,15.99954,0,0,0-16-16H160V48a15.99954,15.99954,0,0,0-16-16H112A15.99954,15.99954,0,0,0,96,48V80a16.00079,16.00079,0,0,0,16,16h48v64H112a15.99954,15.99954,0,0,0-16,16v48H64V144a15.99954,15.99954,0,0,0-16-16H16A15.99954,15.99954,0,0,0,0,144V272a16.00079,16.00079,0,0,0,16,16H64v80a16.00079,16.00079,0,0,0,16,16h48v80a16.00079,16.00079,0,0,0,16,16h96a16.00079,16.00079,0,0,0,16-16V432a15.99954,15.99954,0,0,0-16-16H192V384H384v32H336a15.99954,15.99954,0,0,0-16,16v32a16.00079,16.00079,0,0,0,16,16h96a16.00079,16.00079,0,0,0,16-16V384h48a16.00079,16.00079,0,0,0,16-16V288h48a16.00079,16.00079,0,0,0,16-16V144A15.99954,15.99954,0,0,0,560,128ZM224,320H160V224h64Zm192,0H352V224h64Z"
								class="fa-secondary"
						></path>
						<path
								fill="currentColor"
								d="M160,320h64V224H160Zm192-96v96h64V224Z"
								class="fa-primary"
						></path>
					</g>
				</svg>
				<span class="link-text">Genres</span>
			</a>
		</li>

		<li class="nav-item">
			<a href="#" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
					<g class="fa-group">
						<path
								fill="currentColor"
								d="M560,128H528a15.99954,15.99954,0,0,0-16,16v80H480V176a15.99954,15.99954,0,0,0-16-16H416V96h48a16.00079,16.00079,0,0,0,16-16V48a15.99954,15.99954,0,0,0-16-16H432a15.99954,15.99954,0,0,0-16,16V64H368a15.99954,15.99954,0,0,0-16,16v48H224V80a15.99954,15.99954,0,0,0-16-16H160V48a15.99954,15.99954,0,0,0-16-16H112A15.99954,15.99954,0,0,0,96,48V80a16.00079,16.00079,0,0,0,16,16h48v64H112a15.99954,15.99954,0,0,0-16,16v48H64V144a15.99954,15.99954,0,0,0-16-16H16A15.99954,15.99954,0,0,0,0,144V272a16.00079,16.00079,0,0,0,16,16H64v80a16.00079,16.00079,0,0,0,16,16h48v80a16.00079,16.00079,0,0,0,16,16h96a16.00079,16.00079,0,0,0,16-16V432a15.99954,15.99954,0,0,0-16-16H192V384H384v32H336a15.99954,15.99954,0,0,0-16,16v32a16.00079,16.00079,0,0,0,16,16h96a16.00079,16.00079,0,0,0,16-16V384h48a16.00079,16.00079,0,0,0,16-16V288h48a16.00079,16.00079,0,0,0,16-16V144A15.99954,15.99954,0,0,0,560,128ZM224,320H160V224h64Zm192,0H352V224h64Z"
								class="fa-secondary"
						></path>
						<path
								fill="currentColor"
								d="M160,320h64V224H160Zm192-96v96h64V224Z"
								class="fa-primary"
						></path>
					</g>
				</svg>
				<span class="link-text">Merchendise</span>
			</a>
		</li>

		<li class="nav-item">
			<?php if($_SESSION['loggedIn'] < 0) { ?>
			<a href="<?= URL ?>userPortal/login" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 660 660">
					<g class="fa-group">
						<path fill="currentColor" d="M608 288h-32v-80a80 80 0 0 0-160 0v80h-32a32 32 0 0 0-32 32v160a32 32 0 0 0 32 32h224a32 32 0 0 0 32-32V320a32 32 0 0 0-32-32zM496 432a32 32 0 1 1 32-32 32 32 0 0 1-32 32zm32-144h-64v-80a32 32 0 0 1 64 0z" class="fa-secondary"></path>
						<path fill="currentColor" d="M224 256A128 128 0 1 0 96 128a128 128 0 0 0 128 128zm96 64a63.08 63.08 0 0 1 8.1-30.5c-4.8-.5-9.5-1.5-14.5-1.5h-16.7a174.08 174.08 0 0 1-145.8 0h-16.7A134.43 134.43 0 0 0 0 422.4V464a48 48 0 0 0 48 48h280.9a63.54 63.54 0 0 1-8.9-32z" class="fa-primary"></path>
					</g>
				</svg>
				<span class="link-text">Login</span>
			</a>
			<a href="<?= URL ?>userPortal/register" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 660 660">
					<g class="fa-group">
						<path fill="currentColor" d="M608 288h-32v-80a80 80 0 0 0-160 0v80h-32a32 32 0 0 0-32 32v160a32 32 0 0 0 32 32h224a32 32 0 0 0 32-32V320a32 32 0 0 0-32-32zM496 432a32 32 0 1 1 32-32 32 32 0 0 1-32 32zm32-144h-64v-80a32 32 0 0 1 64 0z" class="fa-secondary"></path>
						<path fill="currentColor" d="M224 256A128 128 0 1 0 96 128a128 128 0 0 0 128 128zm96 64a63.08 63.08 0 0 1 8.1-30.5c-4.8-.5-9.5-1.5-14.5-1.5h-16.7a174.08 174.08 0 0 1-145.8 0h-16.7A134.43 134.43 0 0 0 0 422.4V464a48 48 0 0 0 48 48h280.9a63.54 63.54 0 0 1-8.9-32z" class="fa-primary"></path>
					</g>
				</svg>
				<span class="link-text">Register</span>
			</a>
			<?php } else { ?>
			<a href="<?= URL ?>userPortal/logout" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 660 660">
					<g class="fa-group">
						<path fill="currentColor" d="M608 288h-32v-80a80 80 0 0 0-160 0v80h-32a32 32 0 0 0-32 32v160a32 32 0 0 0 32 32h224a32 32 0 0 0 32-32V320a32 32 0 0 0-32-32zM496 432a32 32 0 1 1 32-32 32 32 0 0 1-32 32zm32-144h-64v-80a32 32 0 0 1 64 0z" class="fa-secondary"></path>
						<path fill="currentColor" d="M224 256A128 128 0 1 0 96 128a128 128 0 0 0 128 128zm96 64a63.08 63.08 0 0 1 8.1-30.5c-4.8-.5-9.5-1.5-14.5-1.5h-16.7a174.08 174.08 0 0 1-145.8 0h-16.7A134.43 134.43 0 0 0 0 422.4V464a48 48 0 0 0 48 48h280.9a63.54 63.54 0 0 1-8.9-32z" class="fa-primary"></path>
					</g>
				</svg>
				<span class="link-text">Logout: <?= $_SESSION['loggedInRName'] ?></span>
			</a>
			<?php } ?>
		</li>
	</ul>
	</a>
	</li>
	</ul>
    </nav>
	<main>