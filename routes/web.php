<?php

use Illuminate\Support\Facades\Route;
// Frontend Controllers

use App\Http\Controllers\Frontend\HeroController;

//backend
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Backend\HeroBackendController;
use App\Http\Controllers\Backend\UserBackendController;
use App\Http\Controllers\Backend\AboutUsBackendController;
use App\Http\Controllers\Backend\GalleryBackendController;
use App\Http\Controllers\Backend\SejarahBackendController;
use App\Http\Controllers\Backend\PartnersBackendController;
use App\Http\Controllers\Backend\ServicesBackendController;
use App\Http\Controllers\Backend\AppointmentBackendController;
use App\Http\Controllers\Backend\MediaSocialBackendController;
use App\Http\Controllers\Backend\TenagaKerjaBackendController;
use App\Http\Controllers\Backend\TestimonialsBackendController;





Route::get('/', [HeroController::class, 'index'])->name('fronthero.index');
Route::post('/hero/store', [HeroController::class, 'store'])->name('fronthero.store');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'adminpanel'])
    ->prefix('adminpanel')
    ->group(function () {

        //crud hero
        Route::post('/hero/{id}/toggle-status', [HeroBackendController::class, 'toggleStatus'])->name('hero.toggle-status');
        Route::get('/hero', [HeroBackendController::class, 'index'])->name('hero.index');
        Route::get('/hero/create', [HeroBackendController::class, 'create'])->name('hero.create');
        Route::post('/hero/store', [HeroBackendController::class, 'store'])->name('hero.store');
        Route::delete('/hero/delete/{id}', [HeroBackendController::class, 'destroy'])->name('hero.delete');
        Route::get('/hero/{id}/edit', [HeroBackendController::class, 'edit'])->name('hero.edit');
        Route::put('/hero/update/{id}', [HeroBackendController::class, 'update'])->name('hero.update');

        //crud aboutus
        Route::post('/aboutus/{id}/toggle-status', [AboutUsBackendController::class, 'toggleStatus'])->name('aboutus.toggle-status');
        Route::get('/aboutus', [AboutUsBackendController::class, 'index'])->name('aboutus.index');
        Route::get('/aboutus/create', [AboutUsBackendController::class, 'create'])->name('aboutus.create');
        Route::post('/aboutus/store', [AboutUsBackendController::class, 'store'])->name('aboutus.store');
        Route::delete('/aboutus/delete/{id}', [AboutUsBackendController::class, 'destroy'])->name('aboutus.delete');
        Route::get('/aboutus/{id}/edit', [AboutUsBackendController::class, 'edit'])->name('aboutus.edit');
        Route::put('/aboutus/update/{id}', [AboutUsBackendController::class, 'update'])->name('aboutus.update');

        //crud t.kerja    
        Route::post('/tenagakerja/{id}/toggle-status', [TenagaKerjaBackendController::class, 'toggleStatus'])->name('tenagakerja.toggle-status');
        Route::get('/tenagakerja', [TenagaKerjaBackendController::class, 'index'])->name('tenagakerja.index');
        Route::get('/tenagakerja/create', [TenagaKerjaBackendController::class, 'create'])->name('tenagakerja.create');
        Route::post('/tenagakerja/store', [TenagaKerjaBackendController::class, 'store'])->name('tenagakerja.store');
        Route::delete('/tenagakerja/delete/{id}', [TenagaKerjaBackendController::class, 'destroy'])->name('tenagakerja.delete');
        Route::get('/tenagakerja/{id}/edit', [TenagaKerjaBackendController::class, 'edit'])->name('tenagakerja.edit');
        Route::put('/tenagakerja/update/{id}', [TenagaKerjaBackendController::class, 'update'])->name('tenagakerja.update');

        //servis
        Route::post('/services/toggle-status/{id}', [ServicesBackendController::class, 'toggleStatus'])->name('services.toggle-status');
        Route::get('/services', [ServicesBackendController::class, 'index'])->name('services.index');
        Route::get('/services/create', [ServicesBackendController::class, 'create'])->name('services.create');
        Route::post('/services/store', [ServicesBackendController::class, 'store'])->name('services.store');
        Route::delete('/services/delete/{id}', [ServicesBackendController::class, 'destroy'])->name('services.delete');
        Route::get('/services/{id}/edit', [ServicesBackendController::class, 'edit'])->name('services.edit');
        Route::put('/services/update/{id}', [ServicesBackendController::class, 'update'])->name('services.update');

        // route testimonial
        Route::post('/testimonials/{id}/toggle-status', [TestimonialsBackendController::class, 'toggleStatus'])->name('testimonials.toggle-status');
        Route::get('/testimonials', [TestimonialsBackendController::class, 'index'])->name('testimonials.index');
        Route::get('/testimonials/create', [TestimonialsBackendController::class, 'create'])->name('testimonials.create');
        Route::post('/testimonials/store', [TestimonialsBackendController::class, 'store'])->name('testimonials.store');
        Route::delete('/testimonials/delete/{id}', [TestimonialsBackendController::class, 'destroy'])->name('testimonials.delete');
        Route::get('/testimonials/{id}/edit', [TestimonialsBackendController::class, 'edit'])->name('testimonials.edit');
        Route::put('/testimonials/update/{id}', [TestimonialsBackendController::class, 'update'])->name('testimonials.update');

        // route mediasocial
        Route::post('/mediasocial/{id}/toggle-status', [MediaSocialBackendController::class, 'toggleStatus'])->name('mediasocial.toggle-status');
        Route::get('/mediasocial', [MediaSocialBackendController::class, 'index'])->name('mediasocial.index');
        Route::get('/mediasocial/create', [MediaSocialBackendController::class, 'create'])->name('mediasocial.create');
        Route::post('/mediasocial/store', [MediaSocialBackendController::class, 'store'])->name('mediasocial.store');
        Route::delete('/mediasocial/delete/{id}', [MediaSocialBackendController::class, 'destroy'])->name('mediasocial.delete');
        Route::get('/mediasocial/{id}/edit', [MediaSocialBackendController::class, 'edit'])->name('mediasocial.edit');
        Route::put('/mediasocial/update/{id}', [MediaSocialBackendController::class, 'update'])->name('mediasocial.update');

        // route partners
        Route::post('/partners/toggle-status/{id}', [PartnersBackendController::class, 'toggleStatus'])->name('partners.toggle-status');
        Route::get('/partners', [PartnersBackendController::class, 'index'])->name('partners.index');
        Route::get('/partners/create', [PartnersBackendController::class, 'create'])->name('partners.create');
        Route::post('/partners/store', [PartnersBackendController::class, 'store'])->name('partners.store');
        Route::delete('/partners/delete/{id}', [PartnersBackendController::class, 'destroy'])->name('partners.delete');
        Route::get('/partners/{id}/edit', [PartnersBackendController::class, 'edit'])->name('partners.edit');
        Route::put('/partners/update/{id}', [PartnersBackendController::class, 'update'])->name('partners.update');

        // route gallery
        Route::post('/gallery/{id}/toggle-status', [GalleryBackendController::class, 'toggleStatus'])->name('gallery.toggle-status');
        Route::get('/gallery', [GalleryBackendController::class, 'index'])->name('gallery.index');
        Route::get('/gallery/create', [GalleryBackendController::class, 'create'])->name('gallery.create');
        Route::post('/gallery/store', [GalleryBackendController::class, 'store'])->name('gallery.store');
        Route::delete('/gallery/delete/{id}', [GalleryBackendController::class, 'destroy'])->name('gallery.delete');
        Route::get('/gallery/{id}/edit', [GalleryBackendController::class, 'edit'])->name('gallery.edit');
        Route::put('/gallery/update/{id}', [GalleryBackendController::class, 'update'])->name('gallery.update');

        //crud sejarah
        Route::post('/sejarah/{id}/toggle-status', [SejarahBackendController::class, 'toggleStatus'])->name('sejarah.toggle-status');
        Route::get('/sejarah', [SejarahBackendController::class, 'index'])->name('sejarah.index');
        Route::get('/sejarah/create', [SejarahBackendController::class, 'create'])->name('sejarah.create');
        Route::post('/sejarah/store', [SejarahBackendController::class, 'store'])->name('sejarah.store');
        Route::delete('/sejarah/delete/{id}', [SejarahBackendController::class, 'destroy'])->name('sejarah.delete');
        Route::get('/sejarah/{id}/edit', [SejarahBackendController::class, 'edit'])->name('sejarah.edit');
        Route::post('/sejarah/{id}/toggle-status', [SejarahBackendController::class, 'toggleStatus'])->name('sejarah.toggle-status');

        //user
        Route::post('/user/{id}/toggle-status', [UserBackendController::class, 'toggleStatus'])->name('user.toggle-status');
        Route::get('/user', [UserBackendController::class, 'index'])->name('user.index');
        Route::get('/user/create', [UserBackendController::class, 'create'])->name('user.create');
        Route::post('/user/store', [UserBackendController::class, 'store'])->name('user.store');
        Route::delete('/user/delete/{id}', [UserBackendController::class, 'destroy'])->name('user.delete');
        Route::get('/user/{id}/edit', [UserBackendController::class, 'edit'])->name('user.edit');
        Route::put('/user/update/{id}', [UserBackendController::class, 'update'])->name('user.update');



        //message
        Route::get('appointments', [AppointmentBackendController::class, 'index'])->name('appointment.index');
        Route::get('appointments/{id}', [AppointmentBackendController::class, 'show'])->name('appointment.show');
        Route::delete('/appointment/delete/{id}', [AppointmentBackendController::class, 'destroy'])->name('appointment.delete');
    });
