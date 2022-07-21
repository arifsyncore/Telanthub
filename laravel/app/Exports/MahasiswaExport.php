<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MahasiswaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mahasiswa::select('id','nama_lengkap','nim','pendidikan_terakhir','tgl_lahir','jekel','nama_layanan','nama_program','email','no_telp','perguruan_tinggi','fakultas','prodi','gelar','mulai_bulan','mulai_thn','akhir_bulan','akhir_thn')
        ->join('layanan','mahasiswas.id_layanan','=','layanan.id_layanan')->join('program','mahasiswas.id_program','=','program.id_program')->get();
    }

    public function headings(): array
    {
        return 
        [
            "ID", 
            "Nama", 
            "Nim",
            "Pendidikan Terakhir",
            "Tanggal Lahir",
            "jenis Kelamin",
            "Layanan",
            "Program",
            "Email",
            "No Telp",
            "Perguruan Tinggi",
            "Fakultas",
            "Program Studi",
            "Gelar",
            "Bulan Mulai Kuliah",
            "Tahun Mulai Kuliah",
            "Bulan Selesai Kuliah",
            "Tahun Selesai Kuliah",

        ];
    }
}
