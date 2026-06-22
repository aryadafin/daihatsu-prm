<?php

namespace App\Filament\Resources\Authors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class AuthorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn (?string $state, Set $set) => $set('slug', Str::slug($state))
                    ),

                TextInput::make('occupation')
                    ->required(),

                FileUpload::make('avatar')
                    ->image()
                    ->directory('authors')
                    ->required(),

                TextInput::make('slug')
                    ->required()
                    ->disabled()
                    ->dehydrated(),
            ]);
    }
}