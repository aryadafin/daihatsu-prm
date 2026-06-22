<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use App\Models\Author;
use App\Models\Car;
use App\Models\Category;
use App\Models\HeroBanner;
use App\Models\Service;
use App\Models\Testimonial;

class FrontController extends Controller
{
    public function index()
    {
        $services = Service::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $cars = Car::query()
    ->where('is_active', true)
    ->orderBy('sort_order')
    ->get();

        $heroBanners = HeroBanner::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $testimonials = Testimonial::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $featuredArticle = ArticleNews::query()
            ->with(['author', 'category'])
            ->where('is_featured', true)
            ->latest()
            ->first();

        $latestArticles = ArticleNews::query()
            ->with(['author', 'category'])
            ->when(
                $featuredArticle,
                fn ($query) => $query->where('id', '!=', $featuredArticle->id)
            )
            ->latest()
            ->take(6)
            ->get();

        return view('front.index', compact(
            'cars',
            'heroBanners',
            'services',
            'testimonials',
            'featuredArticle',
            'latestArticles'
        ));
    }

    public function details(ArticleNews $articleNews)
    {
        $relatedArticles = ArticleNews::query()
            ->where('id', '!=', $articleNews->id)
            ->where('category_id', $articleNews->category_id)
            ->latest()
            ->take(4)
            ->get();

        return view(
            'front.articles.show',
            compact('articleNews', 'relatedArticles')
        );
    }

    public function category(Category $category)
    {
        return view('front.category', compact('category'));
    }

    public function author(Author $author)
    {
        return view('front.author', compact('author'));
    }

    public function search()
    {
        return view('front.search');
    }

    public function car(Car $car)
{
    $car->load('features');

    $relatedCars = Car::query()
        ->where('id', '!=', $car->id)
        ->where('car_category_id', $car->car_category_id)
        ->where('is_active', true)
        ->inRandomOrder()
        ->take(4)
        ->get();

    return view(
        'front.cars.show',
        compact(
            'car',
            'relatedCars'
        )
    );
}

}