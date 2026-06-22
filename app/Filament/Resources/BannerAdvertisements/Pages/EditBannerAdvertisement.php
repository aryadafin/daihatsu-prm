<?php

namespace App\Filament\Resources\BannerAdvertisements\Pages;

use App\Filament\Resources\BannerAdvertisements\BannerAdvertisementResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditBannerAdvertisement extends EditRecord
{
    protected static string $resource = BannerAdvertisementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
