<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Grid::make(2)
                    ->schema([

                        TextInput::make('name')
                            ->label('Nama Pelanggan')
                            ->required(),

                        TextInput::make('city')
                            ->label('Kota'),

                    ]),

                FileUpload::make('photo')
                    ->label('Foto Serah Terima')
                    ->image()
                    ->disk('public')
                    ->directory('testimonials'),

                Textarea::make('message')
                    ->label('Testimoni')
                    ->required()
                    ->rows(5),

                Toggle::make('is_active')
                    ->label('Tampilkan')
                    ->default(true),

                TextInput::make('sort_order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0),

            ]);
    }
}