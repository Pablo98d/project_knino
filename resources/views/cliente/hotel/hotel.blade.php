@extends('cliente.master.master')

@section('header')
	<div class="text-center p-4">
		<h1 class="text-uppercase">Hotel</h1>
	</div>
@endsection

@section('contenido')
<style> 	
	.imagen {
		width: auto;
	}
	.imagen img {
		width: 100%;
		height: 100%;
	}
</style>
	<div class="container p-2">
		<div class="row align-items-center">
			{{-- Letras Izquierda --}}
			<div class="col-md-3 text-center p-4">
				<p>
					Tu k-niño tendrá las vacaciones más divertidas en un lugar seguro mientras lo cuidamos con amor. Sus días estarán llenos de juegos, actividades sensoriales y cognitivas, que contribuirán a su desarrollo integral y por las noches descansara en su habitación individual. En lugar de extrañarte tendrá la oportunidad de hacer muchos k-migos nuevos.
				</p>
			</div>
			{{-- Carousel --}}
			<div class="col-md-6">
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
			{{-- Letras Derecha --}}
			<div class="col-md-3 text-center p-4">
				<div class="row">
					<p>Incluye:</p>
					<p>● Cuidado por coaches 24/7</p>
					<p>● Check in y check out flexibles</p>
					<p>● Juegos y actividades supervisadas</p>
					<p>● Paseos (opcional)</p>
					<p>● Feromonas relajantes</p>
					<p>● Música relajante</p>
					<p>● Habitación individual equipada</p>
					<p>● Acceso a cámaras de seguridad</p>
					<p>Aplica solo para día completo</p>
				</div>
			</div>
		</div>
	</div>
@endsection