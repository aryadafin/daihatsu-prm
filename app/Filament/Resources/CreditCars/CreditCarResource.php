<?php

namespace App\Filament\Resources\CreditCars;

use App\Filament\Resources\CreditCars\Pages\CreateCreditCar;
use App\Filament\Resources\CreditCars\Pages\EditCreditCar;
use App\Filament\Resources\CreditCars\Pages\ListCreditCars;
use App\Filament\Resources\CreditCars\Schemas\CreditCarForm;
use App\Filament\Resources\CreditCars\Tables\CreditCarsTable;
use App\Models\CreditCar;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CreditCarResource extends Resource
{
    protected static ?string $model = CreditCar::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Mobil Kredit';

    protected static string|\UnitEnum|null $navigationGroup =
        'Master Simulasi Kredit';

    protected static ?int $navigationSort = 1;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedTruck;

    public static function form(Schema $schema): Schema
    {
        return CreditCarForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CreditCarsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCreditCars::route('/'),
            'create' => CreateCreditCar::route('/create'),
            'edit' => EditCreditCar::route('/{record}/edit'),
        ];
    }
}