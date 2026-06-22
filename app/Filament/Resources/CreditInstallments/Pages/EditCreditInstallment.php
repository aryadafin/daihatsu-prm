<?php

namespace App\Filament\Resources\CreditInstallments\Pages;

use App\Filament\Resources\CreditInstallments\CreditInstallmentResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCreditInstallment extends EditRecord
{
    protected static string $resource = CreditInstallmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
