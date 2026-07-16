<?php


namespace App\Services\StorageCleanup;

use App\Models\ArticleNews;
use App\Models\Author;
use App\Models\BannerAdvertisement;
use App\Models\Branch;
use App\Models\Car;
use App\Models\CarFeature;
use App\Models\Career;
use App\Models\Category;
use App\Models\HeroBanner;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Support\Collection;

class FileCollector
{
    public function collect(): array
    {
        $files = collect();

        $this->collectField($files, BannerAdvertisement::class, 'thumbnail');

        $this->collectField($files, ArticleNews::class, 'thumbnail');

        $this->collectField($files, Testimonial::class, 'photo');

        $this->collectField($files, Author::class, 'avatar');

        $this->collectField($files, Career::class, 'image');

        $this->collectField($files, Branch::class, 'image');

        $this->collectField($files, Service::class, 'image');

        $this->collectField($files, Category::class, 'icon');

        $this->collectField($files, CarFeature::class, 'image');

        $this->collectField($files, Car::class, 'thumbnail');
        $this->collectField($files, Car::class, 'hero_image');

        $this->collectField($files, HeroBanner::class, 'desktop_image');
        $this->collectField($files, HeroBanner::class, 'mobile_image');

        return $files
            ->filter()
            ->map(fn ($file) => $this->normalizePath($file))
            ->filter()
            ->unique()
            ->values()
            ->all();
    }

    protected function collectField(Collection &$files, string $model, string $field): void
    {
        if (! class_exists($model)) {
            return;
        }

        try {

            $model::query()
                ->whereNotNull($field)
                ->pluck($field)
                ->each(function ($value) use (&$files) {

                    if (blank($value)) {
                        return;
                    }

                    if (is_array($value)) {
                        foreach ($value as $item) {
                            $files->push($item);
                        }

                        return;
                    }

                    $files->push($value);

                });

        } catch (\Throwable $e) {
            // skip
        }
    }

    protected function normalizePath(string $path): ?string
    {
        $path = trim($path);

        if ($path === '') {
            return null;
        }

        $path = str_replace('\\', '/', $path);

        // jika full URL
        if (filter_var($path, FILTER_VALIDATE_URL)) {

            $urlPath = parse_url($path, PHP_URL_PATH);

            $path = ltrim($urlPath, '/');

        }

        // hapus prefix storage/
        if (str_starts_with($path, 'storage/')) {
            $path = substr($path, 8);
        }

        // hapus slash depan
        $path = ltrim($path, '/');

        return $path;
    }
}