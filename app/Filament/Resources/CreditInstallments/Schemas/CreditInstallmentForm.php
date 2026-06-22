<?php

namespace App\Filament\Resources\CreditInstallments\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CreditInstallmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

            Select::make('leasing')
    ->options([
        'ACC' => 'ACC',
        'MTF' => 'MTF',
        'BCA Finance' => 'BCA Finance',
        'Adira' => 'Adira',
        'Mandiri Tunas Finance' => 'Mandiri Tunas Finance',
    ])
    ->searchable()
    ->required(),
                Select::make('credit_program_id')
                    ->relationship('creditProgram', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('dp_percent')
                    ->label('DP (%)')
                    ->numeric()
                    ->required(),

                TextInput::make('tenor')
                    ->label('Tenor')
                    ->suffix('bulan')
                    ->numeric()
                    ->required(),

                TextInput::make('installment')
                    ->label('Cicilan')
                    ->prefix('Rp')
                    ->numeric()
                    ->required(),

            ]);
    }
}