<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class DaftarBarang implements ShouldAutoSize, WithHeadings, WithTitle
{

    public function headings(): array
    {
        return [
            ['Nama Barang', 'Jumlah Barang', 'Kode Satuan Barang', 'Kode Kategori Barang', 'Kode Cabang Barang']
        ];
    }

    public function title(): string
    {
        return 'Daftar Kategori Barang';
    }
}
