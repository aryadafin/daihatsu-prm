<?php

use App\Http\Controllers\FrontController;
use App\Livewire\CreditSimulationPage;
use App\Exports\CreditTemplateExport;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;

Route::controller(FrontController::class)->group(function () {

    Route::get('/', 'index')
        ->name('front.index');

    Route::get('/mobil/{car:slug}', 'car')
        ->name('front.car');

    Route::get('/artikel/{articleNews}', 'details')
        ->name('front.details');

    Route::get('/kategori/{category}', 'category')
        ->name('front.category');

    Route::get('/author/{author}', 'author')
        ->name('front.author');

    Route::get('/search', 'search')
        ->name('front.search');

});


/*
|--------------------------------------------------------------------------
| Simulasi Kredit
|--------------------------------------------------------------------------
*/

Route::view(
    '/simulasi-kredit',
    'front.credit-simulation'
)->name('credit.simulation');

/*
|--------------------------------------------------------------------------
| Download Template Simulasi Kredit
|--------------------------------------------------------------------------
*/

Route::get('/download-template-kredit', function () {

    return Excel::download(
        new CreditTemplateExport(),
        'template-simulasi-kredit.xlsx'
    );

})->name('credit.template');
Route::get('/karir', [CareerController::class, 'show'])
    ->name('front.career');

    Route::view(
    '/simulasi-kredit-v2',
    'front.credit-simulation-v2'
)->name('credit.simulation.v2');

Route::get(
    '/lokasi',
    [ContactController::class, 'index']
)->name('front.contact');