<?php

namespace App\Filament\Resources\CreditPrograms\Pages;

use App\Filament\Resources\CreditPrograms\CreditProgramResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCreditProgram extends EditRecord
{
    protected static string $resource = CreditProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
