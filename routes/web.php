<?php

use App\Models\User;
use App\Models\artikel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangLelangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingpage.index');
});

Route::get('/about', function () {
    return view('landingpage.about');
});

Route::get('/how-works', function () {
    return view('landingpage.howitworks');
});


Route::get('/dashboard', function () {
    return view('landingpage.dashboard');
})->middleware('auth');


Route::get('/faq', function () {
    return view('landingpage.faq');
});

Route::get('/blog-detail/{id}', function ($id) {
    $blogs = artikel::find($id);
    return view('landingpage.blog-detail', compact('blogs'));
});



Route::get('/product', function () {
    return view('landingpage.product');
});


Route::get('/blog', function () {
    $blogs = artikel::paginate(6);
    return view('landingpage.blog', compact('blogs'));
});

Route::get('/product', function () {
    return view('landingpage.product');
});





// Route::get('/data-barang', function () {
//     return view('admin.pages.barang.index');
// });

// dadhboard admin
Route::resource('/artikel', artikelController::class);


Route::get('/dashboard/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/dashboard/update', [ProfileController::class, 'update'])->name('profile.update');

// banned dan unbanned
Route::get('manajemen-pengguna', [ProfileController::class, 'showUsers'])->name('manajemen-pengguna');
Route::post('/admin/users/toggle-ban', [ProfileController::class, 'toggleBan'])->name('admin.toggleBan');


//barang lelang 
route::resource('/barang-lelang', BarangLelangController::class);


route::get('/barang-detail', function () {
    return view('landingpage.product-detail');
});
