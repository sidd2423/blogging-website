<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () { 
// /*    $posts = Post::all();
//     // ddd($posts);
//     return view('posts',[
//         'post'=> $posts 
//     ]);*/    
//     return view('posts',['posts'=>Post::all()]);
//    }); 

     Route::get('/register',[UserController::class,'loadRegister']);
     Route::post('/register',[UserController::class,'userRegister'])->name('userRegister');

   Route::get('/login',function(){
   return redirect('/');
   });

   Route::get('/',[UserController::class,'loadLogin']);
   
   Route::post('/login',[UserController::class,'userLogin'])->name('userLogin');

 
   
   Route::get('/login',[UserController::class,'logout'])->name('logout');
  
   
   // Route::get('/home',[UserController::class,'home']);
   // Route::post('/home',[Post::class,'userRegister'])->name('userRegister');

   Route::get('/homepage',function(){
      $posts = Post::all();
       // ddd($posts);
      return view('posts',['posts'=>Post::all()]);
   });
   

Route::get('posts/{post}', function ($slug) { 
   $post = Post::find($slug);
     return view('post',[
  'post'=> $post  ]);
     }); 
 
 
   