<?php

namespace App\Filament\Resources\CreditPrograms;

use App\Filament\Resources\CreditPrograms\Pages\CreateCreditProgram;
use App\Filament\Resources\CreditPrograms\Pages\EditCreditProgram;
use App\Filament\Resources\CreditPrograms\Pages\ListCreditPrograms;
use App\Filament\Resources\CreditPrograms\Schemas\CreditProgramForm;
use App\Filament\Resources\CreditPrograms\Tables\CreditProgramsTable;
use App\Models\CreditProgram;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CreditProgramResource extends Resource
{
    protected static ?string $model = CreditProgram::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Program Kredit';

    protected static string|\UnitEnum|null $navigationGroup =
        'Master Simulasi Kredit';

    protected static ?int $navigationSort = 3;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedClipboardDocumentList;

    public static function form(Schema $schema): Schema
    {
        return CreditProgramForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CreditProgramsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCreditPrograms::route('/'),
            'create' => CreateCreditProgram::route('/create'),
            'edit' => EditCreditProgram::route('/{record}/edit'),
        ];
    }
}