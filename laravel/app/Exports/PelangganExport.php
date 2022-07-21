<?php

namespace App\Exports;

use App\Models\Langganan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PelangganExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Langganan::all();
    }
    public function headings(): array
    {
        return 
        [
            "ID",
            "Nama",
            "Email",
            "No Telp",
            "Perusahaan",
        ];
    }
}