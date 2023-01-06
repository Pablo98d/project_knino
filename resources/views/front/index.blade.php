@extends('FRONT.master.master')
@section('contenido')
<style>
	.inicio {
		border-top-left-radius: 15px;
		border-bottom-left-radius: 15px;
	}
	.final {
		border-top-right-radius: 15px;
		border-bottom-right-radius: 15px;
	}
	.btn {
		/* outline-color: #AFD4DE; */
		/* background-color: #FF9067; */
		/* color: #FF9067; */
	}
	.efecto button {
		width: 50%;
		height: 35px;
		border: none;
		background-color: #FF9067;
		color: #ffffff;
		border-radius: 15px;
	}	
	.efecto button:hover {
		background-color: #AFD4DE;
		color: black;
	}
	.encabezado {
		background-color: #AFD4DE;
	}
	.imagen {
		width: auto;
	}
	.imagen img {
		width: 100%;
		height: 100%;
	}
	.lexp h5 {
		color: #FF9067;
	}
</style>
	<div class="container p-2 pb-8">
		<div class="row">
			<img src="{{asset('assets/img/Utilidades/Perritos_principal.png')}}" class="img-fluid">
			<div class="col-md-2">
				<div class="row encabezado inicio p-1">
					<h2 class="text-center pt-2">Experiencias</h2>
				</div>
				<div class="row p-1">
					<Select>asdasd</Select>
				</div>
			</div>
			<div class="col-md-2">
				<div class="row encabezado p-1">
					<h2 class="text-center pt-2">Paquetes</h2>
				</div>
				<div class="row p-1">
					<Select>asdasd</Select>
				</div>
			</div>
			<div class="col-md-2">
				<div class="row encabezado p-1">
					<h2 class="text-center pt-2">Humano</h2>
				</div>
				<div class="row p-1">
					<Select>asdasd</Select>
				</div>
			</div>
			<div class="col-md-2">
				<div class="row encabezado p-1">
					<h2 class="text-center pt-2">K-nino (as)</h2>
				</div>
				<div class="row p-1">
					<Select>asdasd</Select>
				</div>
			</div>
			<div class="col-md-2">
				<div class="row encabezado final p-1">
					<h2 class="text-center pt-2">Disponibilidad</h2>
				</div>
				<div class="row p-1">
					<Select>asdasd</Select>
				</div>
			</div>
			<div class="col-md-2 align-self-center text-center">
				<div class="efecto">
					<button type="button">Reservar</button>
				</div>
			</div>
		</div>
	</div>
	{{-- Carousel --}}
	<div class="container p-2 pb-8">
		<div class="row">
			{{-- Centrado del carousel --}}
			<div class="col-md-12 mx-auto">
				<div id="carouselGuarderia" class="carousel slide">
					{{-- Elementos del carousel --}}
					<div class="carousel-inner">
						{{-- Primera imagen --}}
						<div class="carousel-item active text-center">
							<div class="imagen">
								<img src="{{asset('assets/img/Utilidades/Perritos.png')}}" class="d-block">
							</div>
						</div>
						{{-- Segunda imagen --}}
						<div class="carousel-item text-center">
							<div class="imagen">
								<img src="{{asset('assets/img/Utilidades/bg4.jpg')}}" class="d-block" alt="...">
							</div>
						</div>
					</div>
					{{-- Botones para las siguientes imagenes del carousel --}}
					{{-- Anterior --}}
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselGuarderia" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					{{-- Siguiente --}}
					<button class="carousel-control-next" type="button" data-bs-target="#carouselGuarderia" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	{{-- Cuenta regresiva --}}
	<div class="container p-2 pb-8">
		<div class="row align-items-center">
			<div class="col-md-6 text-center">
				<img src="{{asset('assets/img/Utilidades/Perrito.png')}}" class="img-fluid">
			</div>
			<div class="col-md-6">
				<h1 class="text-uppercase" style="font-size: 6rem; color: #FF9067;">
					K-niños rescatados
				</h1>
				<h5 style="font-size: 17px;">
					Con tu reservación ayudas a k-niños en situación de calle a encontrar un hogar.
				</h5>
			</div>
		</div>
	</div>
	{{-- Columna de 3 --}}
	<div class="container p-2 pb-8">
		<div class="row align-items-start">
			<div class="col-md-4 p-4">
				<div class="text-right">
					<h5 style="font-size: 17px">
						En K-nin creemos que el amor transforma y los k-niños son parte de nuestra familia, por eso diseñamos un espacio interactivo para que se desarrollen al máximo y, lo más importante, sean felices. Aquí siempre serán cuidados con amor.
					</h5>
				</div>
			</div>
			<div class="col-md-4 text-left p-4">
				<div class="container lexp">
					<h1>Experiencias</h1>
					<div class="text-reset d-flex align-items-center" style="text-decoration: none">
						<img alt="Logo" src="{{asset('assets/img/Utilidades/GuarderiaIndex.png')}}" class="img-logo mr-2" width="40px"/>
						<h5 class="m-4 pt-2">Guardería</h5>
					</div>
					<div class="text-reset d-flex align-items-center">
						<img alt="Logo" src="{{asset('assets/img/Utilidades/HotelIndex.png')}}" class="img-logo mr-2" width="40px"/>
						<h5 class="m-4 pt-2">Hotel</h5>
					</div>
					<div class="text-reset d-flex align-items-center">
						<img alt="Logo" src="{{asset('assets/img/Utilidades/EsteticaIndex.png')}}" class="img-logo mr-2" width="40px"/>
						<h5 class="m-4 pt-2">Estética</h5>
					</div>
					<div class="text-reset d-flex align-items-center">
						<img alt="Logo" src="{{asset('assets/img/Utilidades/FestejoIndex.png')}}" class="img-logo mr-2" width="40px"/>
						<h5 class="m-4 pt-2">Festejos</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-left p-4">
				<div class="container">
					<h1>Contáctanos</h1>
					<a href="" class="text-reset d-flex align-items-center">
						<img alt="Logo" src="{{asset('assets/img/Utilidades/Telefono.png')}}" class="img-logo mr-2" width="40px"/>
						<h5 class="m-4 pt-2">33 1572 7208</h5>
					</a>
					<a href="" class="text-reset d-flex align-items-center">
						<img alt="Logo" src="{{asset('assets/img/Utilidades/Email.png')}}" class="img-logo mr-2" width="40px"/>
						<h5 class="m-4 pt-2">contacto@k-ninn.com</h5>
					</a>
					<a href="" class="text-reset d-flex align-items-center">
						<img alt="Logo" src="{{asset('assets/img/Utilidades/Ubicacion.png')}}" class="img-logo mr-2" width="40px"/>
						<h5 class="m-4 pt-2">Ubicación</h5>
					</a>
					</a>
				</div>
			</div>
		</div>
	</div>
	{{-- Imagen --}}
	<img src="{{asset('assets/img/Utilidades/Perritos.png')}}" class="img-fluid">
		
@endsection

