<?php

namespace App\Filament\Resources\CarCreditSimulations\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CarCreditSimulationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('car_id')
                    ->label('Mobil')
                    ->relationship('car', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('name')
                    ->label('Nama Tipe')
                    ->required()
                    ->maxLength(255),

                TextInput::make('otr_price')
                    ->label('Harga OTR')
                    ->prefix('Rp')
                    ->numeric()
                    ->required(),

                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),

            ]);
    }
}