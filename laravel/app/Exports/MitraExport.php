<?php

namespace App\Exports;

use App\Models\Mitra;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MitraExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mitra::all();
    }
    public function headings(): array
    {
        return 
        [
            "ID",
            "Nama Lengkap",
            "Jenis Kelamin",
            "Email",
            "No Telp",
            "Nama Perusahaan",
            "Industri",
            "Divisi",
            "Posisi",
            "ALamat Perusahaan"
        ];
    }
}
