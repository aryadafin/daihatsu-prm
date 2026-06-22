<?php

namespace App\Imports;

use App\Models\CreditCar;
use App\Models\Leasing;
use App\Models\CreditProgram;
use App\Models\CreditInstallment;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CreditInstallmentImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows): void
    {
        foreach ($rows as $row) {

            if (empty($row['mobil'])) {
                continue;
            }

            // Mobil simulasi kredit
            $car = CreditCar::firstOrCreate([
                'name' => trim($row['mobil']),
            ]);

            // Leasing
            $leasing = Leasing::firstOrCreate([
                'name' => trim($row['leasing']),
            ]);

            // Program kredit
            $program = CreditProgram::updateOrCreate(
                [
                    'credit_car_id' => $car->id,
                    'leasing_id' => $leasing->id,
                    'name' => trim($row['program']),
                ],
                [
                    'otr_price' => (int) $row['otr'],
                    'is_active' => true,
                ]
            );

            // Angsuran
            foreach ([12, 24, 36, 48, 60] as $tenor) {

                if (empty($row[$tenor])) {
                    continue;
                }

                CreditInstallment::updateOrCreate(
                    [
                        'credit_program_id' => $program->id,
                        'dp_percent' => (int) $row['dp'],
                        'tenor' => $tenor,
                    ],
                    [
                        'installment' => (int) $row[$tenor],
                    ]
                );
            }
        }
    }
}