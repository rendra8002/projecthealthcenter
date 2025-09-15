<?php

use Illuminate\Support\Facades\Route;
// Backend Controllers
use App\Http\Controllers\Backend\HeroBackendController;
use App\Http\Controllers\Backend\AboutUsBackendController;
use App\Http\Controllers\Backend\GalleryBackendController;
use App\Http\Controllers\Backend\SejarahBackendController;
use App\Http\Controllers\Backend\PartnersBackendController;
use App\Http\Controllers\Backend\ServicesBackendController;
use App\Http\Controllers\Backend\MediaSocialBackendController;
use App\Http\Controllers\Backend\TenagaKerjaBackendController;
use App\Http\Controllers\Backend\TestimonialsBackendController;

// Frontend Controllers
use App\Http\Controllers\Frontend\HeroController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\SejarahController;
use App\Http\Controllers\Frontend\PartnersController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\MediaSocialController;
use App\Http\Controllers\Frontend\TenagaKerjaController;
use App\Http\Controllers\Frontend\TestimonialsController;
use App\Http\Controllers\Frontend\ContactUsController;

Route::get('/but', function () {
    return view('pages.frontend.aboutus.index');
});

Route::get('/hero', [HeroController::class, 'index'])->name('fronthero.index');
Route::get('/gallery', [GalleryController::class, 'index'])->name('frontgallery.index');
Route::get('/contactus', [ContactUsController::class, 'index'])->name('frontcontactus.index');
Route::get('/history', [SejarahController::class, 'index'])->name('frontsejarah.index');
Route::get('/mediasocial', [MediaSocialController::class, 'index'])->name('frontmediasocial.index');
Route::get('/partners', [PartnersController::class, 'index'])->name('frontpartners.index');
Route::get('/tenagakerja', [TenagaKerjaController::class, 'index'])->name('fronttenagakerja.index');
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('fronttestimonials.index');
Route::get('/aboutus', [AboutusController::class, 'index'])->name('frontaboutus.index');
Route::get('/services', [ServicesController::class, 'index'])->name('frontservices.index');


Route::prefix('adminpanel')->group(function () {
    //crud hero
    Route::get('/hero', [HeroBackendController::class, 'index'])->name('hero.index');
    Route::get('/hero/create', [HeroBackendController::class, 'create'])->name('hero.create');
    Route::post('/hero/store', [HeroBackendController::class, 'store'])->name('hero.store');
    Route::delete('/hero/delete{id}', [HeroBackendController::class, 'destroy'])->name('hero.delete');
    Route::get('/hero/{id}/edit', [HeroBackendController::class, 'edit'])->name('hero.edit');
    Route::put('/hero/update/{id}', [HeroBackendController::class, 'update'])->name('hero.update');
    //crud aboutus
    Route::get('/aboutus', [AboutUsBackendController::class, 'index'])->name('aboutus.index');
    Route::get('/aboutus/create', [AboutUsBackendController::class, 'create'])->name('aboutus.create');
    Route::post('/aboutus/store', [AboutUsBackendController::class, 'store'])->name('aboutus.store');
    Route::delete('/aboutus/delete{id}', [AboutUsBackendController::class, 'destroy'])->name('aboutus.delete');
    Route::get('/aboutus/{id}/edit', [AboutUsBackendController::class, 'edit'])->name('aboutus.edit');
    Route::put('/aboutus/update/{id}', [AboutUsBackendController::class, 'update'])->name('aboutus.update');

    //crud t.kerja    
    Route::get('/tenagakerja', [TenagaKerjaBackendController::class, 'index'])->name('tenagakerja.index');
    Route::get('/tenagakerja/create', [TenagaKerjaBackendController::class, 'create'])->name('tenagakerja.create');
    Route::post('/tenagakerja/store', [TenagaKerjaBackendController::class, 'store'])->name('tenagakerja.store');
    Route::delete('/tenagakerja/delete{id}', [TenagaKerjaBackendController::class, 'destroy'])->name('tenagakerja.delete');
    Route::get('/tenagakerja/{id}/edit', [TenagaKerjaBackendController::class, 'edit'])->name('tenagakerja.edit');
    Route::put('/tenagakerja/update/{id}', [TenagaKerjaBackendController::class, 'update'])->name('tenagakerja.update');

    Route::get('/services', [ServicesBackendController::class, 'index'])->name('services.index');
    Route::get('/testimonials', [TestimonialsBackendController::class, 'index'])->name('testimonials.index');
    Route::get('/mediasocial', [MediaSocialBackendController::class, 'index'])->name('mediasocial.index');
    Route::get('/partners', [PartnersBackendController::class, 'index'])->name('partners.index');
    Route::get('/gallery', [GalleryBackendController::class, 'index'])->name('gallery.index');
    Route::get('/sejarah', [SejarahBackendController::class, 'index'])->name('sejarah.index');
});


