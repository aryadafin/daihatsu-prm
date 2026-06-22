<?php

namespace App\Filament\Resources\CreditCars\Pages;

use App\Filament\Resources\CreditCars\CreditCarResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCreditCars extends ListRecords
{
    protected static string $resource = CreditCarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
