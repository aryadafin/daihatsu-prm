<?php

namespace App\Services\StorageCleanup;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class CleanupService
{
    public function __construct(
        protected StorageScanner $storageScanner,
        protected FileCollector $fileCollector,
    ) {
    }

    /**
     * Scan storage dan bandingkan dengan database
     */
    public function scan(): array
    {
        $storage = collect(
            $this->storageScanner->allFiles()
        );

        $used = collect(
            $this->fileCollector->collect()
        )
            ->unique()
            ->values();

        $unused = $storage
            ->diff($used)
            ->values();

        $size = $unused->sum(function ($file) {

            if (! Storage::disk('public')->exists($file)) {
                return 0;
            }

            return Storage::disk('public')->size($file);

        });

        return [
            'storage' => $storage,
            'used' => $used,
            'unused' => $unused,
            'size' => $size,
        ];
    }

    /**
     * Hapus file yang tidak dipakai
     */
    public function delete(Collection $files): int
    {
        $deleted = 0;

        foreach ($files as $file) {

            if (! Storage::disk('public')->exists($file)) {
                continue;
            }

            if (Storage::disk('public')->delete($file)) {
                $deleted++;
            }

        }

        return $deleted;
    }
}