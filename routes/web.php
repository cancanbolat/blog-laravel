<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Site\HomeController;


/* Admin */
Route::get('panel/', [PanelController::class, 'index'])->name('homepage');
Route::resource('posts', PostController::class);
Route::resource('category', CategoryController::class);

/* Site */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{slug}', [HomeController::class, 'detail'])->name('detail');
Route::get('/category/{slug}', [HomeController::class, 'category'])->name('categorydetail');







/* 
<?php

use Illuminate\Support\Facades\Route;

#admin panel controllers
use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\Panel\ProductController;

// ADMİN PANEL GİRİŞ-ÇIKIŞ-KONTROL İŞLEMLERİ
Route::prefix('admin')->name('panel.')->middleware('adminLoginControl')->group(function () {
    Route::get('giris', [LoginController::class, 'login'])->name('login');
    Route::post('giris', [LoginController::class, 'loginPost'])->name('login.post');
});

// ADMİN PANEL İŞLEMLERİ
Route::prefix('admin')->name('panel.')->middleware('adminHomeControl')->group(function () {

    #anasayfa +

    #ürünler +
    Route::resource('urun', ProductController::class);

    #yorumlar +
    Route::resource('yorumlar', CommentController::class);

    # profil ayarları +
    Route::resource('profil', ProfileController::class);

    //GENEL AYARLAR +
    #site ayarları (+) 
    Route::get('ayarlar/site', [SettingsController::class, 'siteSettings'])->name('settings.site');
    Route::post('siteayar', [SettingsController::class, 'updateSite'])->name('upload.site');
    #hakkımızda ayarları (+) 
    Route::get('ayarlar/hakkimizda', [SettingsController::class, 'aboutSettings'])->name('settings.about');
    Route::post('aboutayar', [SettingsController::class, 'updateAbout'])->name('upload.about');
    #iletişim/adres ayarları (+) 
    Route::resource('ayarlar/iletisim', ContactController::class);

    #mesajlar + 
    Route::get('mesajlar', [MessagesController::class, 'index'])->name('messages');
    Route::post('mesajlar/{id}', [MessagesController::class, 'deletemessage'])->name('messages.delete');

    #kategoriler (+)
    Route::resource('kategoriler', CategoryController::class);

    # hizmetler +
    Route::resource('hizmetler', GardenController::class);

    #sosyal medya hesapları (+)
    Route::resource('sosyal-medya', SocialController::class);

    #fotoğraf +
    Route::resource('galeri/fotograf', PhotoController::class);
    #video +
    Route::resource('galeri/video', VideoController::class);
    Route::post('coklusil', [VideoController::class, 'coklusil'])->name('video.delete');
    #slider +
    Route::resource('galeri/sliderlar', SliderController::class);

    #çıkış işlemi
    Route::get('cikis', [LoginController::class, 'logout'])->name('logout');
});


#site anasayfa
Route::get('/', [SiteController::class, 'index'])->name('homepage');
#tüm ürünler
Route::get('/urunler', [SiteController::class, 'products'])->name('products');
#kategori detay
Route::get('/kategori/{slug}', [SiteController::class, 'categoryDetail'])->name('category.detail');
#hizmetler
Route::get('/hizmetler', [SiteController::class, 'services'])->name('services');
#galeri
Route::get('/galeri', [SiteController::class, 'gallery'])->name('gallery');
#iletişim sayfası
Route::get('/iletisim', [SiteController::class, 'contactView'])->name('contact');
#mail gönderme (şimdilik db'ye kayıt)
Route::post('/iletisim', [SiteController::class, 'contact'])->name('contact.post');
#hakkimizda
Route::get('/hakkimizda', [SiteController::class, 'aboutView'])->name('about');
#ürün detay
Route::get('/urun/{slug}', [SiteController::class, 'productDetail'])->name('product.detail');
#hizmet detay
Route::get('/hizmetler/{slug}', [SiteController::class, 'servicesDetail'])->name('services.detail');
*/