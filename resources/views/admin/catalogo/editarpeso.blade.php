@extends('admin.master.master')

@section('contenido')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Row-->
        <!--begin::Col-->
        <div class="col-xl-12">
            <!--begin::Table Widget 5-->
            <div class="card card-flush h-xl-100">
               
                <!--begin::Card body-->
                <div class="card-body" style="text-align: center"> <h1>EDITAR PESO</h1>
                    <!--begin::Col-->
                    <div class="col-xxl-4"><br>
                        <!--begin::Engage widget 1-->
                        <div class="card h-md-100" style="text-align: center">
                            <form style="text-align: center">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
                                    </div>
                                </div><br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2"><button class="btn btn-success">Confirmar</button></div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2"><button class="btn btn-danger">Cancelar</button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end::Engage widget 1-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Table Widget 5-->
        </div>
        <!--end::Col-->
        <!--end::Row-->
    </div>
    <!--end::Container-->
    
</div>
@endsection