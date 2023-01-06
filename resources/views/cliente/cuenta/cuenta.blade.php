@extends('cliente.master.master')

@section('header')
	<div class="text-center p-4">
		<h1 class="text-uppercase">Datos personales</h1>
	</div>
@endsection

@section('contenido')
<style> 	
	.letra label {
		padding-left: 8px;
	}
</style>
	<div class="container p-2">
		<div class="row align-items-start">
			{{-- Datos del cliente --}}
			<div class="col-md-6 mx-auto">
				<div class="row letra mb-7">
					{{-- Input de Nombre --}}
					<div class="col-md-12 mt-3">
						<label class="fs-6 fw-semibold mb-2">Nombre</label>
						<input readonly type="text" name="ver_Knino" id="ver_Knino" class="form-control" value="" />
					</div>
					{{-- Input de Correo --}}
					<div class="col-md-6 mt-3">
						<label class="fs-6 fw-semibold mb-2">Correo</label>
						<input readonly type="text" name="ver_id_Humano" id="ver_id_Humano" class="form-control" value="" />
					</div>
					{{-- Input de Celular --}}
					<div class="col-md-6 mt-3">
						<label class="fs-6 fw-semibold mb-2">Celular</label>
						<input readonly type="number" name="ver_Edad" id="ver_Edad" class="form-control" value="" />
					</div>
					{{-- Select de Estado --}}
					<div class="col-4 mt-3">
						<label class="fs-6 fw-semibold form-label mb-2">Estado</label>
						<input readonly type="text" name="ver_id_Pelaje" id="ver_id_Pelaje" class="form-control" value="" />
					</div>
					{{-- Select de Municipio --}}
					<div class="col-md-4 mt-3">
						<label class="fs-6 fw-semibold mb-2">Municipio</label>
						<input readonly type="number" name="ver_Esterilizacion" id="ver_Esterilizacion" class="form-control" value="" />
					</div>
					{{-- Input de Colonia --}}
					<div class="col-4 mt-3">
						<label class="fs-6 fw-semibold form-label mb-2">Colonia</label>
						<input readonly type="text" name="ver_id_Talla" id="ver_id_Talla" class="form-control" value="" />
					</div>
					{{-- Input de Cod. Postal --}}
					<div class="col-4 mt-3">
						<label class="fs-6 fw-semibold form-label mb-2">Cod. Postal</label>
						<input readonly type="text" name="ver_id_Peso" id="ver_id_Peso" class="form-control" value="" />
					</div>
					{{-- Input de No. Exterior --}}
					<div class="col-4 mt-3">
						<label class="fs-6 fw-semibold form-label mb-2">No. Exterior</label>
						<input readonly type="text" name="ver_id_GeneroKnino" id="ver_id_GeneroKnino" class="form-control" value="" />
					</div>
					{{-- Input de No. Interior --}}
					<div class="col-4 mt-3">
						<label class="fs-6 fw-semibold form-label mb-2">No. Interior</label>
						<input readonly type="text" name="ver_id_EstatusKnino" id="ver_id_EstatusKnino" class="form-control" value="" />
					</div>
					{{-- Input de Direccion --}}
					<div class="col-12 mt-3">
						<label class="fs-6 fw-semibold form-label mb-2">Dirección</label>
						<input readonly type="text" name="ver_id_Raza" id="ver_id_Raza" class="form-control" value="" />
					</div>
					{{-- Input de Instagram --}}
					<div class="col-md-6 mt-3">
						<label class="fs-6 fw-semibold mb-2">Instagram</label>
						<input readonly type="text" name="ver_Cumpleanos" id="ver_Cumpleanos" class="form-control" value="" />
					</div>
					{{-- Input de Tiktok --}}
					<div class="col-6 mt-3">
						<label class="fs-6 fw-semibold form-label mb-2">Tiktok</label>
						<input readonly type="text" name="ver_id_Energia" id="ver_id_Energia" class="form-control" value="" />
					</div>
					{{-- Input de Nombre Emergencia --}}
					<div class="col-6 mt-3">
						<label class="fs-6 fw-semibold form-label mb-2">Nombre de Emergencia</label>
						<input readonly type="text" name="ver_id_Personalidad" id="ver_id_Personalidad" class="form-control" value="" />
					</div>
					{{-- Input de Celular Emergencia --}}
					<div class="col-md-6 mt-3">
						<label class="fs-6 fw-semibold mb-2">Celular Emergencia</label>
						<input readonly type="text" name="ver_Nota" id="ver_Nota" class="form-control" value="" />
					</div>
				</div>
			</div>
			{{-- Tablas --}}
            <div class="col-md-6 mx-auto text-center">
				<div class="tab-content">
					{{-- Tabla de K-ninos --}}
					<div class="tab-pane fade show active" id="kt_stats_widget_1_tab_1"> 
						<div class="row">
							<div class="col-md-12">
								<div class="card " style="box-shadow: 2px 3px 5px 4px rgba(80, 80, 80, 0.2);">
									{{-- Boton de agregar nuevo knino --}}
									<div class="card-header">
										<div class="card-title mt-2">
											<h2>K-ninos</h2>
											<button type="button" class="btn btn-success btn-sm ml-2" title="Agregar nuevo knino" style="position: absolute;right: 10px;" onclick='abrir_modal_knino()'>+</button>
										</div>
									</div>
									{{-- Datos de la tabla knino --}}
									<div class="card-body pt-0">
										<div class="table-responsive">
											<table class="table align-middle gs-0 gy-4 my-0">
												<thead>
													<tr class="fs-7 fw-bold text-gray-800 text-uppercase">
														<th class="pe-0 pt-3">Nombre Knino</th>
														<th class="pe-0 pt-3">RAZA</th>
														<th class="pe-0 pt-3">GENERO</th>
														<th class="pe-0 pt-3">ESTATUS</th>
														<th class="pe-0 pt-3">CUMPLEAÑOS</th>
														<th class="pe-0 pt-3 text-center">ACCIONES</th>
													</tr>
												</thead>
												<tbody class="fs-7 fw-bold text-gray-600" id="listar_kninos">
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content pt-4">
					{{-- Tabla de Reservaciones --}}
					<div class="tab-pane fade show active" id="kt_stats_widget_1_tab_1"> 
						<div class="row">
							<div class="col-md-12">
								<div class="card " style="box-shadow: 2px 3px 5px 4px rgba(80, 80, 80, 0.2);">
									{{-- Boton de agregar nueva reservacion --}}
									<div class="card-header">
										<div class="card-title mt-2">
											<h2>Reservaciones</h2>
											<button type="button" class="btn btn-success btn-sm ml-2" title="Agregar nuevo knino" style="position: absolute;right: 10px;" onclick='abrir_modal_knino()'>+</button>
										</div>
									</div>
									{{-- Datos de la tabla reservaciones --}}
									<div class="card-body pt-0">
										<div class="table-responsive">
											<table class="table align-middle gs-0 gy-4 my-0">
												<thead>
													<tr class="fs-7 fw-bold text-gray-800 text-uppercase">
														<th class="pe-0 pt-3">Experiencia</th>
														<th class="pe-0 pt-3">Fecha</th>
														<th class="pe-0 pt-3">Knino</th>
														<th class="pe-0 pt-3">Detalles</th>
														<th class="pe-0 pt-3 text-center">ACCIONES</th>
													</tr>
												</thead>
												<tbody class="fs-7 fw-bold text-gray-600" id="listar_kninos">
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection