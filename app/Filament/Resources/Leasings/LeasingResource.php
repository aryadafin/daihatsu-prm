<?php

namespace App\Filament\Resources\Leasings;

use App\Filament\Resources\Leasings\Pages\CreateLeasing;
use App\Filament\Resources\Leasings\Pages\EditLeasing;
use App\Filament\Resources\Leasings\Pages\ListLeasings;
use App\Filament\Resources\Leasings\Schemas\LeasingForm;
use App\Filament\Resources\Leasings\Tables\LeasingsTable;
use App\Models\Leasing;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LeasingResource extends Resource
{
    protected static ?string $model = Leasing::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Leasing';

    protected static string|\UnitEnum|null $navigationGroup =
        'Master Simulasi Kredit';

    protected static ?int $navigationSort = 2;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedBuildingLibrary;

    public static function form(Schema $schema): Schema
    {
        return LeasingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LeasingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLeasings::route('/'),
            'create' => CreateLeasing::route('/create'),
            'edit' => EditLeasing::route('/{record}/edit'),
        ];
    }
}