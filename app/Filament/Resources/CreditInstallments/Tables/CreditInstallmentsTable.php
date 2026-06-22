<?php

namespace App\Filament\Resources\CreditInstallments\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CreditInstallmentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('creditProgram.name')
                    ->label('Program Kredit')
                    ->searchable(),

                TextColumn::make('dp_percent')
                    ->label('DP')
                    ->suffix('%'),

                TextColumn::make('tenor')
                    ->suffix(' bulan'),

                TextColumn::make('installment')
                    ->money('IDR')
                    ->sortable(),

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