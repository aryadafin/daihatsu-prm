<?php

namespace App\Filament\Resources\Careers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CareerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->label('Posisi')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn ($state, callable $set) =>
                        $set('slug', Str::slug($state))
                    ),

                TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->required(),

                TextInput::make('location')
                    ->label('Lokasi')
                    ->placeholder('Serpong'),

                Select::make('employment_type')
                    ->label('Jenis Pekerjaan')
                    ->options([
                        'Full Time' => 'Full Time',
                        'Part Time' => 'Part Time',
                        'Internship' => 'Internship',
                        'Freelance' => 'Freelance',
                    ])
                    ->default('Full Time')
                    ->required(),

                TextInput::make('salary')
                    ->label('Gaji')
                    ->placeholder('Gaji Pokok + Insentif'),

                FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->disk('public')
                    ->directory('careers')
                    ->visibility('public')
                    ->downloadable()
                    ->openable(),

                TextInput::make('button_text')
                    ->label('Teks Tombol')
                    ->default('Lamar Sekarang'),

                TextInput::make('button_url')
                    ->label('Link Tombol')
                    ->url()
                    ->default('https://wa.me/6285222300036'),

                RichEditor::make('description')
                    ->label('Deskripsi Pekerjaan')
                    ->columnSpanFull(),

                RichEditor::make('requirement')
                    ->label('Persyaratan')
                    ->columnSpanFull(),

                RichEditor::make('benefit')
                    ->label('Benefit')
                    ->columnSpanFull(),

                TextInput::make('sort_order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),

            ]);
    }
}