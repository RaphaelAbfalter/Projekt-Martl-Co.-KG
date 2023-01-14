<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\NewsletterController;
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
    return view('index');
});

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact-send', [ContactController::class, 'create'])->name('contact.send');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('newsletter', [NewsletterController:: class, 'index'])->name('newsletter');
Route::get('/newsletter/create', [NewsletterController:: class, 'create'])->name('newsletter.create');
Route::post('/newsletter', [NewsletterController:: class, 'store'])->name('newsletter.store');
Route::get('/newsletter/{newsletter}/edit', [NewsletterController:: class,'edit'])->name('newsletter.edit');
Route::patch('/newsletter/{newsletter}', [NewsletterController:: class, 'update'])->name('newsletter.update');
Route::delete('/newsletter/{newsletter}', [NewsletterController:: class, 'destroy'])->name('newsletter.destroy');
Route::get('/downloads', [FileController::class, 'index'])->name('download');
Route::get('/downloads/{file}', [FileController::class, 'download'])->name('download.file');
Route::post('/download/upload', [FileController::class, 'upload'])->name('upload');
Route::get('/videos', function () {
    return view('videos');
});
