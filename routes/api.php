<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// logovanje
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

//vracanje korisnika
Route::get('/products',function(){
    return Product::all();
});

Route::get('/users',function(){
    return User::all();
});

//update , delete
Route::put('/products/{product}',function(Product $product){
    
    request()->validate([

        'title' => 'required'

    ]);
    
    $success = $product->update([
      
        'title' => request('title'),

    ]);

    return[ 
        'success' => $success
    ];
});

Route::put('/users/{user}',function(User $user){
    
    request()->validate([

        'email' => 'required'

    ]);
    
    $success = $product->update([
      
        'email' => request('email'),

    ]);

    return[ 
        'success' => $success
    ];
});


Route::delete('/products/{product}',function(Product $product){
    
    $success = $product->delete();

    return[ 
        'success' => $success
    ];
});



Route::delete('/users/{user}',function(User $user){
    
    $success = $user->delete();

    return[ 
        'success' => $success
    ];
});




//Route::group(['middleware' => ['auth:email']], function () {
  //  Route::get('/profile', function(Request $request) {
    //    return auth()->user();
    //});
  //  Route::resource('posts', PostController::class)->only(['update','store','destroy']);
    // API route for logout user
    //Route::post('/logout', [AuthController::class, 'logout']);
//});


