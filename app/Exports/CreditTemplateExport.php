<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class CreditTemplateExport implements FromArray
{
    public function array(): array
    {
        return [

            [
                'mobil',
                'leasing',
                'program',
                'otr',
                'dp',
                '12',
                '24',
                '36',
                '48',
                '60',
            ],

            [
                'New Rocky',
                'ACC',
                'Rocky 1.2 X MT',
                230000000,
                20,
                18000000,
                9800000,
                7200000,
                6100000,
                5300000,
            ],

            [
                'New Rocky',
                'ACC',
                'Rocky 1.2 X MT',
                230000000,
                25,
                17000000,
                9300000,
                6800000,
                5800000,
                5000000,
            ],

        ];
    }
    
}