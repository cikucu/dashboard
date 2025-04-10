@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')



<section class="section">
    <section class="section">

        <div class="section-header">
            <h2>Rekap Data Nasional</h2>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">
                        <p>Last Update:</p>
                        @foreach ($last_update as $item )
                        <h4> {{ $item-> last_update }}</h4>
                        @endforeach

                    </a>
                </div>
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

        <div class="section-header">
            <h2>Rekap Data per Instansi</h2>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">
                        <p>Last Update:</p>
                        @foreach ($last_update as $item )
                        <h4> {{ $item-> last_update }}</h4>
                        @endforeach

                    </a>
                </div>
            </div>
        </div>

        <!-- test adil -->
        <!-- <div class="card">
            <div class="card-header">
                <h4>Pilih Instansi</h4>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="search" class="form-control" id="search_instansi" placeholder="Ketik Nama Instansi">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div> -->
        <!-- end test adil -->

        <div class="card">
            <div class="card-header">
                <h4>Pilih Instansi</h4>
            </div>
            <div class="card-body">
                <div class="row">
                <form method="GET" action="{{ route('getdashboardkabupaten')  }}" method="POST"></form>
                    <div class="col-6">
                        @csrf
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control" id="provinsi">
                                <option>Pilih Option..</option>
                                @foreach ($list_provinsi as $item )
                                <option value="{{ $item->propinsi_id }}">{{ $item->provinsi }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Kabupaten/Kota</label>
                            <select class="form-control" id="kabupaten">
                                <option>Pilih Option..</option>
                                @foreach ($list_instansi as $item )
                                <option value="{{ $item->kode_instansi }}">{{ $item->kab_kota}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="button">
                    <a href="" class="btn btn-primary"><i class="fas fa-search"></i>Tampilkan</a>
                </div>
                </form>
            </div>
        </div>

        <div class="row">
            @foreach ($rekap_instansi as $key => $item)
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Tunjangan per Instansi</h4>
                        <div class="card-header-action">
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>Jumlah Nominasi</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="style" style="text-align: right;">
                                            <h1>@if(isset($item->jumlah_nominasi_)){{$item->jumlah_nominasi_}}@else - @endif</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>JJM Valid</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="style" style="text-align: right;">
                                            <h1>@if(isset($item->jumlah_jjm_valid_)){{$item->jumlah_jjm_valid_}}@else - @endif</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>Jumlah Rekening Valid</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="style" style="text-align: right;">
                                            <h1>@if(isset($item->jumlah_rek_valid_)){{$item->jumlah_rek_valid_}}@else - @endif</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>Jumlah JJM Rekening Valid</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="style" style="text-align: right;">
                                            <h1>@if(isset($item->jumlah_jjm_rek_valid_)){{$item->jumlah_jjm_rek_valid_}}@else - @endif</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>Sasaran Siap Usul</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="style" style="text-align: right;">
                                            <h1>@if(isset($item->sasaran_siap_usul_)){{$item->sasaran_siap_usul_}}@else - @endif</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>Sasaran Siap SK</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="style" style="text-align: right;">
                                            <h1>@if(isset($item->sasaran_siap_sk_)){{$item->sasaran_siap_sk_}}@else - @endif</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>Sasaran Sudah SK</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="style" style="text-align: right;">
                                            <h1>@if(isset($item->sasaran_sudah_sk_)){{$item->sasaran_sudah_sk_}}@else - @endif</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </section>


    
    @endsection



    @section('page-js-script')

   

    <!-- <script>
        $(document).ready(function() {
            var availableTags = [
                "ActionScript", "AppleScript", "Asp", "BASIC", "C", "C++",
                "Clojure", "COBOL", "ColdFusion", "Erlang", "Fortran", "Groovy",
                "Haskell", "Java", "JavaScript", "Lisp", "Perl", "PHP", "Python",
                "Ruby", "Scala", "Scheme"
            ];

            // Initialize autocomplete
            $("#search_instansi").autocomplete({
                source: availableTags,
                minLength: 2,
                select: function(event, ui) {
                    console.log("Selected: " + ui.item.value);
                }
            });
        });
    </script> -->

    @endsection






    <!-- @section('page-js-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#nama_instansi').keyup(function() {

                var query = $(this).val();
                if (query != '') {
                    var _token = $('input[name="csrf_token"]').val();
                    $.ajax({
                        url: '/ajax-autocomplete',
                        method: "GET",
                        data: {
                            query: query,
                            _token: _token
                        },
                        success: function(data) {
                            $('instansiList').fadeIn();
                            $('instansiList').html(data);

                        }
                    });
                }
            });

            $(document).on('click', 'li', function() {
                $('#nama_instansi').val($(this).text());
                $('#nama_instansi').fadeOut();
            });
        });
    </script>
    @stop -->