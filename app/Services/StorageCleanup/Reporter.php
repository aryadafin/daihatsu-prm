<?php

namespace App\Services\StorageCleanup;

use Illuminate\Support\Collection;

class Reporter
{
    public function print(array $report): void
    {
        /** @var Collection $used */
        $used = $report['used'];

        /** @var Collection $storage */
        $storage = $report['storage'];

        /** @var Collection $unused */
        $unused = $report['unused'];

        dump([
            'Referenced Files' => $used->count(),
            'Storage Files' => $storage->count(),
            'Unused Files' => $unused->count(),
        ]);

        foreach ($unused as $file) {
            dump($file);
        }
    }
}