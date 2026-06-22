<?php

namespace App\Filament\Resources\BannerAdvertisements\Pages;

use App\Filament\Resources\BannerAdvertisements\BannerAdvertisementResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBannerAdvertisements extends ListRecords
{
    protected static string $resource = BannerAdvertisementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
