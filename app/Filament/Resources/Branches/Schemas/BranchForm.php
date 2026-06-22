<?php

namespace App\Filament\Resources\Branches\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class BranchForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Grid::make(2)
                    ->schema([

                        TextInput::make('name')
                            ->label('Nama Cabang')
                            ->required(),

                        TextInput::make('city')
                            ->label('Kota'),

                    ]),

                Textarea::make('address')
                    ->label('Alamat'),

                TextInput::make('phone')
                    ->label('Nomor WhatsApp'),

                TextInput::make('maps_url')
                    ->label('Link Google Maps'),

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('branches'),

                Toggle::make('is_active')
                    ->default(true),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),

            ]);
    }
}