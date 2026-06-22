<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

use App\Models\Car;
use App\Models\ArticleNews;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate sitemap.xml';

    public function handle()
{
    $sitemap = Sitemap::create();

    // Homepage
    $sitemap->add(
        Url::create(url('/'))
    );

    // Karir
    $sitemap->add(
        Url::create(route('front.career'))
    );

    // Semua mobil
    Car::all()->each(function ($car) use ($sitemap) {
        $sitemap->add(
            Url::create(
                route('front.car', $car)
            )
        );
    });

    // Semua artikel
    ArticleNews::all()->each(function ($article) use ($sitemap) {
        $sitemap->add(
            Url::create(
                route('front.details', $article)
            )
        );
    });

    $sitemap->writeToFile(
        public_path('sitemap.xml')
    );

    $this->info('Sitemap generated successfully!');
}
}