<?php

namespace App\Imports;

use App\Models\Car;
use App\Models\CarCreditSimulation;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CarCreditSimulationImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows): void
    {
        foreach ($rows as $row) {

            $car = Car::where(
                'name',
                trim($row['mobil'])
            )->first();

            if (! $car) {
                continue;
            }

            CarCreditSimulation::updateOrCreate(

                [
                    'car_id' => $car->id,
                    'name' => trim($row['nama_tipe']),
                ],

                [
                    'otr_price' => $row['harga_otr'],
                    'is_active' => $row['aktif'] ?? true,
                ]

            );
        }
    }
}