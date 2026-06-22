<?php

namespace App\Filament\Pages;

use App\Imports\CreditInstallmentImport;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Maatwebsite\Excel\Facades\Excel;

class ImportCreditSimulation extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view =
        'filament.pages.import-credit-simulation';

    public ?array $data = [];

    public static function getNavigationLabel(): string
    {
        return 'Import Kredit Mobil';
    }

    public function getTitle(): string
    {
        return 'Import Kredit Mobil';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Master Mobil';
    }

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-document-arrow-up';
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                FileUpload::make('file')
                    ->label('File Excel')
                    ->disk('public')
                    ->directory('credit-simulation')
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
                    new CreditInstallmentImport(),
                    $file->getRealPath()
                );

            } else {

                Excel::import(
                    new CreditInstallmentImport(),
                    storage_path('app/public/' . $file)
                );

            }

            Notification::make()
                ->success()
                ->title('Import berhasil')
                ->body(
                    'Data simulasi kredit berhasil diperbarui.'
                )
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