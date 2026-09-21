<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TentangSarprasController;
use App\Http\Controllers\ProgramKegiatanController;
use App\Models\ProfilSarpras;
use App\Models\FungsiUtama;
use App\Models\ProgramKegiatan;

/*
|--------------------------------------------------------------------------
| Halaman Publik
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $profil      = ProfilSarpras::first();
    $fungsiUtama = FungsiUtama::orderBy('urutan')->get();

    $totalProgram = ProgramKegiatan::count();
    $rataProgres  = $totalProgram > 0 ? round(ProgramKegiatan::avg('progres')) : 0;

    $programByBidang = ProgramKegiatan::selectRaw('bidang, COUNT(*) as total, ROUND(AVG(progres)) as rata_progres')
        ->groupBy('bidang')
        ->orderByDesc('total')
        ->get();

    $programTerbaru = ProgramKegiatan::orderByDesc('updated_at')->take(6)->get();

    return view('welcome', compact(
        'profil', 'fungsiUtama', 'totalProgram', 'rataProgres', 'programByBidang', 'programTerbaru'
    ));
})->name('home');


/*
|--------------------------------------------------------------------------
| Autentikasi
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Halaman yang Wajib Login
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');


    /*
    |----------------------------------------------------------------
    | Tentang Sarpras (tampil + kelola/CRUD)
    |----------------------------------------------------------------
    */

    Route::get('/tentang-sarpras', [TentangSarprasController::class, 'index'])
        ->name('tentang-sarpras');

    Route::get('/tentang-sarpras/kelola', [TentangSarprasController::class, 'kelola'])
        ->name('tentang-sarpras.kelola');

    Route::post('/tentang-sarpras/profil', [TentangSarprasController::class, 'updateProfil'])
        ->name('tentang-sarpras.profil.update');

    Route::post('/tentang-sarpras/fungsi', [TentangSarprasController::class, 'storeFungsi'])
        ->name('tentang-sarpras.fungsi.store');
    Route::put('/tentang-sarpras/fungsi/{fungsi}', [TentangSarprasController::class, 'updateFungsi'])
        ->name('tentang-sarpras.fungsi.update');
    Route::delete('/tentang-sarpras/fungsi/{fungsi}', [TentangSarprasController::class, 'destroyFungsi'])
        ->name('tentang-sarpras.fungsi.destroy');

    Route::post('/tentang-sarpras/ruang-lingkup', [TentangSarprasController::class, 'storeRuang'])
        ->name('tentang-sarpras.ruang.store');
    Route::put('/tentang-sarpras/ruang-lingkup/{ruang}', [TentangSarprasController::class, 'updateRuang'])
        ->name('tentang-sarpras.ruang.update');
    Route::delete('/tentang-sarpras/ruang-lingkup/{ruang}', [TentangSarprasController::class, 'destroyRuang'])
        ->name('tentang-sarpras.ruang.destroy');


    /*
    |----------------------------------------------------------------
    | Program & Kegiatan (CRUD)
    |----------------------------------------------------------------
    */

    Route::get('/program-kegiatan', [ProgramKegiatanController::class, 'index'])
        ->name('program-kegiatan');
    Route::post('/program-kegiatan', [ProgramKegiatanController::class, 'store'])
        ->name('program-kegiatan.store');
    Route::put('/program-kegiatan/{program}', [ProgramKegiatanController::class, 'update'])
        ->name('program-kegiatan.update');
    Route::delete('/program-kegiatan/{program}', [ProgramKegiatanController::class, 'destroy'])
        ->name('program-kegiatan.destroy');


    Route::get('/peta-wilayah', function () {
        return view('peta-wilayah');
    })->name('peta.wilayah');

});