<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImpressumController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\AnfahrtsplanController;
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

//CONTACT
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'create'])->name('contact.create');
Route::get('contactShow', [ContactController::class, 'show'])->name('contact.show');
Route::get('/contactMessage/{id}', [ContactController::class, 'find'])->name('contact.find');
Route::get('/delete/{id}', [ContactController::class, 'destroy'])->name('contact.find');

//LOGIN AND REGISTRATION
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('index', [CustomAuthController::class, 'signOut'])->name('signout');

//NEWSLETTER
Route::get('newsletter', [NewsletterController:: class, 'index'])->name('newsletter');
Route::get('/newsletter/create', [NewsletterController:: class, 'create'])->name('newsletter.create');
Route::post('/newsletter', [NewsletterController:: class, 'store'])->name('newsletter.store');
Route::get('/newsletter/{newsletter}/edit', [NewsletterController:: class,'edit'])->name('newsletter_edit');
Route::delete('/newsletter/{newsletter}', [NewsletterController:: class, 'destroy'])->name('newsletter.destroy');
Route::post('/subscriber', [SubscriberController:: class, 'store'])->name('subscriber.store');
Route::put('newsletter/{id}', [NewsletterController::class, 'update'])->name('newsletter.update');

//DOWNLOADS
Route::get('/downloads', 'FileController@index')->name('download');
Route::get('/downloads/{id}', 'FileController@download')->name('download.file');
Route::post('/downloads', 'FileController@upload')->name('upload');



//VIDEO
Route::get('/video', function () {
    return view('video');
});

//PROJEKTMANAGEMENT
Route::get('/projektmanagement', function () {
    return view('projektmanagement');
});

//ANFAHRTSPLAN
Route::get('/anfahrtsplan', [AnfahrtsplanController::class, 'show'])->name('anfahrtsplan');
Route::get('/anfahrtsplan_edit', [AnfahrtsplanController::class, 'edit'])->name('anfahrtsplan_edit');
Route::put('/anfahrtsplan', [AnfahrtsplanController::class, 'update'])->name('anfahrtsplan_update');


//IMPRESSUM
Route::get('/impressum', [ImpressumController::class, 'show'])->name('impressum');
Route::get('/impressum_edit', [ImpressumController::class, 'edit'])->name('impressum_edit');
Route::put('/impressum', [ImpressumController::class, 'update'])->name('impressum.update');

//ALTERNATE STARTPAGE
Route::get('/alternate', function () {
    return view('index_alternate');
});
Route::post('/alternate', function () {
    $texts = $_POST['texts'];
    for($i = 0; $i < count($texts); $i++){
        $j = $i+1;
        $myfile = fopen('./index_alternate_texts/index_alt_text_'.$j.'.txt', 'w');
        fwrite($myfile, strip_tags($texts[$i], array('i','b', 'br')));
        fclose($myfile);
    }
    return view('index_alternate');
});