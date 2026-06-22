<?php

namespace App\Filament\Resources\Cars\RelationManagers;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class FeaturesRelationManager extends RelationManager
{
    protected static string $relationship = 'features';

    public function form(Schema $schema): Schema
{
    return $schema
        ->components([

            FileUpload::make('image')
                ->image()
                ->disk('public')
                ->directory('car-features')
                ->required(),

            TextInput::make('title')
                ->required()
                ->maxLength(255),

            Textarea::make('description')
                ->rows(5)
                ->columnSpanFull(),

            TextInput::make('sort_order')
                ->numeric()
                ->default(0),

        ]);
}

    public function table(Table $table): Table
{
    return $table
        ->recordTitleAttribute('title')

        ->defaultSort('sort_order')

        ->columns([

            ImageColumn::make('image')
                ->disk('public')
                ->square(),

            TextColumn::make('title')
                ->searchable(),

            TextColumn::make('sort_order')
                ->sortable(),

        ])

        ->filters([
            //
        ])

        ->headerActions([
            CreateAction::make(),
        ])

        ->recordActions([
            EditAction::make(),
            DeleteAction::make(),
        ])

        ->toolbarActions([
            BulkActionGroup::make([
                DeleteBulkAction::make(),
            ]),
        ]);
}
}
