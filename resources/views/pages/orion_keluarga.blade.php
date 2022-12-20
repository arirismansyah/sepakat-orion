@extends('layout.layout')

@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Sepakat - Orion</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Analisis Keluarga</li>
                        </ol>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->

                {{-- FILTER WILAYAH --}}
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Filter Keluarga</h3>
                            </div>
                            <div class="card-body pb-0">                            
                                <div class="row">
                                    
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group ">                                            
                                            <select id="select_keluarga" class="form-control select2 form-select" data-placeholder="Pilih Keluarga">
                                                <option label="Pilih Keluarga">
                                                </option>
                                                {{-- mount keluarga --}}

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            
                                            <button class="col-6 btn btn-primary btn-icon text-white">
                                                <span>
                                                    <i class="fe fe-filter"></i>
                                                </span> Filter
                                            </button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- SHAP VALUE --}}

                <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Profiling Kemiskinan - Shap Value</h3>
                            </div>
                            <div class="card-body pb-0">
                                <div id="chartArea" class="chart-donut"></div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="card custom-card ">
                            <div class="card-header">
                                <h3 class="card-title">Profil Daerah</h3>
                            </div>
                            <div class="card-body pt-0 ps-0 pe-0">
                                {{-- profil descript --}}
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                </div>

                {{-- GEOSPASIAL --}}
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Analisis Geospasial</h3>
                            </div>
                            <div class="card-body pb-0">
                                <div id="chartArea" class="chart-donut"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
@endsection