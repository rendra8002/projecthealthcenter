<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HeroController;
use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\SejarahController;
use App\Http\Controllers\Backend\PartnersController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\MediaSocialController;
use App\Http\Controllers\Backend\TenagaKerjaController;
use App\Http\Controllers\Backend\TestimonialsController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('adminpanel/hero', [HeroController::class, 'index'])->name('hero.index');
Route::get('adminpanel/aboutus', [AboutUsController::class, 'index'])->name('aboutus.index');
Route::get('adminpanel/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('adminpanel/tenagakerja', [TenagaKerjaController::class, 'index'])->name('tenagakerja.index');
Route::get('adminpanel/testimonials', [TestimonialsController::class, 'index'])->name('testimonials.index');
Route::get('adminpanel/mediasocial', [MediaSocialController::class, 'index'])->name('mediasocial.index');
Route::get('adminpanel/partners', [PartnersController::class, 'index'])->name('partners.index');
Route::get('adminpanel/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('adminpanel/sejarah', [SejarahController::class, 'index'])->name('sejarah.index');

