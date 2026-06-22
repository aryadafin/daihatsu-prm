<?php

namespace App\Filament\Resources\CreditInstallments\Pages;

use App\Filament\Resources\CreditInstallments\CreditInstallmentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCreditInstallments extends ListRecords
{
    protected static string $resource = CreditInstallmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
