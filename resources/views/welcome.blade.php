<!DOCTYPE html>
<html lang="en">
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
		<link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		{{-- <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" /> --}}
		<link href="{{asset('assets/css/styleMain.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
				
		<header class="hero">
			<center>
				<img src="{{asset('assets/img/Logo/Azul.jpg')}}">
			</center>
			{{-- <style>body { background-image: url('assets/img/auth/bg4.jpg'); } [data-theme="dark"] body { background-image: url('assets/media/auth/bg4-dark.jpg'); }</style> --}}
		</header>
		
		<div class="nav-bg">
			<nav class="navegacion-principal contenedor">
				<ul class="menu-horizontal">
					<li>
						<a href="#">Experiencias</a>
						<ul class="menu-vertical">
							<li><a href="#">Guardería</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Instalaciones</a>
					</li>
					<li>
						<a href="#">Nosotros</a>
					</li>
					<li>
						<a href="#">Preguntas frecuentes</a>
					</li>
					<li>
						<a href="#">Ubicación</a>
					</li>
					<li>
						<a href="#">Iniciar sesion</a>
					</li>
				</ul>
			</nav>
		</div>

		<article>
			<p>Cuidando con amor</p>
			<nav class="navegacion-secundaria contenedor-secundario">
				<a>Experiencias</a>
				<a>Humano</a>
				<a>K-nino</a>
				<a>Detalles</a>
				<a>Paquetes</a>
				<a>Agrega otra Experiencia</a>
				<a>¡Disponibilidad!</a>
			</nav>
			<nav class="navegacion-opciones contenedor">
				<select name="" id="">
					<option value="">Guardería</option>
					<option value="">Hotel</option>
					<option value="">Estética</option>
					<option value="">Festejos</option>
				</select>
				<select name="" id="">Humanos</select>
				<select name="" id="">K-ninos</select>
				<a>Detalles</a>
				<a>Paquetes</a>
				<a>Agrega otra Experiencia</a>
				<a>¡Disponibilidad!</a>
			</nav>
		</article>
		<article>
			<p>Video</p>
		</article>
		<article>
			<p>Conteo</p>
		</article>
		<article>
			<div class="cuarta-seccion contenedor">
				<div class="datos">
					<p class="text-start m-5">
						En <span>K-ninn</span> creemos que el amor transforma y los k-niños son parte de nuestra familia, por eso diseñamos un espacio interactivo para que se desarrollen
						al máximo y, lo más importante, sean felices. Aquí siempre seran cuidados con amor.
					</p>
				</div>
				<div class="datos columna">
					<h4>Experiencias</h4>
				</div>
				<div class="datos columna">
					<h4>Contáctanos</h4>
				</div>
			</div>
		</article>
		<article class="hero2">
			<img src="{{asset('assets/img/Utilidades/Perritos.png')}}" alt="">
		</article>
		<footer>
			<div class="contenido-footer">
				<div class="informacion">
					{{-- <center> --}}
						<img src="{{asset('assets/media/icons/duotune/social/soc004.svg')}}" alt="">
						<img src="{{asset('assets/media/icons/duotune/social/soc008.svg')}}" alt="">
						<img src="{{asset('assets/media/icons/duotune/social/soc005.svg')}}" alt="">
					{{-- </center> --}}
				</div>
				<h4>Aviso de privacidad</h4>
				<h4>Terminos y condiciones</h4>
			</div>
		</footer>
		{{-- <div class="text-center mb-11">
			<!--begin::Title-->
			<h1 class="text-dark fw-bolder mb-3">
				¡Bienvenido a Kninn
			</h1>
			@if (Route::has('login'))
				<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
					@auth
						<a href="{{ url('/admin/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Ir a mi cuenta</a>
					@else
						<a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar sesión </a>
						/
						@if (Route::has('register'))
							<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Crear cuenta</a>
						@endif
					@endauth
				</div>
			@endif
			<!--end::Title-->
		</div> --}}

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
</html>
