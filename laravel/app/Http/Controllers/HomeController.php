<?php

namespace App\Http\Controllers;

use App\Mail\KirimMail;
use App\Models\Dosen;
use App\Models\DosenInformasi;
use App\Models\Langganan;
use App\Models\Mahasiswa;
use App\Models\MhsBidang;
use App\Models\MhsInformasi;
use App\Models\MhsKeahlian;
use App\Models\Mitra;
use App\Models\MitraInformasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.homepage.index');
    }
    public function proses_langganan(Request $request){
        $pelanggan = Langganan::where('email',$request->email)->get();
        if(count($pelanggan) == 0){
            $langganan = new Langganan;
            $langganan->nama = $request->nama;
            $langganan->email = $request->email;
            $langganan->no_telp = $request->no_telp;
            $langganan->perusahaan = $request->perusahaan;
            $langganan->save();
            Alert::success('Terima Kasih', 'Telah Berlangganan Di Talenta');
            return redirect()->back();
        } else {
            Alert::error('Gagal', 'Email yang digunakan sudah berlangganan');
            return redirect()->back();
        }
        
    }
    public function daftar_mahasiswa()
    {
        $layanans = DB::table('layanan')->get();
        return view('home.formdaftarmhs.index',['layanans'=>$layanans]);
    }

    public function proses_daftar_mahasiswa(Request $request)
    {
        if($request->akhir_thn >= $request->mulai_thn){
            $messages = [
                'required' => 'Data Harus Disi Semua',
            ];
            $request->validate([
                'nama_lengkap' => 'required',
                'nim' =>'required',
                'pendidikan_terakhir'=>'required',
                'tgl_lahir' =>'required',
                'jekel' =>'required',
                'layanan' =>'required',
                'program' =>'required',
                'email' =>'required',
                'no_telp' =>'required',
                'perguruan_tinggi' =>'required',
                'fakultas' =>'required',
                'prodi' =>'required',
                'gelar' => 'required',
                'mulai_bulan' =>'required',
                'mulai_thn' =>'required',
                'akhir_bulan' =>'required',
                'akhir_thn' =>'required',
            ],$messages);
    
            $mhs = new Mahasiswa;
            $mhs->nama_lengkap = $request->nama_lengkap;
            $mhs->nim = $request->nim;
            $mhs->pendidikan_terakhir = $request->pendidikan_terakhir;
            $mhs->tgl_lahir = $request->tgl_lahir;
            $mhs->jekel = $request->jekel;
            $mhs->id_layanan = $request->layanan;
            $mhs->id_program = $request->program;
            $mhs->email = $request->email;
            $mhs->no_telp = $request->no_telp;
            $mhs->perguruan_tinggi = $request->perguruan_tinggi;
            $mhs->fakultas = $request->fakultas;
            $mhs->prodi = $request->prodi;
            $mhs->gelar = $request->gelar;
            $mhs->mulai_bulan = $request->mulai_bulan;
            $mhs->mulai_thn = $request->mulai_thn;
            $mhs->akhir_bulan = $request->akhir_bulan;
            $mhs->akhir_thn = $request->akhir_thn;
            $mhs->save();
    
            $id_mhs = $mhs->id;
            $count = count($request->bidang_diminati);
            for($x=0;$x<$count;$x++){
                $bidang = new MhsBidang;
                $bidang->mhs_id = $id_mhs;
                $bidang->bidang = $request->bidang_diminati[$x];
                $bidang->save();
            }
            $count_keahlian = count($request->keahlian);
            for($x=0;$x<$count_keahlian;$x++){
                $bidang = new MhsKeahlian;
                $bidang->mhs_id = $id_mhs;
                $bidang->keahlian = $request->keahlian[$x];
                $bidang->save();
            }
            $count_informasi = count($request->informasi);
            for($x=0;$x<$count_informasi;$x++){
                $bidang = new MhsInformasi;
                $bidang->mhs_id = $id_mhs;
                $bidang->informasi = $request->informasi[$x];
                $bidang->save();
            }
    
            Mail::to($request->email)->send(new KirimMail());
    
            //Mail::to("arifmohamad053@gmail.com")->send(new KirimMail());
    
            return redirect()->route('landing');
        } else {
            Session::flash('message', "Tahun akhir kuliah harus lebih besar dari tahun mulai kuliah");
            return redirect()->back();
        }

        

    }

    public function daftar_dosen()
    {
        $layanans = DB::table('layanan')->get();
        return view('home.formdaftardsn.index',['layanans'=>$layanans]);
    }
    public function proses_daftar_dosen(Request $request)
    {
        $messages = [
            'required' => 'Data Harus Disi Semua',
        ];
        $request->validate([
            'nama_lengkap' => 'required',
            'nidn' =>'required',
            'tgl_lahir' =>'required',
            'jekel' =>'required',
            'email' =>'required',
            'no_telp' =>'required',
            'perguruan_tinggi' =>'required',
            'fakultas' =>'required',
            'gelar' => 'required',
            'penelitian' =>'required',
            'informasi' =>'required',
        ],$messages);

        $dosen = new Dosen;
        $dosen->nama_lengkap = $request->nama_lengkap;
        $dosen->nidn = $request->nidn;
        $dosen->tgl_lahir = $request->tgl_lahir;
        $dosen->jekel = $request->jekel;
        $dosen->email = $request->email;
        $dosen->no_telp = $request->no_telp;
        $dosen->perguruan_tinggi = $request->perguruan_tinggi;
        $dosen->fakultas = $request->fakultas;
        $dosen->gelar = $request->gelar;
        $dosen->penelitian = $request->penelitian;
        $dosen->save();

        $id_dosen = $dosen->id;
        $count = count($request->informasi);
        for($x=0;$x<$count;$x++){
            $informasi = new DosenInformasi;
            $informasi->dosen_id = $id_dosen;
            $informasi->informasi = $request->informasi[$x];
            $informasi->save();
        }

        Mail::to($request->email)->send(new KirimMail());
        
        return redirect()->route('landing');

        
    }
    public function daftar_mitra()
    {
        $layanans = DB::table('layanan')->get();
        return view('home.formdaftarmitra.index',['layanans'=>$layanans]);
    }
    public function proses_daftar_mitra(Request $request)
    {
        $messages = [
            'required' => 'Data Harus Disi Semua',
        ];
        $request->validate([
            'nama_lengkap' => 'required',
            'jekel' =>'required',
            'email' =>'required',
            'no_telp' =>'required',
            'nama_perusahaan' =>'required',
            'industri' =>'required',
            'devisi' => 'required',
            'posisi' =>'required',
            'alamat' =>'required',
        ],$messages);

        $mitra = new Mitra;
        $mitra->nama_lengkap = $request->nama_lengkap;
        $mitra->jekel = $request->jekel;
        $mitra->email = $request->email;
        $mitra->no_telp = $request->no_telp;
        $mitra->nama_perusahaan = $request->nama_perusahaan;
        $mitra->industri = $request->industri;
        $mitra->devisi = $request->devisi;
        $mitra->posisi = $request->posisi;
        $mitra->alamat = $request->alamat;
        $mitra->save();

        $id_mitra = $mitra->id;
        $count = count($request->informasi);
        for($x=0;$x<$count;$x++){
            $informasi = new MitraInformasi;
            $informasi->mitra_id = $id_mitra;
            $informasi->informasi = $request->informasi[$x];
            $informasi->save();
        }
        
        Mail::to($request->email)->send(new KirimMail());

        return redirect()->route('landing');

    }
    public function talenta_academy(){
        return view('home.homepage.talenta.index');
    }
    public function magang_bersertifikat(){
        return view('home.homepage.magang.index');
    }
    public function get_layanan($id)
    {
        $data = DB::table('program')->where("id_layanan",$id)->pluck('id_program','nama_program');
        return response()->json($data);
    }
    public function landing(){
        return view('home.landing');
    }
    public function tentang_kami(){
        return view('home.homepage.tentang-kami.index');
    }
}
