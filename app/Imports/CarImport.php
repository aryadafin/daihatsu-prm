<?php

namespace App\Imports;

use App\Models\Car;
use App\Models\CarCategory;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CarImport implements ToCollection, WithHeadingRow
{
   public function collection(Collection $rows): void
{
    foreach ($rows as $row) {

        $category = CarCategory::firstOrCreate(

            [
                'name' => trim($row['category']),
            ],

            [
                'slug' => Str::slug(
                    trim($row['category'])
                ),
            ]

        );

        $car = Car::firstOrNew([
            'slug' => Str::slug($row['name']),
        ]);

        $car->car_category_id = $category->id;

        $car->name = $row['name'];

        $car->price = $row['price'];

        $car->youtube_url = $row['youtube_url'];

        $car->description = $row['description'];

        $car->specification = $row['specification'];

        $car->engine = $row['engine'];

        $car->fuel_type = $row['fuel_type'];

        $car->transmission = $row['transmission'];

        $car->seat_capacity = $row['seat_capacity'];

        $car->slug = Str::slug($row['name']);

        $car->is_featured = false;

        $car->is_active = true;

        $car->meta_title =
            $row['name'] .
            ' - Harga dan Promo Terbaru | Daihatsu PRM';

        $car->meta_description =
            'Temukan ' .
            $row['name'] .
            ' dengan promo terbaik dan simulasi kredit mudah di Daihatsu PRM.';

        // Thumbnail dan hero image tetap aman
        // karena tidak diubah oleh import

        $car->save();
    }
}
}