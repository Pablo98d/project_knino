@extends('admin.master.master')

@section('contenido')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Col-->
        <div class="col-xl-12">
            <!--begin::Table Widget 5-->
            <div class="card card-flush h-xl-100">
             
                <!--begin::Card body-->
                <div class="card-body">
                    Peso KG <br>
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table"><br>
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="text-dark fw-bold">ID</th>
                                <th class="text-dark fw-bold">PESO KG</th>
                                <th class="text-dark fw-bold"></th>                                
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            <tr>
                                <!--begin::Product ID-->
                                <td class="text-dark fw-bold">001 </td>
                                <!--end::Product ID-->
                                <!--begin::Date added-->
                                <td class="text-dark fw-bold">4 KG
                                </td>
                                <!--end::Date added-->
                                <td>
                                    <td>
                                        <span badge py-3 px-4 fs-7 badge-light-primary><a href="{{url('editarpeso')}}">Editar</a></span>
                                    </td>
                                    <span badge py-3 px-4 fs-7 badge-light-primary><td><a href="">Eliminar</a></td></span>
                                </td>
                                <!--end::Qty-->
                            </tr>
                            <tr>
                                <!--begin::Item-->
                                <td>
                                    <span class="text-dark fw-bold">002</span>
                                </td>
                                <!--end::Item-->
                                <!--begin::Date added-->
                                <td class="text-dark fw-bold">5.3 KG
                                </td>
                                <!--end::Date added-->
                               
                                <td>
                                    <td>
                                        <span badge py-3 px-4 fs-7 badge-light-primary><a href="{{url('editarpeso')}}">Editar</a></span>
                                    </td>
                                    <span badge py-3 px-4 fs-7 badge-light-primary><td><a href="">Eliminar</a></td></span>
                                </td>
                                <!--end::Qty-->
                            </tr>
                            <tr>
                                <!--begin::Item-->
                                <td>
                                    <span class="text-dark fw-bold">003</span>
                                </td>
                                <!--end::Item-->
                                <!--begin::Date added-->
                                <td class="text-dark fw-bold">4.2 KG
                                </td>
                                <!--end::Date added-->
                                <td>
                                    <td>
                                        <span badge py-3 px-4 fs-7 badge-light-primary><a href="{{url('editarpeso')}}">Editar</a></span>
                                    </td>
                                    <span badge py-3 px-4 fs-7 badge-light-primary><td><a href="">Eliminar</a></td></span>
                                </td>
                                <!--end::Qty-->
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Table Widget 5-->
        </div><br>
        <!--end::Col-->
        <!--end::Row-->
        <a href="{{url('nuevopeso')}}" class="btn btn-primary">NUEVO PESO</a>
    </div>
    <!--end::Container-->
    
</div>

@endsection