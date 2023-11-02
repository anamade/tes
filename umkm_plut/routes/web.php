<?php
use App\Http\Controllers\CoaController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('dashboard', function(){
    return view('dashboard');
})->name('dashboard');
Route::controller(CoaController::class)->prefix('coa')->group(function(){
  Route::get('','index')->name('coa');
  Route::get('dft_perkiraan','dft_perkiraan')->name('coa.dft_perkiraan');
  Route::get('perkiraan_penghubung','perkiraan_penghubung')->name('coa.perkiraan_penghubung');
  Route::get('tambah_perkiraan','tambah_perkiraan')->name('coa.tambah_perkiraan');
  Route::post('tambah_perkiraan','simpan')->name('coa.tambah_perkiraan.simpan');
  Route::get('setup_grub','setup_grub')->name('coa.setup_grub');
  Route::get('edit/{id_coa}','edit')->name('coa.edit');
  Route::post('edit/{id_coa}','update')->name('coa.edit.update');
  Route::get('hapus/{id_coa}','hapus')->name('coa.hapus');
});
