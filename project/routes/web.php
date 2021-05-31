<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\AnasayfaController@index')->name('anasayfa');

Route::get('/kategori/{slug_kategoriadi}', 'App\Http\Controllers\KategoriController@index')->name('kategori');
Route::get('/urun/{slug_urunadi}','App\Http\Controllers\UrunController@index')->name('urun');
Route::post('/ara','App\Http\Controllers\UrunController@ara')->name('urun_ara');
Route::get('/ara','App\Http\Controllers\UrunController@ara')->name('urun_ara');


Route::get('/sepet','App\Http\Controllers\SepetController@index')->name('sepet');
Route::get('/odeme','App\Http\Controllers\OdemeController@index')->name('odeme');
Route::get('/siparisler','App\Http\Controllers\SiparisController@index')->name('siparisler');
Route::get('/siparisler/{id}','App\Http\Controllers\SiparisController@detay')->name('siparis');

Route::group(['prefix'=>'kullanici'],function(){
Route::get('/oturumac','App\Http\Controllers\KullaniciController@giris_form')->name('kullanici.oturumac');
Route::post('/oturumac','App\Http\Controllers\KullaniciController@giris');
Route::get('/kaydol','App\Http\Controllers\KullaniciController@kaydol_form')->name('kullanici.kaydol');
Route::post('/kaydol','App\Http\Controllers\KullaniciController@kaydol');
Route::get('/aktiflestir/{anahtar}','App\Http\Controllers\KullaniciController@aktiflestir')->name('aktiflestir');
Route::post('/oturumukapat','App\Http\Controllers\KullaniciController@oturumukapat')->name('kullanici.oturumukapat');


});

Route::get('/test/mail',function () {
    $kullanici= \App\Models\Kullanici::find(1);
   return new App\Mail\KullaniciKayitMail($kullanici);
});
