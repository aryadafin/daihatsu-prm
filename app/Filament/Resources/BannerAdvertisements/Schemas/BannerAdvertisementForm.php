<?php

namespace App\Filament\Resources\BannerAdvertisements\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;


class BannerAdvertisementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('link')
                    ->activeUrl()
                    ->maxLength(255)
                    ->required(),

                Select::make('type')
                    ->options([
                        'hero' => 'Hero',
                        'sidebar' => 'Sidebar',
                    ])
                    ->required(),

                FileUpload::make('thumbnail')
                    ->image()
                    ->directory('banner-advertisements')
                    ->required(),

                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(false),
            ]);
    }
}
