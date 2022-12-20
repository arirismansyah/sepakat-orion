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
                                            <select id="select_tingkatan_wilayah" class="form-control select2 form-select"
                                                data-placeholder="Pilih Tingkatan Wilayah">
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

                                            <select id="select_prov" class="form-control select2 form-select"
                                                data-placeholder="Pilih Provinsi">
                                                <option label="Pilih Provinsi">
                                                </option>
                                                {{-- mount prov --}}
                                                @foreach ($prov as $p)
                                                    <option value="{{ $p->id_prov }}">
                                                        [{{ $p->id_prov }}] {{ $p->nama_prov }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group ">

                                            <select id="select_kab" class="form-control select2 form-select"
                                                data-placeholder="Pilih Kab/Kota">
                                                <option label="Pilih Kab/Kota">
                                                </option>
                                                {{-- mount kab --}}
                                                @foreach ($kab as $k)
                                                    <option value="{{ $k->id_kab }}">
                                                        [{{ $k->id_kab }}] {{ $k->nama_kab }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group ">

                                            <select id="select_kec" class="form-control select2 form-select"
                                                data-placeholder="Pilih Kecamatan">
                                                <option label="Pilih Kecamatan">
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group ">

                                            <select id="select_desa" class="form-control select2 form-select"
                                                data-placeholder="Pilih Desa">
                                                <option label="Pilih Desa">
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group">

                                            <button id="filter_btn" class="col-6 btn btn-primary btn-icon text-white">
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
                            <div class="card-body">
                                <div id="container_shap_none" class="row text-center">
                                    <h2 class="text-muted">Silakan memilih wilayah terlebih dahulu.</h2>
                                </div>
                                <div id="container_shap" style="display: none" class="row  align-center justify-content-center">

                                    <img style="max-width: 60%" src="{{ url('plot_shap/kota/3206.png') }}" alt="" srcset="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                        <div class="card custom-card ">
                            <div class="card-header">
                                <h3 class="card-title">Profil Daerah</h3>
                            </div>
                            <div class="card-body">

                                <div id="container_descript_none" class="row text-center">
                                    <h4 class="text-muted">Silakan memilih wilayah terlebih dahulu.</h4>
                                </div>

                                {{-- descript wilayah --}}
                                <div id="dekripsi_tasik" style="display: none" class="row">

                                    <h4 class="text-center">KOTA TASIKMALAYA</h4>
                                    <p class="text-center ">Berdasarkan permodelan data regsosek, profil kesejahteraan Kota Tasikmalaya sangat dipengaruhi oleh bidang pendidikan, serta kepemilikan aset. Bidang yang direkomendasikan untuk diintervensi adalah bidang <strong>pendidikan</strong> .</p>
                                </div>
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
                                {{-- row peta --}}
                                <div class="row mb-4 d-flex justify-content-center">
                                    <div id="map" style="width: 800px; height: 400px;"></div>
                                </div>

                                {{-- row decript --}}
                                <div class="row mb-4"></div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    
@endsection
