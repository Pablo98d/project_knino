@extends('cliente.master.master')

@section('header')
	<div class="text-center p-4">
		<h1 class="text-uppercase">Instalaciones</h1>
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
			<div class="col-md-6 mx-auto text-center">
				<p>
					*Esperando la descripción*
				</p>
			</div>
		</div>
		<div class="row align-items-center">
			{{-- Carousel --}}
			<div class="col-md-6 mx-auto">
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
@endsection