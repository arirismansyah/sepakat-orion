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
                            <li class="breadcrumb-item active" aria-current="page">Analisis Wilayah</li>
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
                                <h3 class="card-title">Filter Wilayah</h3>
                            </div>
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group ">
                                            <label class="form-label">Tingkatan Wilayah</label>
                                            <select id="select_tingkatan_wilayah" class="form-control select2 form-select" data-placeholder="Pilih Tingkatan Wilayah">
                                                <option label="Pilih Tingkatan Wilayah">
                                                </option>
                                                <option value="1">Provinsi</option>
                                                <option value="2">Kabupaten</option>
                                                <option value="3">Kecamatan</option>
                                                <option value="4">Desa</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group ">
                                            
                                            <select id="select_prov" class="form-control select2 form-select" data-placeholder="Pilih Provinsi">
                                                <option label="Pilih Provinsi">
                                                </option>
                                                {{-- mount prov --}}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group ">
                                            
                                            <select id="select_kab" class="form-control select2 form-select" data-placeholder="Pilih Kab/Kota">
                                                <option label="Pilih Kab/Kota">
                                                </option>
                                                {{-- mount prov --}}
                                            </select>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group ">
                                            
                                            <select id="select_kec" class="form-control select2 form-select" data-placeholder="Pilih Kecamatan">
                                                <option label="Pilih Kecamatan">
                                                </option>
                                                {{-- mount prov --}}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group ">
                                            
                                            <select id="select_desa" class="form-control select2 form-select" data-placeholder="Pilih Desa">
                                                <option label="Pilih Desa">
                                                </option>
                                                {{-- mount prov --}}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
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
                    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
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
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                        <div class="card custom-card ">
                            <div class="card-header">
                                <h3 class="card-title">Profil Daerah</h3>
                            </div>
                            <div class="card-body pt-0 ps-0 pe-0">
                                {{-- descript wilayah --}}
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