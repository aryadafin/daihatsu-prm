<?php

namespace App\Filament\Resources\BannerAdvertisements;

use App\Filament\Resources\BannerAdvertisements\Pages\CreateBannerAdvertisement;
use App\Filament\Resources\BannerAdvertisements\Pages\EditBannerAdvertisement;
use App\Filament\Resources\BannerAdvertisements\Pages\ListBannerAdvertisements;
use App\Filament\Resources\BannerAdvertisements\Schemas\BannerAdvertisementForm;
use App\Filament\Resources\BannerAdvertisements\Tables\BannerAdvertisementsTable;
use App\Models\BannerAdvertisement;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerAdvertisementResource extends Resource
{
    protected static ?string $model = BannerAdvertisement::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMegaphone;

    protected static ?string $recordTitleAttribute = 'BannerAdvertisement';

    public static function form(Schema $schema): Schema
    {
        return BannerAdvertisementForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BannerAdvertisementsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBannerAdvertisements::route('/'),
            'create' => CreateBannerAdvertisement::route('/create'),
            'edit' => EditBannerAdvertisement::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
