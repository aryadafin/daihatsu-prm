<?php

namespace App\Filament\Resources\ArticleNews\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;

class ArticleNewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->maxLength(255)
                    ->required(),

               

                FileUpload::make('thumbnail')
    ->image()
    ->disk('public')
    ->directory('articles')
    ->visibility('public')
    ->required(),

                Toggle::make('is_featured')
                    ->label('Featured')
                    ->default(false),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('author_id')
                    ->relationship('author', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                 RichEditor::make('content')
    ->toolbarButtons([
        'attachFiles',
        'bold',
        'italic',
        'underline',
        'strike',
        'h2',
        'h3',
        'bulletList',
        'orderedList',
        'blockquote',
        'codeBlock',
        'link',
        'redo',
        'undo',
    ])
                    ->required()
                    ->columnSpanFull(),
                
            ]);
    }
}
