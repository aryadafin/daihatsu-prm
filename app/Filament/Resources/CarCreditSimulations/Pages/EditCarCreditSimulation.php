<?php

namespace App\Filament\Resources\CarCreditSimulations\Pages;

use App\Filament\Resources\CarCreditSimulations\CarCreditSimulationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCarCreditSimulation extends EditRecord
{
    protected static string $resource = CarCreditSimulationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
