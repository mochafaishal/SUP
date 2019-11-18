<?php

namespace App\Exports;

use App\Total;
use Maatwebsite\Excel\Concerns\FromCollection;

class TotalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Total::all();
    }
}
