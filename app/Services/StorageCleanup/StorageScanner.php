<?php

namespace App\Services\StorageCleanup;

use Illuminate\Support\Facades\Storage;

class StorageScanner
{
    public function allFiles(): array
    {
        return collect(Storage::disk('public')->allFiles())
            ->reject(function ($file) {
                return str_starts_with($file, 'livewire-tmp/')
                    || basename($file) === '.gitignore';
            })
            ->values()
            ->all();
    }
}