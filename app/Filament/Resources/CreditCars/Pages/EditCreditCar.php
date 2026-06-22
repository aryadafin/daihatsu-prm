<?php

namespace App\Filament\Resources\CreditCars\Pages;

use App\Filament\Resources\CreditCars\CreditCarResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCreditCar extends EditRecord
{
    protected static string $resource = CreditCarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
