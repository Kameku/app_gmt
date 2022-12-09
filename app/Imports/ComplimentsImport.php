<?php

namespace App\Imports;

use App\Models\Compliment;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ComplimentsImport implements ToModel, WithHeadingRow
{
    
    public function model(array $row)
    {

        return new Compliment([

            'manifest'        =>  $row['manifiesto'],
            'client'          =>  $row['cliente'],
            'plate'           =>  $row['placa'],
            'identity_card'   =>  $row['cedula'],
            'compliment_date' =>  $row['fecha_cumplido'],
            'payment_date'    =>  $row['fecha_de_pago'],
            'observations'    =>  $row['observaciones'],
            
        ]);
    }
}
