<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../"/>
		<title>Registrarse</title>
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
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('http://localhost/project_knino/public/assets/img/auth/bg4.jpg'); } [data-theme="dark"] body { background-image: url('assets/media/auth/bg4-dark.jpg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-up -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						
						<!--end::Logo-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-center w-lg-50 p-10">
					<!--begin::Card-->
					<div class="card rounded-3 w-md-550px">
						<!--begin::Card body-->
						<div class="card-body p-10 p-lg-20">
							<!--begin::Form-->
							{{-- <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="../../demo9/dist/authentication/layouts/creative/sign-in.html"> --}}
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Registrarse</h1>
									<!--end::Title-->
								</div>
								<!--begin::Heading-->
								{{-- <x-guest-layout>
                                    <x-auth-card>
                                        <x-slot name="logo">
                                        </x-slot> --}}
                                
                                        <form method="POST" action="{{ route('register') }}" class="form w-100" novalidate="novalidate" id="kt_sign_up_form" >
                                            @csrf
                                
                                            <!-- Name -->
                                            <div>
                                                
                                                <x-input-label for="NombreUsuario" :value="__('Nombre Usuario')" />
                                
                                                <x-text-input id="NombreUsuario" class="form-control bg-transparent" type="text" name="NombreUsuario" :value="old('NombreUsuario')" required autofocus />
                                
                                                <x-input-error :messages="$errors->get('NombreUsuario')" class="mt-2" />
                                            </div>
                                
                                            <!-- Apellidos user -->
                                            <div class="mt-4">
                                                <x-input-label for="ApellidosUsuario" :value="__('Apellidos Usuario')" />
                                
                                                <x-text-input id="ApellidosUsuario" class="form-control bg-transparent" type="text" name="ApellidosUsuario" :value="old('ApellidosUsuario')" required />
                                
                                                <x-input-error :messages="$errors->get('ApellidosUsuario')" class="mt-2" />
                                            </div>
                                
                                            <!-- Email Address -->
                                            <div class="mt-4">
                                                <x-input-label for="email" :value="__('Email Usuario')" />
                                
                                                <x-text-input id="email" class="form-control bg-transparent" type="email" name="email" :value="old('email')" required />
                                
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                
                                            <!-- Password -->
                                            <div class="mt-4">
                                                <x-input-label for="password" :value="__('Contraseña')" />
                                
                                                <x-text-input id="password" class="form-control bg-transparent"
                                                                type="password"
                                                                name="password"
                                                                required autocomplete="new-password" />
                                
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                
                                            <!-- Confirm Password -->
                                            <div class="mt-4">
                                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                
                                                <x-text-input id="password_confirmation" class="form-control bg-transparent"
                                                                type="password"
                                                                name="password_confirmation" required />
                                
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div><br>

                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                                    <a class="underline hover:text-gray-900" href="{{ route('login') }}">
                                                        {{ __('Regresar al login') }}
                                                    </a>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                                    <x-primary-button class="indicator-label">
                                                        {{ __('Register') }}
                                                    </x-primary-button>
                                                </div>
                                            </div>
                                        </form>
                                    {{-- </x-auth-card>
                                </x-guest-layout> --}}
							{{-- </form> --}}
							<!--end::Form-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-up-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
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


