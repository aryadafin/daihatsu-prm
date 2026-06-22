<?php

namespace App\Filament\Resources\CarCreditSimulations\Pages;

use App\Filament\Resources\CarCreditSimulations\CarCreditSimulationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCarCreditSimulations extends ListRecords
{
    protected static string $resource = CarCreditSimulationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
