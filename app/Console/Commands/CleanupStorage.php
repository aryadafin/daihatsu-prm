<?php

namespace App\Console\Commands;

use App\Services\StorageCleanup\CleanupService;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;

class CleanupStorage extends Command
{
    protected $signature = 'storage:cleanup {--force : Delete unused files without confirmation}';

    protected $description = 'Cleanup unused uploaded files';

    public function handle(): int
    {
        $this->info('Scanning storage...');

        /** @var CleanupService $service */
        $service = app(CleanupService::class);

        $report = $service->scan();

        $this->renderReport($report);

        /** @var Collection $unused */
        $unused = $report['unused'];

        if ($unused->isEmpty()) {
            $this->newLine();
            $this->info('✅ Storage is clean.');

            return self::SUCCESS;
        }

        if (! $this->option('force')) {

            if (! $this->confirm("\nDelete these files?")) {
                $this->warn('Cancelled.');

                return self::SUCCESS;
            }

        }

        $deleted = $service->delete($unused);

        $this->newLine();

        $this->info("🗑 Deleted {$deleted} files.");

        return self::SUCCESS;
    }

    protected function renderReport(array $report): void
    {
        /** @var Collection $used */
        $used = $report['used'];

        /** @var Collection $storage */
        $storage = $report['storage'];

        /** @var Collection $unused */
        $unused = $report['unused'];

        $size = $report['size'];

        $this->newLine();

        $this->table(
            ['Item', 'Count'],
            [
                ['Referenced Files', $used->count()],
                ['Storage Files', $storage->count()],
                ['Unused Files', $unused->count()],
                ['Unused Size', number_format($size / 1024 / 1024, 2) . ' MB'],
            ]
        );

        if ($unused->isEmpty()) {
            return;
        }

        $this->newLine();

        $this->warn('Unused Files');

        $grouped = $unused->groupBy(function ($file) {
            return explode('/', $file)[0];
        });

        foreach ($grouped as $folder => $files) {

            $this->newLine();

            $this->info($folder . ' (' . $files->count() . ')');

            foreach ($files as $file) {
                $this->line(' - ' . $file);
            }
        }
    }
}