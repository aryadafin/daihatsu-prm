<?php

namespace App\Filament\Pages;

use App\Imports\CarCreditSimulationImport;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Maatwebsite\Excel\Facades\Excel;

class ImportOtrCars extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view =
        'filament.pages.import-otr-cars';

    public ?array $data = [];

    public static function getNavigationLabel(): string
    {
        return 'Import OTR Mobil';
    }

    public function getTitle(): string
    {
        return 'Import OTR Mobil';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Master Mobil';
    }

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-banknotes';
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                FileUpload::make('file')
                    ->label('File Excel')
                    ->disk('public')
                    ->directory('otr-imports')
                    ->acceptedFileTypes([
                        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                        'application/vnd.ms-excel',
                        'text/csv',
                    ])
                    ->required(),

            ])
            ->statePath('data');
    }

    public function import(): void
    {
        try {

            $file = collect($this->data['file'])->first();

            if ($file instanceof TemporaryUploadedFile) {

                Excel::import(
                    new CarCreditSimulationImport(),
                    $file->getRealPath()
                );

            } else {

                Excel::import(
                    new CarCreditSimulationImport(),
                    storage_path('app/public/' . $file)
                );

            }

            Notification::make()
                ->success()
                ->title('Import berhasil')
                ->body('Data OTR mobil berhasil diperbarui.')
                ->send();

            $this->data = [];

            $this->form->fill();

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