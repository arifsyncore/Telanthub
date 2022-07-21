<?php

namespace App\Http\Controllers;

use App\Exports\DosenExport;
use App\Exports\MahasiswaExport;
use App\Exports\MitraExport;
use App\Exports\PelangganExport;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Mitra;
use App\Models\Langganan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RecordDataController extends Controller
{
    public function data_mahasiswa(){
        $mahasiswas = Mahasiswa::join('layanan','mahasiswas.id_layanan','=','layanan.id_layanan')
            ->join('program','mahasiswas.id_program','=','program.id_program')->get();
        return view('admin.recorddata.mahasiswa',[
            "mahasiswas" => $mahasiswas,
        ]);
    }
    public function export_data_mahasiswa(){
        return Excel::download(new MahasiswaExport, 'Mahasiswa.xlsx');
    }
    public function data_dosen(){
        $dosens = Dosen::all();
        return view('admin.recorddata.dosen',['dosens'=>$dosens]);
    }
    public function export_data_dosen(){
        return Excel::download(new DosenExport, 'Dosen.xlsx');
    }
    public function data_mitra(){
        $mitras = Mitra::all();
        return view('admin.recorddata.mitra',['mitras'=>$mitras]);
    }
    public function export_data_mitra(){
        return Excel::download(new MitraExport, 'Mitra.xlsx');
    }
    public function data_pelanggan(){
        $langganans = Langganan::all();
        return view('admin.recorddata.pelanggan',['langganans'=>$langganans]);
    }
    public function export_data_pelanggan(){
        return Excel::download(new PelangganExport, 'Pelanggan.xlsx');
    }
}
