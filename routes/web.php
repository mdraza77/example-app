<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DemoController;
// use App\Http\Controllers\SingleActionController;
// use Illuminate\Container\Attributes\Singleton;
// use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Illuminate\Http\Request;


// Route::get('/{name?}', function ($name= null) {
//     $demo = "<h2>Md Raza</h2>";
//     $data = compact('name', 'demo');
//     return view('home')->with($data);
// });
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('courses');
});

// Route::get('/', [DemoController::class, 'index']);
// Route::get('/about', [DemoController::class, 'about']);
// // Route::get('/courses', [DemoController::class, 'courses']);
// Route::get('/courses', SingleActionController::class);
// Route::resource('photo', PhotoController::class);
Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);

Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');

Route::get('/customer', [CustomerController::class, 'view'])->name('customer.view');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store'); // ✅ Add this


// Route::get('/customer', function () {
//     $customers = Customer::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/get-all-session', function () {
    $session = session()->all();
    p($session);
});

//session part
Route::get('set-session', function (Request $request) {
    $request->session()->put('name', "Md Raza");
    $request->session()->put('user_id', "1");
    $request->session()->flash('status', "success");
    return redirect('get-all-session');
});

Route::get('destroy-session', function () {
    session()->forget('name', 'user_id');
    // session()->forget('user_id');
    return redirect('get-all-session');
});
