<?php

namespace App\Imports;

use App\Models\CreditCar;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CreditCarImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows): void
    {
        foreach ($rows as $row) {

            CreditCar::updateOrCreate(

                [
                    'slug' => Str::slug($row['name']),
                ],

                [
                    'name' => trim($row['name']),
                    'slug' => Str::slug($row['name']),
                    'is_active' => true,
                ]

            );

        }
    }
}