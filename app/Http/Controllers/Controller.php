use App\Http\Controllers\BeasiswaController;

Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa.index');
Route::get('/beasiswa/create', [BeasiswaController::class, 'create'])->name('beasiswa.create');
Route::post('/beasiswa', [BeasiswaController::class, 'store'])->name('beasiswa.store');
