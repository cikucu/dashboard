<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function dashboard(Request $request){
        // $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        // // $test = DB::select('select * from dbo.sum_rekap_validasi_202501');
        // $rekap = DB::table('dbintan.dbo.sum_rekap_validasi_202501')->get();

        // $last_update =  DB::select(DB::raw("select top 1 last_update from [dbintan].[guest].[rekap_validasi_sktp]"));

        // $list_instansi = DB::table('dbintan.dbo.ref_kab_kota')->get();

        if($request->get('kode_instansi') != "") {
            dd($request->kode_instansi);
            
            $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
      
            $rekap = DB::table('dbintan.dbo.sum_rekap_validasi_202501')->get();

            $last_update =  DB::select(DB::raw("select top 1 last_update from [dbintan].[guest].[rekap_validasi_sktp]"));

            $list_provinsi = DB::select(DB::raw("select distinct propinsi_id, provinsi from dbintan.dbo.ref_kab_kota"));

            $list_instansi = DB::table('dbintan.dbo.ref_kab_kota')->get();

            $rekap_instansi =  DB::table('dbintan.guest.rekap_validasi_sktp')->where('kode_instansi', '=', $request->kode_instansi)->get();
        }

        else{
            $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
      
            $rekap = DB::table('dbintan.dbo.sum_rekap_validasi_202501')->get();

            $last_update =  DB::select(DB::raw("select top 1 last_update from [dbintan].[guest].[rekap_validasi_sktp]"));

            $list_provinsi = DB::select(DB::raw("select distinct propinsi_id, provinsi from dbintan.dbo.ref_kab_kota"));

            $list_instansi = DB::table('dbintan.dbo.ref_kab_kota')->get();

            $rekap_instansi =  DB::table('dbintan.guest.rekap_ref_0')->get();

        }
        // dd($rekap);

        return view('dashboard.index', compact('today','rekap', 'last_update', 'list_instansi', 'rekap_instansi','list_provinsi'));
    }


    function getkabupaten(request $request)
    {
        $id_provinsi = $request->id_provinsi;
        $kabupatens = DB::select(DB::raw("select kode_instansi,kab_kota from dbintan.dbo.ref_kab_kota where propinsi_id = '$id_provinsi'"));

        foreach ($kabupatens as $kabupaten){
             echo "<option value='$kabupaten->kode_instansi'>$kabupaten->kab_kota<option/>";
        }
           
        
        
    }

    function cari_instansi(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('dbintan.dbo.ref_kab_kota')->where('nama_instansi', 'LIKE',"%{query}%")->get();
            $output ='<ul class="dropdown-menu" style"display:block; position:relative">';
            foreach($data as $row)
            {
                $output .= '
                <li><a href="#">'.$row->nama_instansi.'</a></li>
            ';
            }
            $output .= '</ul>';
            echo $output;
            
        }
    }

    function rekap_per_instansi(Request $request){
        if($request->get('query') != "")
        {

        }
        else 
        {

        }           
    }
}
