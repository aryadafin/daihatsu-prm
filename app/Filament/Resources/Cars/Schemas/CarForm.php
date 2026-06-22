<?php

namespace App\Filament\Resources\Cars\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

            
                Select::make('car_category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn ($state, callable $set) =>
                        $set('slug', Str::slug($state))
                    ),

                TextInput::make('slug')
                    ->required()
                    ->disabled()
                    ->dehydrated(),

                TextInput::make('price')
                    ->numeric()
                    ->prefix('Rp'),

                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->disk('public')
                    ->directory('cars')
                    ->visibility('public')
                    ->downloadable()
                    ->openable()
                    ->fetchFileInformation(false)
                    ->nullable(),

                FileUpload::make('hero_image')
                    ->label('Hero Image')
                    ->image()
                    ->disk('public')
                    ->directory('cars/hero')
                    ->visibility('public')
                    ->downloadable()
                    ->openable()
                    ->fetchFileInformation(false)
                    ->nullable(),

                TextInput::make('youtube_url')
                    ->label('YouTube URL')
                    ->url()
                    ->placeholder('https://www.youtube.com/watch?v=xxxxx'),

                Textarea::make('description')
                    ->columnSpanFull(),

                Textarea::make('specification')
                    ->columnSpanFull(),

                TextInput::make('engine'),

                TextInput::make('fuel_type'),

                TextInput::make('transmission'),

                TextInput::make('seat_capacity')
                    ->numeric(),

                TextInput::make('sort_order')
    ->label('Urutan Tampil')
    ->numeric()
    ->default(0),

                Toggle::make('is_active')
                    ->label('Is Active')
                    ->default(true),

                TextInput::make('meta_title'),

                Textarea::make('meta_description')
                    ->columnSpanFull(),

            ]);
            
    }
}