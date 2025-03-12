<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function dashboard(Request $request){
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        // $test = DB::select('select * from dbo.sum_rekap_validasi_202501');
        $rekap = DB::table('dbintan.dbo.sum_rekap_validasi_202501')->get();

        $last_update =  DB::select(DB::raw("select top 1 last_update from [dbintan].[guest].[rekap_validasi_sktp]"));

        $list_instansi = DB::table('dbintan.dbo.ref_kab_kota')->get();

        // $nama_instansi_selected = null;
        // $nama_instansi_selected = $request->nama_instansi_input;
        // $kode_instansi_selected = DB::select(DB::raw("
        //             select kode_instansi from dbintan.dbo.ref_kab_kota = '$nama_instansi_selected'"));
        // $rekapinstansi = DB::table('dbintan.dbo.sum_rekap_validasi_202501')->where('kode_instansi', '=', $kode_instansi_selected[0]->kode_instansi);
        
       
        // dd($rekap);
        return view('dashboard.index', compact('today','rekap', 'last_update', 'list_instansi'));
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
