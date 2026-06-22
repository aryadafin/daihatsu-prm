<?php

namespace App\Filament\Resources\CarCreditSimulations;

use App\Filament\Resources\CarCreditSimulations\Pages\CreateCarCreditSimulation;
use App\Filament\Resources\CarCreditSimulations\Pages\EditCarCreditSimulation;
use App\Filament\Resources\CarCreditSimulations\Pages\ListCarCreditSimulations;
use App\Filament\Resources\CarCreditSimulations\Schemas\CarCreditSimulationForm;
use App\Filament\Resources\CarCreditSimulations\Tables\CarCreditSimulationsTable;
use App\Models\CarCreditSimulation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CarCreditSimulationResource extends Resource
{
    protected static ?string $model = CarCreditSimulation::class;

    protected static ?string $navigationLabel =
        'Simulasi Kredit Mobil';

    protected static string|\UnitEnum|null $navigationGroup =
        'Master Simulasi Kredit';

    protected static ?int $navigationSort = 5;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedCalculator;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return CarCreditSimulationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CarCreditSimulationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCarCreditSimulations::route('/'),
            'create' => CreateCarCreditSimulation::route('/create'),
            'edit' => EditCarCreditSimulation::route('/{record}/edit'),
        ];
    }
}