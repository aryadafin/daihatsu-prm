<?php

namespace App\Filament\Resources\CreditPrograms\Pages;

use App\Filament\Resources\CreditPrograms\CreditProgramResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCreditPrograms extends ListRecords
{
    protected static string $resource = CreditProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
