<?php

namespace App\Filament\Resources\CreditInstallments;

use App\Filament\Resources\CreditInstallments\Pages\CreateCreditInstallment;
use App\Filament\Resources\CreditInstallments\Pages\EditCreditInstallment;
use App\Filament\Resources\CreditInstallments\Pages\ListCreditInstallments;
use App\Filament\Resources\CreditInstallments\Schemas\CreditInstallmentForm;
use App\Filament\Resources\CreditInstallments\Tables\CreditInstallmentsTable;
use App\Models\CreditInstallment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CreditInstallmentResource extends Resource
{
    protected static ?string $model = CreditInstallment::class;

    protected static ?string $recordTitleAttribute = 'id';

    protected static ?string $navigationLabel = 'Angsuran';

    protected static string|\UnitEnum|null $navigationGroup =
        'Master Simulasi Kredit';

    protected static ?int $navigationSort = 4;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedBanknotes;

    public static function form(Schema $schema): Schema
    {
        return CreditInstallmentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CreditInstallmentsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCreditInstallments::route('/'),
            'create' => CreateCreditInstallment::route('/create'),
            'edit' => EditCreditInstallment::route('/{record}/edit'),
        ];
    }
}