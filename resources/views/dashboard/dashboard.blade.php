@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')


<section class="section">
    <section class="section">
        <div class="section-header">
            <img class="" width="1550" src="../assets/img/products/welkom.png" alt="product">
        </div>
        <div class="section-header">
            <h2>Rekap Data Nasional</h2>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">
                        <p>Update:</p>
                        <h4>  {{$today}}</h4>
                    </a></div>
                
                <div class=""></div>
            </div>
        </div>
       
        <!-- <div class="card"><div class="card-header"><h4>Link</h4></div><div class="card-body"><div class="list-group"><a href="#" class="list-group-item list-group-item-action active">Cras justo odio</a><a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a><a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a><a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a><a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a></div></div></div> -->

        <div class="row">
            @foreach ($rekap as $key => $item)

            <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card card-primary">
            <div class="card card-statistic-2">
                    <div class="card-body">
                        <div id="style" style="text-align: right;">
                            <h1>{{ number_format($item->jumlah_nominasi) }}</h1>
                        </div>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h3>Jumlah Nominasi</h3>
                            <h4></h4>
                        </div>
                    </div>
                </div>
            </div> 
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card card-primary">
                <div class="card card-statistic-2">
                    <div class="card-body">
                        <div id="style" style="text-align: right;">
                            <h1>{{ number_format($item->jumlah_rek_valid) }}</h1>
                        </div>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h3>Jumlah Rekening Valid </h3>
                            <!-- <h4>(Dapodik)</h4> -->
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card card-primary">
                <div class="card card-statistic-2">
                    <div class="card-body">
                        <div id="style" style="text-align: right;">
                            <h1>{{ number_format($item->jumlah_jjm_rek_valid) }}</h1>
                        </div>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h3>Jumlah JJM Rekening Valid </h3>
                            <!-- <h4>(Dapodik)</h4> -->
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card card-primary">
                <div class="card card-statistic-2">
                    <div class="card-body">
                        <div id="style" style="text-align: right;">
                            <h1>{{ number_format($item->jumlah_jjm_valid) }}</h1>
                        </div>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="card-wrap">

                        <div class="card-header">
                            <h3>JJM Valid </h3>
                            <h4></h4>
                        </div>

                    </div>
                </div>
                </div>
            </div>

        </div>
        <!-- baris 2 -->
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-primary">
                <div class="card card-statistic-2">
                    <div class="card-body">
                        <div id="style" style="text-align: right;">
                            <h1>{{ number_format($item->sasaran_siap_usul) }}</h1>
                        </div>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h3>Sasaran SIAP Usul </h3>
                            <h4>(Verifikasi Bank)</h4>
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-primary">
                <div class="card card-statistic-2">
                    <div class="card-body">
                        <div id="style" style="text-align: right;">
                            <h1>{{ number_format($item->sasaran_siap_sk) }}</h1>
                        </div>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h3>Sasaran Siap SK </h3>
                            <h4>(bank & dapodik)</h4>
                        </div>

                    </div>
                </div>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-primary">
                    <div class="card card-statistic-2">
                <div class="card-body">
                        <div id="style" style="text-align: right;">
                            <h1>{{ number_format($item->sasaran_sudah_sk) }}</h1>
                        </div>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h3>Sasaran Sudah SK </h3>
                            <h4>(bank & dapodik)</h4>
                        </div>
                        
                    </div>
                </div>
                </div>
                
            </div>
        </div>

        @endforeach

        </div>
        <div class="row">
            <div class="col-md-6">

            </div>
        </div>
        </div>
    </section>

    <script>
        
    </script>
    

    @endsection

    @push('scripts')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @endpush