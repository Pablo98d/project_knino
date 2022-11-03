@extends('admin.master.master')
@section('header')
    <div id="kt_header" class="header py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}">
        <div class="header-container container-xxl">
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
                <h1 class="d-flex flex-column text-dark fw-bold my-1">
                    <span class="text-white fs-1">Paquetes estética</span>
                </h1>
            </div>
            <div class="d-flex align-items-center flex-wrap">
                <div class="header-search py-3 py-lg-0 me-3">
                    <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-250px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="false" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                        <form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
                            <input type="hidden" />
                            <span class="svg-icon svg-icon-2 search-icon position-absolute top-50 translate-middle-y ms-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="currentColor" />
                                    <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="currentColor" />
                                </svg>
                            </span>
                            <input type="text" class="form-control custom-form-control ps-13" name="search" value="" placeholder="Buscar K-ninn" data-kt-search-element="input" />
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                            </span>
                            <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
                                <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                            </span>
                        </form>
                    </div>
                </div>
                <div class="d-flex align-items-center py-3 py-lg-0">
                    <div class="me-3">
                        <a href="#" class="btn btn-icon btn-custom btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                            <span class="svg-icon svg-icon-1 svg-icon-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor" />
                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor" />
                                </svg>
                            </span>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="{{asset('assets/media/avatars/300-1.jpg')}}" />
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold d-flex align-items-center fs-5">{{Auth::user()->NombreUsuario}}</div>
                                        <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">Administrador</a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item px-5">
                                <a href="../../demo9/dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Cerrar sesión</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center me-3">
                        <a href="#" class="btn btn-icon btn-custom btn-active-color-primary" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                            <span class="svg-icon theme-light-show svg-icon-2">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55.499 55.499" style="enable-background:new 0 0 55.499 55.499;" xml:space="preserve">
                                    <path  d="M55.499,30.012c0-4.468-3.623-8.091-8.092-8.091c-2.996,0-5.606,1.633-7.006,4.055l-17.01-11.42 c0.31-0.859,0.49-1.783,0.49-2.752c0-4.469-3.623-8.092-8.092-8.092s-8.094,3.623-8.094,8.092c0,2.324,0.984,4.41,2.553,5.887 c-0.689-0.189-1.408-0.299-2.156-0.299C3.623,17.392,0,21.015,0,25.484c0,4.471,3.623,8.092,8.092,8.092c2.992,0,5.6-1.625,7-4.041 L32.069,41.05c-0.287,0.83-0.449,1.717-0.449,2.645c0,4.473,3.623,8.092,8.092,8.092c4.47,0,8.093-3.619,8.093-8.092 c0-2.322-0.983-4.41-2.552-5.885c0.687,0.188,1.406,0.299,2.154,0.299C51.876,38.107,55.499,34.484,55.499,30.012z" fill="currentColor"/>
                                </svg>
                            </span>
                            <span class="svg-icon theme-dark-show svg-icon-2">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55.499 55.499" style="enable-background:new 0 0 55.499 55.499;" xml:space="preserve">
                            </svg>
                            </span>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-175px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
                                                <path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
                                                <path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
                                                <path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
                                                <path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
                                                <path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
                                                <path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
                                                <path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
                                                <path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="menu-title">Dia</span>
                                </a>
                            </div>
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
                                                <path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
                                                <path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
                                                <path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="menu-title">Noche</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('contenido')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container-xxl" id="kt_content_container">
        <div class="card">
            <div class="card card-flush mb-xxl-10">
                <div class="card-body">
                    <ul class="nav nav-pills nav-pills-custom mb-3">
                        <li class="nav-item mb-3 me-3 me-lg-6">
                            <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_1">
                                <div class="nav-icon">
                                    <img alt="" src="assets/media/svg/brand-logos/beats-electronics.svg" class="" />
                                </div>
                                <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Servicios</span>
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                            </a>
                        </li>
                        <li class="nav-item mb-3 me-3 me-lg-6">
                            <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_2">
                                <div class="nav-icon">
                                    <img alt="Logo" src="assets/media/svg/brand-logos/amazon.svg" class="theme-light-show" />
                                    <img alt="Logo" src="assets/media/svg/brand-logos/amazon-dark.svg" class="theme-dark-show" />
                                </div>
                                <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Tallas</span>
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                            </a>
                        </li>
                        <li class="nav-item mb-3 me-3 me-lg-6">
                            <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_3">
                                <div class="nav-icon">
                                    <img alt="" src="assets/media/svg/brand-logos/bp-2.svg" class="" />
                                </div>
                                <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Peso</span>
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                            </a>
                        </li>
                        <li class="nav-item mb-3 me-3 me-lg-6">
                            <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_4">
                                <div class="nav-icon">
                                    <img alt="" src="assets/media/svg/brand-logos/slack-icon.svg" class="nav-icon" />
                                </div>
                                <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Pelaje</span>
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_stats_widget_1_tab_1">
                            <div class="table-responsive">
                                <button type="button" class="btn btn-primary btn-sm mt-2 mb-2" data-bs-toggle="modal"  data-bs-target="#modal_servicio">Crear servicio</button>
                                <table class="table align-middle gs-0 gy-4 my-0">
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-500">
                                            <th class=" min-w-70px pt-3">ID</th>
                                            <th class="min-w-50px d-block pt-3">NOMBRE</th>
                                            <th class="min-w-140px pt-3">TALLA</th>
                                            <th class="pe-0 min-w-120px pt-3">PESO</th>
                                            <th class="pe-0 min-w-120px pt-3">PELAJE</th>
                                            <th class="pe-0 min-w-120px pt-3">PRECIO</th>
                                            <th class="pe-0 text-center min-w-100px pt-3">ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody id="listar_servicios">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_stats_widget_1_tab_2">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-7">
                                        {{-- <div class="card" >
                                            <div class="card-body"> --}}
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle gs-0 gy-4 my-0">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fs-7 fw-bold text-gray-500">
                                                                <th class="p-0 min-w-20px d-block pt-3">ID</th>
                                                                <th class="min-w-20px pt-3">NOMBRE TALLA</th>
                                                                <th class="pe-0  min-w-50px pt-3">ACCIÓN</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">001</a>
                                                                </td>
                                                                <td class="">
                                                                    <span class="badge badge-light-success fs-7 fw-bold">MINI</span>
                                                                </td>
                                                                <td class="">
                                                                    <button class="btn btn-danger btn-sm">
                                                                        Editar
                                                                    </button>
                                                                    <button class="btn btn-danger btn-sm">
                                                                        Eliminar
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                            {{-- </div>
                                        </div> --}}
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card" style="box-shadow: 2px 3px 5px 4px rgba(80, 80, 80, 0.2);">
                                            <div class="card-body">
                                                <form class="form" method="POST" action="{{url('admin/guardar-guarderia')}}"  id="registro-guarderia" onsubmit='return validar()'>
                                                    @csrf
                                                
                                                    <input type="hidden" name="id_PaqueteGuarderia" value="Insertar" id="id_PaqueteGuarderia">
                                                    <!--begin::Modal header-->
                                                    {{-- <div class="modal-header" id="modal_servicio_header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bold" id="id_titulo_paquete">Agregar nuevo paquete</h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        
                                                        <!--end::Close-->
                                                    </div> --}}
                                                    <!--end::Modal header-->
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body ">
                                                        <!--begin::Scroll-->
                                                        <div class="scroll-y me-n7 pe-7" id="modal_servicio_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#modal_servicio_header" data-kt-scroll-wrappers="#modal_servicio_scroll" data-kt-scroll-offset="300px">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fs-6 fw-semibold mb-2">Nombre</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" class="form-control form-control-solid" placeholder="Paquete" name="NombrePaquete" id="NombrePaquete" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                          
                                                            
                                                        </div>
                                                        <!--end::Scroll-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                    <!--begin::Modal footer-->
                                                    <div class="modal-footer flex-center">
                                                        <!--begin::Button-->
                                                        {{-- <button type="reset" onclick="cerrar_modal_add_user()" class="btn btn-light me-3">Cancelar</button> --}}
                                                        <!--end::Button-->
                                                        <!--begin::Button-->
                                                        <button type="submit" id="btn_paquete"  class="btn btn-primary">
                                                            <span class="indicator-label">Registrar Servicio</span>
                                                            <span class="indicator-progress">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
                                                        </button>
                                                        <!--end::Button-->
                                                    </div>
                                                    <!--end::Modal footer-->
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--begin::Table container-->
                            <!--end::Table container-->
                        </div>
                        <div class="tab-pane fade" id="kt_stats_widget_1_tab_3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card " style="box-shadow: 2px 3px 5px 4px rgba(80, 80, 80, 0.2);">
                                        <div class="card-header">
                                            <div class="card-title mt-2">
                                                <h2>Tallas</h2> 
                                                <button type="button" class="btn btn-success btn-sm ml-2" style="position: absolute;right: 10px;" onclick="talla()">+</button>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                                    <!--begin::Table body-->
                                                    <tbody class="fw-semibold text-gray-600" id="listar_tallas">
                                                        <tr>
                                                            <td class="text-muted">
                                                                001
                                                            </td>
                                                            <td class="fw-bold text-start">Mini</td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_stats_widget_1_tab_4">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-500">
                                            <th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
                                            <th class="text-end min-w-140px pt-3">STATUS</th>
                                            <th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge badge-light-success fs-7 fw-bold">Sent</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge badge-light-success fs-7 fw-bold">Sent</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal_servicio" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <div class="modal-content">
                    <form class="form" method="POST" action="{{url('admin/guardar-servicio')}}"  id="guardar-servicio" onsubmit='return validar()'>
                        @csrf
                    
                        <input type="hidden" name="id_PaqueteEstetica" value="Insertar" id="id_PaqueteEstetica">
                        <div class="modal-header" id="modal_servicio_header">
                            <h2 class="fw-bold" id="id_titulo_servicio">Crear servicio</h2>
                            
                            <div id="modal_servicio_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                <button onclick="cerrar_modal_servicio()" style="background: transparent;border:none" type="button">
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>

                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="modal-body  px-lg-17 mb-4" >
                            <div class="scroll-y me-n7 pe-7" id="modal_servicio_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#modal_servicio_header" data-kt-scroll-wrappers="#modal_servicio_scroll" data-kt-scroll-offset="300px">
                                <div class="fv-row mb-1">
                                    <label class="required fs-6 fw-semibold mb-2">Servicio</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="Servicio" name="Servicio" id="Servicio" value="" />
                                </div>
                                <div class="fv-row mb-7">
                                    <div class="row fv-row">
                                        <div class="col-6 mt-3">
                                            <label class="required fs-6 fw-semibold form-label mb-2">Talla</label>
                                            <select name="id_Talla" id="id_Talla" class="form-select form-select-solid" data-control="select2" data-hide-search="true" >
                                                
                                            </select>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <label class="required fs-6 fw-semibold form-label mb-2">Peso</label>
                                            <select name="id_Peso" id="id_Peso" class="form-select form-select-solid" data-control="select2" data-hide-search="true" >
                                                
                                            </select>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <label class="required fs-6 fw-semibold form-label mb-2">Pelaje</label>
                                            <select name="id_Pelaje" id="id_Pelaje" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                
                                            </select>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <label class="required fs-6 fw-semibold form-label mb-2">Precio</label>
                                            <input class="form-control form-control-solid" placeholder="" name="Precio" id="Precio" value="" />
                                            {{-- <input type="hidden" class="form-control form-control-solid" placeholder="" name="id_Capacidad" id="id_Capacidad" value="1" /> --}}
                                        </div>
                                        <div class="col-md-12" >
                                            <div class="row" >
                                                <div class="col-md-12 mb-2 mt-3" style="border-bottom: 1px solid rgb(171, 171, 171)">
                                                    <center>
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Turno</label>
                                                    </center>
                                                </div>
                                                <div class="col-4">
                                                    <select name="id_Capacidad" id="id_Capacidad"  class="form-select form-select-solid" data-control="select2" onchange="listar_capacidad(this.value)" data-hide-search="true" >
                                                        
                                                    </select>
                                                </div>
                                                <div class="col-8" id="id_capacidad_tbl">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer flex-center">
                            <button type="reset" onclick="cerrar_modal_servicio()" class="btn btn-light me-3">Cancelar</button>
                            <button type="submit" id="btn_servicio"  class="btn btn-primary">
                                <span class="indicator-label">Registrar servicio</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        
        <!--end::Card-->
    </div>
    <form action="{{route('listar_servicios')}}" method="get"  id="listar-servicios">
        @csrf
    </form>
    <form action="{{route('eliminar_servicio')}}" method="post"  id="eliminar-servicio">
        @csrf
    </form>


    <form action="{{route('listar_capacidad')}}" method="post"  id="listar-capacidad">
        @csrf
    </form>
    <form action="{{route('editar_servicio')}}" method="post"  id="editar-servicio">
        @csrf
    </form>

    

    


    {{-- Formularios para talla --}}
        <form action="{{route('guardar_talla')}}" method="post"  id="guardar-talla">
            @csrf
        </form>
        <form action="{{route('listar_talla')}}" method="get"  id="listar-tallas">
            @csrf
        </form>
        <form action="{{route('eliminar_talla')}}" method="post"  id="eliminar-talla">
            @csrf
        </form>
    
    {{-- Formularios para peso --}}

    

    {{-- Formularios para pelaje --}}

    




    <!--end::Container-->
</div>
<script src="assets/js/scripts.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // Función para consultar los paquetes
        listar_servicios();
        function listar_servicios(){
            $datosForm=$('#listar-servicios');
            $.ajax({
                url: $datosForm.attr('action') + '?' + $datosForm.serialize(),
                method: $datosForm.attr('method'),
                processData: false,
                contentType: false
            }).done(function (data) {
                console.log(data.servicios)
                
                $('#listar_servicios').empty();
                $('#listar_servicios').append(data.servicios);

                $('#id_Talla').empty();
                $('#id_Talla').append(data.tallas);

                $('#id_Peso').empty();
                $('#id_Peso').append(data.pesos);

                $('#id_Pelaje').empty();
                $('#id_Pelaje').append(data.pelajes);

                $('#id_Capacidad').empty();
                $('#id_Capacidad').append(data.capacidad);

                

            }).fail(function () {
            });
        }

        function listar_capacidad(id_Capacidad){
            $datosForm=$('#listar-capacidad');
            console.log('snansmnas',id_Capacidad)

            var formData = new FormData();
            formData.append('id_Capacidad', id_Capacidad);
            
            $.ajax({
                url: $datosForm.attr('action') + '?' + $datosForm.serialize(),
                method: $datosForm.attr('method'),
                data: formData,
                processData: false,
                contentType: false
            }).done(function (data) {
                console.log(data)
                $('#id_capacidad_tbl').empty();
                $('#id_capacidad_tbl').append(data);
                

            }).fail(function () {
            });
        }

        // Función que registra y actualiza paquetes
        $('#guardar-servicio').submit(function(e){
            e.preventDefault();
        
            $datosForm=$('#guardar-servicio');
            $.ajax({
                url: $datosForm.attr('action') + '?' + $datosForm.serialize(),
                method: $datosForm.attr('method'),
                processData: false,
                contentType: false
            }).done(function (data) {
                console.log(data)
                if(data=='Guardado'){
                    Swal.fire({
                        text:"¡Servicio registrado correctamente!",
                        icon:"success",
                        buttonsStyling:!1,
                        confirmButtonText:"Ok, entendido!",
                        customClass:{confirmButton:"btn fw-bold btn-primary"}
                    })
                    document.getElementById('guardar-servicio').reset();
                    $('#modal_servicio').modal('hide');
                    listar_servicios();

                }else if(data=='Actualizado'){
                    Swal.fire({
                        text:"¡Servicio actualizado correctamente!",
                        icon:"success",
                        buttonsStyling:!1,
                        confirmButtonText:"Ok, entendido!",
                        customClass:{confirmButton:"btn fw-bold btn-primary"}
                    })
                    document.getElementById('guardar-servicio').reset();
                    $('#modal_servicio').modal('hide');
                    listar_servicios();
                }
            }).fail(function () {
            });
        
        });

        // Función para validar si los campos estan vacíos
        function validar(){
            var todo_correcto = true;
            
            
            if(document.getElementById('Servicio').value == ''){
                todo_correcto = false;
            }
            if(document.getElementById('id_Talla').value == ''){
                todo_correcto = false;
            }
            if(document.getElementById('id_Peso').value == ''){
                todo_correcto = false;
            }
            if(document.getElementById('id_Pelaje').value == ''){
                todo_correcto = false;
            }
            if(document.getElementById('Precio').value == ''){
                todo_correcto = false;
            }
            if(!todo_correcto){
                Swal.fire({
                    text:"Algunos campos están vacíos, vuelva a revisarlos",
                    icon:"warning",
                    buttonsStyling:!1,
                    confirmButtonText:"Ok, entendido!",
                    customClass:{
                        confirmButton:"btn fw-bold btn-primary"
                    }
                })
            }
        }

        // Función para abrir el modal y mostrar los datos en el formulario
        function editar_servicio(id_PaqueteEstetica,Servicio,id_Talla,id_Peso,id_Pelaje,id_Capacidad,Precio){
            abrir_modal_servicio()


            console.log(id_PaqueteEstetica,Servicio,id_Talla,id_Peso,id_Pelaje,id_Capacidad,Precio)
            document.getElementById("id_PaqueteEstetica").value = id_PaqueteEstetica;
            document.getElementById("Servicio").value = Servicio;
            document.getElementById("id_Talla").value = id_Talla;
            document.getElementById("id_Peso").value = id_Peso;
            document.getElementById("id_Pelaje").value = id_Pelaje;
            document.getElementById("id_Capacidad").selected = id_Capacidad;
            document.getElementById("Precio").value = Precio;
            btn_actualizar()


            var formData = new FormData();
            formData.append('id_Talla', id_Talla);
            formData.append('id_Peso', id_Peso);
            formData.append('id_Pelaje', id_Pelaje);
            formData.append('id_Capacidad', id_Capacidad);

            $datosForm=$('#editar-servicio');
            $.ajax({
                url: $datosForm.attr('action') + '?' + $datosForm.serialize(),
                method: $datosForm.attr('method'),
                data: formData,
                processData: false,
                contentType: false
            }).done(function (data) {
                console.log(data)
                $('#id_capacidad_tbl').empty();

                $('#id_Talla').empty();
                $('#id_Talla').append(data.tallas);

                $('#id_Peso').empty();
                $('#id_Peso').append(data.pesos);

                $('#id_Pelaje').empty();
                $('#id_Pelaje').append(data.pelajes);

                $('#id_Capacidad').empty();
                $('#id_Capacidad').append(data.capacidad);
                
            }).fail(function () {
            });





        }

        // Función cambiar el texto del boton 
        function btn_guardar() {
            var button = document.getElementById('btn_servicio');
            button.innerText = 'Registrar servicio';

            document.getElementById("id_titulo_servicio").innerHTML = "Agregar nuevo servicio";
            
        }

        // Función cambiar el texto del boton 
        function btn_actualizar() {
            var button = document.getElementById('btn_paquete');
            button.innerText = 'Actualizar servicio';
            document.getElementById("id_titulo_servicio").innerHTML = "Actualizar datos del servicio";
        }

        // Función cerrar el modal
        function cerrar_modal_servicio(){
            btn_guardar()
            document.getElementById('registro-guarderia').reset();
            $('#modal_servicio').modal('hide');
        }

        // Función abrir el modal
        function abrir_modal_servicio(){
            $('#modal_servicio').modal('show');
        }

        // Función eliminar el paquete 
        function eliminar_servicio(id_PaqueteEstetica){
            Swal.fire({
                text:"¿Estás seguro(a) de eliminar el servicio seleccionado con ID: "+id_PaqueteEstetica+"?",
                icon:"warning",
                showCancelButton:!0,
                buttonsStyling:!1,
                confirmButtonText:"Si, eliminar!",
                cancelButtonText:"No, cancelar",
                customClass:{
                    confirmButton:"btn fw-bold btn-danger",
                    cancelButton:"btn fw-bold btn-active-light-primary"
                }
            }).then(resultado=>{
                if (resultado.value) {
                    $datosForm=$('#eliminar-servicio');
                    var formData = new FormData();
                    formData.append('id_PaqueteEstetica', id_PaqueteEstetica);
                    $.ajax({
                        url: $datosForm.attr('action') + '?' + $datosForm.serialize(),
                        method: $datosForm.attr('method'),
                        data: formData,
                        processData: false,
                        contentType: false
                    }).done(function (data) {
                        console.log(data)
                        if(data=='Eliminado'){
                            Swal.fire({
                                text:"Has borrado el servicio con ID: "+id_PaqueteEstetica+"!.",
                                icon:"success",
                                buttonsStyling:!1,
                                confirmButtonText:"Ok, entendido!",
                                customClass:{confirmButton:"btn fw-bold btn-primary"}
                            })
                            listar_servicios();
                        } else {
                            Swal.fire({
                                text:"¡Guardería con ID: "+id_PaqueteEstetica+" no se pudo eliminar.",
                                icon:"error",
                                buttonsStyling:!1,
                                confirmButtonText:"Ok, entendido!",
                                customClass:{
                                    confirmButton:"btn fw-bold btn-primary"
                                }
                            })
                        }
                    }).fail(function () {
                        Swal.fire({
                            text:"¡Servicio con ID: "+id_PaqueteEstetica+" no se pudo eliminar.",
                            icon:"error",
                            buttonsStyling:!1,
                            confirmButtonText:"Ok, entendido!",
                            customClass:{
                                confirmButton:"btn fw-bold btn-primary"
                            }
                        })
                    });
                } else {
                    Swal.fire({
                        text:"Has cancelado la eliminación del servicio con ID: "+id_PaqueteEstetica+".",
                        icon:"error",
                        buttonsStyling:!1,
                        confirmButtonText:"Ok, entendido!",
                        customClass:{
                            confirmButton:"btn fw-bold btn-primary"
                        }
                    })
                }
            })
        }

    </script>

    {{-- Aqui el script para tallas --}}
    <script>
        function talla(){
            Swal.fire({
                title: "CREAR TALLA",
                text: "Nombre de talla:",
                input: 'text',
                showCancelButton: true,
                cancelButtonText:"Cancelar",
                confirmButtonText:"Guardar",
                inputValidator: nombre => {
                    // Si el valor es válido, debes regresar undefined. Si no, una cadena
                    if (!nombre) {
                        return "Por favor escribe el nombre de la talla";
                    } else {
                        return undefined;
                    }
                }
            }).then((result) => {
                if (result.value) {
                    console.log("Result: " + result.value);

                    var formData = new FormData();
                    formData.append('id_Talla', 'Insertar');
                    formData.append('NombreTalla', result.value);

                    $datosForm=$('#guardar-talla');
                    $.ajax({
                        url: $datosForm.attr('action') + '?' + $datosForm.serialize(),
                        method: $datosForm.attr('method'),
                        data: formData,
                        processData: false,
                        contentType: false
                    }).done(function (data) {
                        console.log(data)
                        if(data=='Guardado'){
                            Swal.fire({
                                text:"¡Talla registrado correctamente!",
                                icon:"success",
                                buttonsStyling:!1,
                                confirmButtonText:"Ok, entendido!",
                                customClass:{confirmButton:"btn fw-bold btn-primary"}
                            })
                            listar_talla();

                        }else if(data=='Actualizado'){
                            Swal.fire({
                                text:"¡Talla actualizada correctamente!",
                                icon:"success",
                                buttonsStyling:!1,
                                confirmButtonText:"Ok, entendido!",
                                customClass:{confirmButton:"btn fw-bold btn-primary"}
                            })
                        }
                    }).fail(function () {
                    });
                }
            });
        }

        function editar_talla(id_talla,nombre_talla){

            Swal.fire({
                title: "ACTUALIZAR TALLA",
                text: "Escribe nuevo nombre de la talla: "+nombre_talla,
                input: 'text',
                showCancelButton: true,
                cancelButtonText:"Cancelar",
                confirmButtonText:"Guardar",
                inputValidator: nombre => {
                    // Si el valor es válido, debes regresar undefined. Si no, una cadena
                    if (!nombre) {
                        return "Por favor escribe el nuevo nombre de la talla";
                    } else {
                        return undefined;
                    }
                }
            }).then((result) => {
                if (result.value) {
                    console.log("Result: " + result.value);

                    var formData = new FormData();
                    formData.append('id_Talla', id_talla);
                    formData.append('NombreTalla', result.value);

                    $datosForm=$('#guardar-talla');
                    $.ajax({
                        url: $datosForm.attr('action') + '?' + $datosForm.serialize(),
                        method: $datosForm.attr('method'),
                        data: formData,
                        processData: false,
                        contentType: false
                    }).done(function (data) {
                        console.log(data)
                        if(data=='Actualizado'){
                            Swal.fire({
                                text:"¡Talla actualizada correctamente!",
                                icon:"success",
                                buttonsStyling:!1,
                                confirmButtonText:"Ok, entendido!",
                                customClass:{confirmButton:"btn fw-bold btn-primary"}
                            })
                            listar_talla();
                        }
                    }).fail(function () {
                    });
                }
            });

        }

        listar_talla();
        function listar_talla(){
            $datosForm=$('#listar-tallas');
            $.ajax({
                url: $datosForm.attr('action') + '?' + $datosForm.serialize(),
                method: $datosForm.attr('method'),
                processData: false,
                contentType: false
            }).done(function (data) {
                $('#listar_tallas').empty();
                $('#listar_tallas').append(data);
            }).fail(function () {
            });
        }

        function eliminar_talla(id_talla,nombre_talla){
            Swal.fire({
                text:"¿Estás seguro(a) de eliminar la talla "+nombre_talla+"?",
                icon:"warning",
                showCancelButton:!0,
                buttonsStyling:!1,
                confirmButtonText:"Si, eliminar!",
                cancelButtonText:"No, cancelar",
                customClass:{
                    confirmButton:"btn fw-bold btn-danger",
                    cancelButton:"btn fw-bold btn-active-light-primary"
                }
            }).then(resultado=>{
                if (resultado.value) {
                    $datosForm=$('#eliminar-talla');
                    var formData = new FormData();
                    formData.append('id_Talla', id_talla);
                    $.ajax({
                        url: $datosForm.attr('action') + '?' + $datosForm.serialize(),
                        method: $datosForm.attr('method'),
                        data: formData,
                        processData: false,
                        contentType: false
                    }).done(function (data) {
                        console.log(data)
                        if(data=='Eliminado'){
                            Swal.fire({
                                text:"Has borrado la talla "+nombre_talla+"!.",
                                icon:"success",
                                buttonsStyling:!1,
                                confirmButtonText:"Ok, entendido!",
                                customClass:{confirmButton:"btn fw-bold btn-primary"}
                            })
                            listar_talla();
                        } else {
                            Swal.fire({
                                text:"¡Talla "+nombre_talla+" no se pudo eliminar.",
                                icon:"error",
                                buttonsStyling:!1,
                                confirmButtonText:"Ok, entendido!",
                                customClass:{
                                    confirmButton:"btn fw-bold btn-primary"
                                }
                            })
                        }
                    }).fail(function () {
                        Swal.fire({
                            text:"Talla "+nombre_talla+" no se pudo eliminar.",
                            icon:"error",
                            buttonsStyling:!1,
                            confirmButtonText:"Ok, entendido!",
                            customClass:{
                                confirmButton:"btn fw-bold btn-primary"
                            }
                        })
                    });
                } else {
                    Swal.fire({
                        text:"Has cancelado la eliminación de la talla "+nombre_talla+".",
                        icon:"error",
                        buttonsStyling:!1,
                        confirmButtonText:"Ok, entendido!",
                        customClass:{
                            confirmButton:"btn fw-bold btn-primary"
                        }
                    })
                }
            })
        }
    </script>

    {{-- Aqui el script para pesos --}}




    {{-- Aqui el script para pelaje --}}

    
@endsection







