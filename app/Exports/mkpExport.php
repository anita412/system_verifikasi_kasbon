<?php

namespace App\Exports;

use App\Models\Pertanggungan;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithBackgroundColor;

// use Maatwebsite\Excel\Concerns\WithColumnWidths;

use Maatwebsite\Excel\Concerns\WithStyles;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class mkpExport implements FromQuery, WithColumnFormatting, WithMapping, WithHeadings, SkipsEmptyRows, WithBackgroundColor, WithStyles, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    
    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
            // $sheet->mergeCells('A1:E1')


        ];
    }

    // public function columnWidths(): array
    // {
    //     return [
    //         'A' => 15,
    //         'B' => 20, 
    //         'C' => 25,
    //         'D' => 15, 
    //         'E' => 20,
    //         'F' => 15, 
    //         'G' => 20,
    //         'H' => 55, 
    //         'I' => 25,
    //         'J' => 45, 
    //         'K' => 25,
    //         'L' => 25, 
    //         'M' => 25,
    //         'N' => 25, 
    //         'O' => 25,
    //         'P' => 45, 
    //         'Q' => 25,
    //         'R' => 25, 
    //         'S' => 25,
    //         'T' => 25, 
    //         'U' => 25,
    //         'V' => 25,   
    //         'W' => 25,
    //         'X' => 25,  
    //     ];
    // }

    public function backgroundColor()
    {
        // Return RGB color code.
        return 'FFF8DC';
    
        // Return a Color instance. The fill type will automatically be set to "solid"
        // return new Color(Color::COLOR_BLUE);
    
        // Or return the styles array
        // return [
        //     //  'fillType'   => Fill::FILL_GRADIENT_LINEAR,
        //      'startColor' => ['argb' => Color::COLOR_RED],
        // ];
    }

    public function __construct($tglawal, $tglakhir)
    {
        $this->tglawal = $tglawal;
        $this->tglakhir = $tglakhir;
    }

    public function query()
    {

        return Pertanggungan::query()->whereBetween('created_at', [$this->tglawal, $this->tglakhir]);
    }

    public function map($pertanggungan): array
    {
        return [
            Date::dateTimeToExcel($pertanggungan->kasbon->created_at),
            $pertanggungan->id_pertanggungan,
            $pertanggungan->vkp_a_1,
            $pertanggungan->tgl_vkp_a_1,
            $pertanggungan->vkp_a_12,
            $pertanggungan->tgl_vkp_a_12,
            $pertanggungan->vkp_a_13,
            $pertanggungan->tgl_vkp_a_13,
            $pertanggungan->vkp,
            $pertanggungan->tgl_vkp,
            $pertanggungan->vkp_a_2,
            $pertanggungan->tgl_vkp_a_2,
            $pertanggungan->vkp_a_3,
            $pertanggungan->tgl_vkp_a_3,
            $pertanggungan->vkp_a_4,
            $pertanggungan->tgl_vkp_a_4
        ];
    }
    public function columnFormats(): array
    {
        return [

            'A' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'G' => NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
            'I' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            
        ];
    }
    public function headings(): array
    {
        return [
            'No Kasbon',
            'Tanggal Masuk',
            'Tanggal',
            'Status',
            'Tanggal',
            'Status',
            'Tanggal',
            'Status',
            'Tanggal',
            'Status',
            'Tanggal',
            'Status',
            'Tanggal',
            'Status',
            'Tanggal',
            'Status'
        ];
    }
    
}
