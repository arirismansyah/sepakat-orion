@extends('layout.layout_keluarga')

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
                                            <select id="select_keluarga" class="form-control form-select"
                                                data-placeholder="Pilih Keluarga">
                                                <option label="Pilih Keluarga">
                                                </option>
                                                @foreach ($data_keluarga as $rt)
                                                    <option value="{{ $rt->R011 }}" att_long="{{ $rt->R037 }}"
                                                        att_lat='{{ $rt->R038 }}'>{{ $rt->art_kk->R712 }}</option>
                                                @endforeach
                                                {{-- mount keluarga --}}

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
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
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Profiling Kemiskinan - Shap Value</h3>
                            </div>
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <img style="max-height: 100%; max-width: 100%;" id="img_plot_shap" src=""
                                        alt="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="card custom-card ">
                            <div class="card-header">
                                <h3 class="card-title">Profil Keluarga</h3>
                            </div>
                            <div class="card-body">
                                {{-- profil descript --}}

                                <div class="row"></div>

                                <div class="card-widget">
                                    <h6 class="mb-2">Peringkat Kesejahteraan (Kuantil)</h6>
                                    <h2 class="text-end"><i
                                            class="icon-size mdi mdi-poll-box   float-start text-warning text-warning-shadow"></i><span>1</span>
                                    </h2>
                                </div>

                                <div class="row">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="false"
                                                    aria-controls="collapseOne">
                                                    Kepemilikan Aset
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="activity1">
                                                        <div class="activity-blog">

                                                            <div class="activity-details d-flex">
                                                                <div>Tabung gas 3 kg </div>
                                                                <div id="gas_3kg_ya"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-success text-white">Ya</span></div>
                                                                <div id="gas_3kg_no"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-danger text-white">Tidak</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="activity-blog">

                                                            <div class="activity-details d-flex">
                                                                <div>Tabung gas 5,5 kg </div>
                                                                <div id="gas_5kg_ya"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-success text-white">Ya</span></div>
                                                                <div id="gas_5kg_no"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-danger text-white">Tidak</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="activity-blog">

                                                            <div class="activity-details d-flex">
                                                                <div>Tabung gas 12 kg </div>
                                                                <div id="gas_12kg_ya"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-success text-white">Ya</span></div>
                                                                <div id="gas_12kg_no"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-danger text-white">Tidak</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="activity-blog">

                                                            <div class="activity-details d-flex">
                                                                <div>Kulkas </div>
                                                                <div id="kulkas_ya"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-success text-white">Ya</span></div>
                                                                <div id="kulkas_no"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-danger text-white">Tidak</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="activity-blog">

                                                            <div class="activity-details d-flex">
                                                                <div>AC </div>
                                                                <div id="ac_ya"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-success text-white">Ya</span></div>
                                                                <div id="ac_no"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-danger text-white">Tidak</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="activity-blog">

                                                            <div class="activity-details d-flex">
                                                                <div>Pemanas Air </div>
                                                                <div id="pemanas_ya"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-success text-white">Ya</span></div>
                                                                <div id="pemanas_no"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-danger text-white">Tidak</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="activity-blog">

                                                            <div class="activity-details d-flex">
                                                                <div>Emas Perhiasan </div>
                                                                <div id="emas_ya"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-success text-white">Ya</span></div>
                                                                <div id="emas_no"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-danger text-white">Tidak</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Program Bantuan
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="activity1">
                                                        <div class="activity-blog">

                                                            <div class="activity-details d-flex">
                                                                <div>Program Bantuan Sosial Sembako/ BPNT                                                                </div>
                                                                <div id="bpnt_ya"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-success text-white">Ya</span></div>
                                                                <div id="bpnt_no"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-danger text-white">Tidak</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="activity-blog">

                                                            <div class="activity-details d-flex">
                                                                <div> Program Keluarga Harapan (PKH)                                                                </div>
                                                                <div id="pkh_ya"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-success text-white">Ya</span></div>
                                                                <div id="pkh_no"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-danger text-white">Tidak</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="activity-blog">

                                                            <div class="activity-details d-flex">
                                                                <div>Bantuan Sosial Tunai (BST) Covid-19                                                                </div>
                                                                <div id="pkh_ya"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-success text-white">Ya</span></div>
                                                                <div id="gas_12kg_no"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-danger text-white">Tidak</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="activity-blog">

                                                            <div class="activity-details d-flex">
                                                                <div>Kulkas </div>
                                                                <div id="kulkas_ya"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-success text-white">Ya</span></div>
                                                                <div id="kulkas_no"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-danger text-white">Tidak</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="activity-blog">

                                                            <div class="activity-details d-flex">
                                                                <div>AC </div>
                                                                <div id="ac_ya"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-success text-white">Ya</span></div>
                                                                <div id="ac_no"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-danger text-white">Tidak</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="activity-blog">

                                                            <div class="activity-details d-flex">
                                                                <div>Pemanas Air </div>
                                                                <div id="pemanas_ya"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-success text-white">Ya</span></div>
                                                                <div id="pemanas_no"
                                                                    class="ms-auto fs-13 text-dark fw-semibold"><span
                                                                        class="badge bg-danger text-white">Tidak</span>
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
                                    <div class="row">
                                        <div id="map" style="width: 800px; height: 400px;"></div>
                                    </div>

                                    {{-- row decript --}}
                                    <div class="row"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    @endsection
