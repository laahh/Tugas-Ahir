<?php

use App\Models\bids;
use App\Models\User;
use App\Models\artikel;
use App\Models\Transaction;
use App\Models\BarangLelang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\lelangController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangLelangController;
use App\Http\Controllers\VerifikasiDataController;
use App\Http\Controllers\ManajemenLelangController;
use App\Http\Controllers\riwayatController;

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

// Laningpage
Route::get('/', function () {
    return view('landingpage.index');
});

Route::get('/about', function () {
    // title
    $title = "Tentang Webista Kami";
    return view('landingpage.about', compact('title'));
});

Route::get('/how-works', function () {
    // title
    $title = "Cara Menggunakan Webista";
    return view('landingpage.howitworks', compact('title'));
});

// Route::get('/dashboard', function () {
//     $userId = Auth::id();  // Mendapatkan ID user yang sedang login
//     $userBids = bids::with('barang')  // Pastikan relasi 'barang' sudah terdefinisi di model Bid
//         ->where('user_id', $userId)
//         ->orderBy('created_at', 'desc')  // Menampilkan bid terbaru terlebih dahulu
//         ->get();

//     return view('landingpage.dashboard', compact('userBids'));
// })->middleware('auth');


// Route::get('/dashboard', function () {
//     //title
//     $title = "Dashboard";
//     // Mendapatkan user yang sedang login
//     $userId = Auth::id();

//     // Mengambil semua barang yang pernah dibid oleh user ini
//     $userBids = BarangLelang::with(['bids' => function ($query) use ($userId) {
//         $query->where('user_id', $userId)
//             ->select('barang_id', DB::raw('MAX(nominal_bid) as max_bid'), 'status')
//             ->groupBy('barang_id');
//     }])
//         ->whereHas('bids', function ($query) use ($userId) {
//             $query->where('user_id', $userId);
//         })
//         ->get();

//     return view('landingpage.dashboard', compact('userBids', 'title'));
// })->middleware(['auth']);


Route::get('/dashboard', function () {
    $title = "Dashboard";
    $userId = Auth::id();

    $userBids = BarangLelang::with(['bids' => function ($query) use ($userId) {
        $query->where('user_id', $userId)
            ->orderBy('nominal_bid', 'desc');
    }])->whereHas('bids', function ($query) use ($userId) {
        $query->where('user_id', $userId);
    })->get();


    // Setting the highestBid property for each item
    $userBids->map(function ($item) {
        $item->highestBid = $item->bids->first(); // This ensures every item has a highestBid property
        return $item;
    });

    $userTransactions = Transaction::where('user_id', $userId)
        ->with('barangLelang') // Pastikan Anda memiliki relasi 'barangLelang' di model Transaction
        ->latest()
        ->take(1) // Mengambil satu transaksi terakhir, ganti dengan get() jika ingin lebih banyak
        ->get();

    return view('landingpage.dashboard', compact('userBids', 'title', 'userTransactions'));
})->middleware(['auth', 'verified']);



Route::get('/email/verify', function () {
    return view('landingpage.verifikasiEmail');
})->middleware('auth')->name('verification.notice');




Route::get('/faq', function () {
    //title
    $title = "FAQ";
    return view('landingpage.faq', compact('title'));
});

Route::get('/blog-detail/{id}', function ($id) {
    //title
    $title = "Blog Detail";
    $blogs = artikel::find($id);
    return view('landingpage.blog-detail', compact('blogs', 'title'));
});

// Route::get('/lelang', lelangController::class);
Route::get('/blog', function () {
    //title
    $title = "Blog";
    $blogs = artikel::paginate(6);
    return view('landingpage.blog', compact('blogs', 'title'));
});


route::get('/barang-detail', function () {
    //title
    $title = "Detail Barang";
    return view('landingpage.product-detail', compact('title'));
});


route::get('/dashboard-admin', function () {
    $title = "Detail Barang";

    // Menghitung jumlah user
    $jumlahUser = User::count();

    // Menghitung jumlah barang
    $jumlahBarang = Transaction::count();

    // Menghitung jumlah saldo dari transaksi yang telah dilakukan
    $jumlahSaldo = Transaction::where('status', 'pending')->sum('amount');

    return view('admin.pages.dashboard.index', compact('title', 'jumlahUser', 'jumlahBarang', 'jumlahSaldo'));
});



// Route::get('/email/verify', function () {
// })->middleware('auth')->name('verification.notice');


// manajemen lelang
Route::get('/lelang', [lelangController::class, 'index'])->name('lelang');

Route::get('/lelang/perhiasan', [lelangController::class, 'showPerhiasan'])->name('lelang.perhiasan');
Route::get('/lelang/elektronik', [lelangController::class, 'showElektronik'])->name('lelang.elektronik');
Route::get('/lelang/peralatan', [lelangController::class, 'showPeralatan'])->name('lelang.peralatan');
Route::get('/lelang/kendaraan', [lelangController::class, 'showKendaraan'])->name('lelang.kendaraan');
Route::get('/lelang/aksesoris', [lelangController::class, 'showAksesoris'])->name('lelang.aksesoris');
Route::get('/lelang/lainlain', [lelangController::class, 'showLainlain'])->name('lelang.lainlain');
Route::post('/lelang/{id}', [lelangController::class, 'postBid'])->name('lelang.bid');
Route::get('/lelang/{id}', [LelangController::class, 'show'])
    ->middleware('admin.verified')
    ->name('lelang.show');

// dadhboard admin
Route::resource('/artikel', artikelController::class);
Route::get('/dashboard/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/dashboard/update', [ProfileController::class, 'update'])->name('profile.update');

// banned dan unbanned
Route::get('manajemen-pengguna', [ProfileController::class, 'showUsers'])->name('manajemen-pengguna');
Route::post('/admin/users/toggle-ban', [ProfileController::class, 'toggleBan'])->name('admin.toggleBan');

// manajemen barang CRUD
Route::get('/barang-lelang', [BarangLelangController::class, 'index'])->name('barang-lelang');
Route::get('/barang-lelang/create', [BarangLelangController::class, 'create'])->name('barang-lelang.create');
Route::post('/barang-lelang', [BarangLelangController::class, 'store'])->name('barang-lelang.store');
Route::put('/barang-lelang/{id}', [BarangLelangController::class, 'update'])->name('barang-lelang.update');  // Gunakan PUT atau PATCH
Route::get('/barang-lelang/{id}', [BarangLelangController::class, 'show'])->name('barang-lelang.show');
Route::get('/barang-lelang/{id}/edit', [BarangLelangController::class, 'edit'])->name('barang-lelang.edit');
Route::delete('/barang-lelang/{id}', [BarangLelangController::class, 'destroy'])->name('barang-lelang.destroy');

// Auth
Route::get('/auth/redirect', [LoginController::class, 'redirectToProvider']);
Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback']);
Route::get('/logout', [LoginController::class, 'logout']);

//verifikasi data nasabah
Route::get('/verification', [VerifikasiDataController::class, 'index'])->name('admin.verification.index');
Route::post('/verification/{user_id}', [VerifikasiDataController::class, 'verify'])->name('admin.verification.verify');
Route::post('/verify-user/{id}', [VerifikasiDataController::class, 'verifyUser'])->name('users.verify');
Route::get('/verification/{id}', [VerifikasiDataController::class, 'ShowUser'])->name('users.show');


route::resource('/manajemen-lelang', ManajemenLelangController::class);
Route::get('exports/bids/{barang_id}', [ManajemenLelangController::class, 'downloadBids'])->name('exports.bids');
Route::post('/lelang/send-email/{id}', [ManajemenLelangController::class, 'sendWinningEmail'])->name('lelang.sendEmail');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/pay/{barangId}', [PaymentController::class, 'createPayment'])->name('pay')->middleware('auth');
Route::post('/callbackpayment', [PaymentController::class, 'handleNotification'])->name('callbackpayment');

route::get('/testing', function () {
    return view('welcome');
});


// login admin

// Route untuk menampilkan form login
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');

// Route untuk memproses data login
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');
// Route::middleware('auth')->group(function () {
//     Route::get('admin/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
// });

Route::get('invoice/download/{transactionId}', [PaymentController::class, 'downloadInvoice'])->name('invoice.download');

Route::resource('/riwayat-transaksi', riwayatController::class);