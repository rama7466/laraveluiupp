<?php

use Illuminate\Support\Facades\Route;
use App\Mail\PaymentEmail;
use App\Models\Payment;
use App\Http\Controllers\CruppController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KtprosedurController;
use App\Http\Controllers\KodeproController;
use App\Http\Controllers\UppprocsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProsedurController;
use App\Http\Controllers\UpparvController;
use App\Http\Controllers\UppchckController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UppclsdController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\UppaprlController;
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
Route::get('formprocs', function () {
    return view('formprocs.create');
});
Auth::routes();

route::get('redirects', 'App\Http\Controllers\HomeController@index');
Route::resource('creatupp', CruppController::class);
Route::resource('departemen', KategoriController::class);
Route::resource('ktprosedur', KtprosedurController::class);
Route::resource('kodepro', KodeproController::class);
Route::resource('uppprocs', UppprocsController::class);
Route::resource('home', HomeController::class);
Route::resource('prosedur', ProsedurController::class);
Route::resource('uppaprv', UpparvController::class);
Route::resource('uppchck', UppchckController::class);
Route::resource('uploadfile', UploadController::class);
Route::resource('uppclsd', UppclsdController::class);
Route::resource('house', HouseController::class);
Route::resource('uploadfile', BerkasController::class);
Route::resource('uppaprl', UppaprlController::class);
Route::post('/', function () {

    $payment = new Payment();
    $payment->name          = request()->name;
    $payment->email         = request()->email;
    $payment->bank          = request()->bank;
    $payment->bank_account  = request()->bank_account;
    $payment->amount        = request()->amount;
    $payment->transfer_date = request()->transfer_date;

    $path = request()->file('photo')->store('payments');
    $payment->photo = $path;

    $payment->save();

    \Mail::to('bionicbii@gmail.com') ->cc('ramaramdhani@smkwikrama.sch.id')->send(new PaymentEmail($payment));


    return back();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
