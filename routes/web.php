<?php
 
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\LocationController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();
   
//Normal Users Routes List
Route::middleware(['auth', 'user-access:client'])->group(function () {
   
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/listeVehicule',[HomeController::class,'listeVehicule'])->name('admin.listeVehicule');
Route::get('/listeClient',[HomeController::class,'listeClient'])->name('admin.listeClient');

   
Route::get('/vehiculees',[HomeController::class,'indexx'])->name('client.vehicules');
Route::get('/locations',[HomeController::class,'indexxx'])->name('client.locations');
Route::get('/paiements',[HomeController::class,'indeexx'])->name('client.paiements');
Route::get('/detailsvehicules',[HomeController::class,'indeexxx'])->name('client.detailsvehicules');


Route::get('/vehicules', [VehiculeController::class,'index'])->name('vehicules.index');

Route::put('/vehicules/{vehicule}', [HomeController::class, 'louer'])->name('vehicules.louer');
Route::put('/vehicules/{vehicule}/annuler', [HomeController::class, 'annuler'])->name('vehicules.annuler');

Route::post('/locations', [LocationController::class, 'louer'])->name('locations.store');
