<?php

namespace App\Filament\Resources\CreditPrograms\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CreditProgramsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('creditCar.name')
    ->label('Mobil')
    ->searchable(),

                TextColumn::make('leasing.name')
    ->label('Leasing')
    ->badge(),

                TextColumn::make('name')
                    ->label('Program Kredit')
                    ->searchable(),

                TextColumn::make('otr_price')
                    ->label('OTR')
                    ->money('IDR')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}