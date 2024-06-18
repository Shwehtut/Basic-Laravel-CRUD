 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/',[ItemController::class,'index']);
Route::get('/create',[ItemController::class,'create']);
Route::post('/create',[ItemController::class,'store'])->name('item.store');

Route::get('/edit/{id}',[ItemController::class,'edit'])->name('item.edit');
Route::put('/edit/{id}',[ItemController::class,'update'])->name('item.update');

Route::get('/delete/{id}',[ItemController::class,'delete'])->name('item.delete');




