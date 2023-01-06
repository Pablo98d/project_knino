<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../"/>
		<title>Iniciar Sesion</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/styleFront.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<style>
			body {
				background-color: #FFF8F2;
				/* display: flex; */
			}
			.dropdown:hover .dropdown-menu {
				display: block;
			}
			.dropdown-menu a:hover {
				background-color: #AFD4DE;
			}
			footer {
				margin-top: auto;
			}
		</style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body>
		{{-- Imagen principal --}}
		<div class="container text-center">
			<a href="{{route('front_inicio')}}">
				<img src="{{asset('assets/img/Utilidades/Azul.png')}}" width="250" height="auto" class="img-fluid">
			</a>
		</div>
		{{-- Barra de navegación --}}
		<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #F2906E;">
			<div class="container-fluid">
				{{-- Boton para la página responsiva --}}
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false">
					<span class="navbar-toggler-icon"></span>
				</button>
				{{-- Letras del nav --}}
				<div class="collapse navbar-collapse" id="menu">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white text-uppercase" id="menuexperiencias" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							  Experiencias
							</a>
							<ul class="dropdown-menu" aria-labelledby="menuexperiencias">
								<li>
									<a class="dropdown-item" href="{{route('exp_guarderia')}}">Guardería</a>
								</li>
							  	<li>
									<a class="dropdown-item" href="{{route('exp_hotel')}}">Hotel</a>
								</li>
							  	<li>
									<a class="dropdown-item" href="{{route('exp_estetica')}}">Estética</a>
								</li>
							  	<li>
									<a class="dropdown-item" href="{{route('exp_festejo')}}">Festejos</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="{{route('instalaciones')}}" class="nav-link text-white pl-4 text-uppercase">
								Instalaciones
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white text-uppercase" id="menuexperiencias" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							  Nosotros
							</a>
							<ul class="dropdown-menu" aria-labelledby="menuexperiencias">
							  	<li>
									<a class="dropdown-item" href="{{route('historia')}}">Nuestra Historia</a>
								</li>
							  	<li>
									<a class="dropdown-item" href="{{route('equipo')}}">Únete al Equipo</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="{{route('preguntas')}}" class="nav-link text-white text-uppercase">
								Preguntas Frecuentes
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('ubicacion')}}" class="nav-link text-white text-uppercase">
								Ubicación
							</a>
						</li>
					</ul>
				</div>
				{{-- Iniciar sesion --}}
				<div class="dropdown-center">
					<button class="btn bg-transparent dropdown-toggle" id="menuperfil" type="button" data-bs-toggle="dropdown" aria-expanded="false">
						{{-- Centered dropdown --}}
						<img src="{{asset('assets/img/Utilidades/usuario.png')}}" width="30">
					</button>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="menuperfil">
						<li><a class="dropdown-item" href="{{route('login')}}">Iniciar sesion</a></li>
						<li><a class="dropdown-item" href="{{route('register')}}">Registrarse</a></li>
					</ul>
				</div>
			</div>
		</nav>

		@yield('header')
					
		@yield('contenido')

		<footer  style="background-color: #FF9D73">
			<div class="container pt-4 pb-2">
				<div class="row align-items-center">
					<div class="col-md-4 text-start">
						<img src="{{asset('assets/media/icons/duotune/social/soc004.svg')}}" class="p-2">
						<img src="{{asset('assets/media/icons/duotune/social/soc008.svg')}}" class="p-2">
						<img src="{{asset('assets/media/icons/duotune/social/soc005.svg')}}" class="p-2">
					</div>
					<div class="col-md-4 text-center">
						<div class="text-center text-white">
							Aviso de privacidad
						</div>
					</div>
					<div class="col-md-4 text-end">
						<div class="text-end text-white">
							Terminos y condiciones
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets/js/custom/authentication/sign-up/general.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
