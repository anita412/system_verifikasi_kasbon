<?php

namespace App\Exports;


use App\Models\Kasbon;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

class KasbonExport implements FromCollection, WithMapping, WithHeadings, SkipsEmptyRows
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function map($kasbon): array
    {
        return [
            $kasbon->nokasbon,
            $kasbon->tglmasuk,
            $kasbon->jammasuk,
            $kasbon->jeniskasbon,
            $kasbon->user->name,
            $kasbon->nip,
            $kasbon->unit->name,
            $kasbon->doksebelumnya,
            $kasbon->kodekasbon->name,
            $kasbon->jenis->name,
            $kasbon->kurs->name,
            $kasbon->proyek,
            $kasbon->uraianpengguna,
            $kasbon->iddpp,
            $kasbon->idppn,
            $kasbon->pph->name,
            $kasbon->idpph,
            $kasbon->total,
            $kasbon->namavendor,
            $kasbon->haritempo,
            $kasbon->tgltempo,
            $kasbon->noinvoice,
            $kasbon->spph,
            $kasbon->po_vendor,
            $kasbon->po_customer,
            $kasbon->sjn,
            $kasbon->harga_jual,
            $kasbon->barang_datang,
            $kasbon->nopi,
            $kasbon->formatkasbon,
        ];
    }
    public function headings(): array
    {
        return [
            'No Kasbon',
            'Tanggal Masuk',
            'Jam Masuk',
            'Jenis Kasbon',
            'User',
            'NIP',
            'Unit',
            'Dokumen Sebelumnya',
            'Kode Kasbon',
            'Jenis',
            'Kurs',
            'Proyek',
            'Uraian Penggunaan',
            'DPP',
            'PPN',
            'PPH',
            'PPH',
            'Total',
            'Nama Vendor',
            'Hari Tempo',
            'Tanggal Tempo',
            'No Invoice',
            'SPPH',
            'PO Vendor',
            'PO Customer',
            'SJN',
            'Harga Jual',
            'Barang Datang',
            'No PI',
            'Format Kasbon',
        ];
    }
    public function collection()
    {
        return Kasbon::all();
    }
}
