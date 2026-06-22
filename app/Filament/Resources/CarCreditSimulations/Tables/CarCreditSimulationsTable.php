<?php

namespace App\Filament\Resources\CarCreditSimulations\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CarCreditSimulationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('car.name')
                    ->label('Mobil')
                    ->searchable(),

                TextColumn::make('name')
                    ->label('Nama Tipe')
                    ->searchable(),

                TextColumn::make('otr_price')
                    ->label('Harga OTR')
                    ->money('IDR')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}