<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('products', [
    ProductsController::class,
    'getlistem'
]);

Route::resource('customer',CustomerController::class);

Route::resource('category',CategoryController::class);

Route::get('/', function () {
    // $user = DB::select('select * from users ');

    // $user1 = DB::insert('insert into users values(?,?,?)', ['name','email','pass']);

    // $user2 = DB::update("update users set email='new email' where users.id=?", ['3']);

    // $user4 = DB::delete("delete from users where users.id=?", ['1']);




    //$user = DB::table('users')->where('id',1)->get();

    // $user1 = DB::table('users')->insert(
    //     ['name'=>'Nguyen Van A',
    //     'email'=>'nguyenvana@gmail.com',
    //     'password'=>'11111111'
    //     ]
    // );

    // $user1 = DB::table('users')->where('id', 2)->update(['name'=> 'Nguyen Van update ']);
    //find
    //   $user1 = DB::table('users')->where('id', 2)->value('email');

    // $user1 = User::create(['name'=>'Nguyen Thi b',
    //                         'email'=>'nguyethib@gmail.com',
    //                          'password'=>'111111111']);

    // $user = DB::table('users')->get();
    $user = User::get();
    dd($user);
   // return view('welcome');
   
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';