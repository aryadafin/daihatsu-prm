<?php

namespace App\Filament\Pages;

use App\Imports\CarImport;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Maatwebsite\Excel\Facades\Excel;

class ImportCars extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view = 'filament.pages.import-cars';

    protected static ?string $navigationLabel = 'Import Mobil';

    protected static string|\UnitEnum|null $navigationGroup = 'Master Mobil';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-arrow-up-tray';

    protected static ?string $title = 'Import Mobil';

    public ?array $data = [];

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('file')
    ->label('File Excel')
    ->required(),
            ])
            ->statePath('data');
    }

    public function import(): void
{
    try {

        $file = reset($this->data['file']);

        Excel::import(
            new CarImport(),
            $file
        );

        Notification::make()
            ->success()
            ->title('Import berhasil')
            ->body('Data mobil berhasil diperbarui.')
            ->send();

        $this->reset('data');

    } catch (\Throwable $e) {

        Notification::make()
            ->danger()
            ->title('Import gagal')
            ->body($e->getMessage())
            ->persistent()
            ->send();

    }
}
}