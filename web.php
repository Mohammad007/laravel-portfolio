// routes/web.php (add these routes)
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile/avatar', [App\Http\Controllers\ProfileController::class, 'uploadAvatar'])->name('profile.avatar');
});