<?php

namespace App\Filament\Resources\CreditPrograms\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CreditProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('credit_car_id')
    ->label('Mobil')
    ->relationship('creditCar', 'name')
    ->searchable()
    ->preload()
    ->required(),

                Select::make('leasing_id')
    ->label('Leasing')
    ->relationship('leasing', 'name')
    ->searchable()
    ->preload()
    ->required(),

                TextInput::make('name')
                    ->label('Program Kredit')
                    ->required()
                    ->maxLength(255),

                TextInput::make('otr_price')
                    ->label('OTR')
                    ->prefix('Rp')
                    ->numeric()
                    ->required(),

                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),

            ]);
    }
}