@extends('FRONT.master.master')

@section('header')
	<div class="text-center p-4">
		<h1 class="text-uppercase">Guardería</h1>
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
		<div class="row">
			{{-- Centrado del carousel --}}
			<div class="col-md-6 mx-auto">
				<div id="carouselGuarderia" class="carousel slide">
					{{-- Elementos del carousel --}}
					<div class="carousel-inner">
						{{-- Primera imagen --}}
						<div class="carousel-item active text-center">
							<div class="imagen">
								<img src="{{asset('assets/img/Utilidades/Perritos.png')}}" class="d-block">
							</div>
							{{-- Descripcion --}}
							<P class="p-2">
								Tu k-niño tendrá un día lleno juegos, actividades sensoriales y cognitivas que contribuirán a su desarrollo integral. Mejorará su socialización con otros humanos y k-niños, estimulará sus sentidos, ejercitará su mente y cuerpo en un ambiente seguro y divertido, además recibirá muchos chiqueos.
							</P>
						</div>
						{{-- Segunda imagen --}}
						<div class="carousel-item text-center">
							<div class="imagen">
								<img src="{{asset('assets/img/Utilidades/bg4.jpg')}}" class="d-block" alt="...">
							</div>
							{{-- Descripcion --}}
							<P class="p-2">
								Nuestro programa fue creado basado en estudios de comportamiento k-nino y es una combinación de estimulación y descanso.
							</P>
						</div>
						{{-- Tercera imagen --}}
						<div class="carousel-item">
							<div class="container">
								<div class="row">
									<div class="col-md-6 mx-auto">
										<div class="col-md-4 m-4 mx-auto">
											<p>Programa</p>
										</div>
										<div class="row m-2">
											<p>● Bienvenida</p>
											<p>● Juego abierto</p>
											<p>● Actividad cognitiva</p>
											<p>● Practica de habilidades</p>
											<p>● Practica de habilidades</p>
											<p>● Comida</p>
											<p>● Actividad sensorial</p>
											<p>● Descanso</p>
											<p>● Juego abierto</p>
										</div>
										<div class="col-md-8 m-4 mx-auto">
											<p>Aplica solo para día completo</p>
										</div>
									</div>
								</div>
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
@endsection