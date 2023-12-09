<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

function getUser()
{
    return $users=[
        1=>['name'=>'AB','city'=>'ctg'],
        2=>['name'=>'CD','city'=>'dhk'],
        3=>['name'=>'EF','city'=>'ctg'],
        4=>['name'=>'GH','city'=>'dhk'],

    ];
}


Route::get('/', function () {

    // $msgs=["ab","cd","df"];

    $users=getuser();
    return view('welcome',['msg'=>$users]);
    // return view('welcome')->with('msg',$msgs);
})->name('welcome');


Route::get('/home', function () {
    return view('skt');
})->name('skt');

Route::get('/responsive', function () {
    return view('responcol');
})->name('responsive');

// Route::get('/hi', function () {
//     return view('hi');
// });

Route::get('/web', function () {
    printf("Hello World");
});

Route::get('/prac', function () {
    return view('practice');
})->name('practice');


Route::get('business/{a}/{b}/{c}', function ($n,$m,$p) {
    echo 'Hello World';
    echo '<br>';
    echo 'The result is ='.$n;
    echo '<br>';
    echo 'The result is ='.$m;
    echo '<br>';
    echo 'The result is ='.$p;

    $name="Abdulla Al Shakaet";
    $email="abdshakaet@gmail.com";
    $phonenumber="01920293858";
    $maritalS="unmarried";

    //return view('business',['a'=>$n ,'sec'=>$m ,'third'=>$p,'myname'=>$name,'myemail'=>$email]);

    return view('business',compact('n','m','p','name','email','phonenumber','maritalS'));
    
});

Route::get('/sports/{x}/{y}/{z}', function ($x,$y,$z) {
   
    return view('sports',['f'=>$x,'s'=>$y,'t'=>$z]);


})->name('sports');


Route::get('/about/{id?}/post/{pid?}/{y}', function ( $id=null ,$pid=null,$y=null) {
    
    if($id && $pid && $y)
    {
        return "<h1>User:".$id."</h1><h1>post:".$pid."</h1><h1>my mm result:".$y."</h1>";
    }
    else{

        return "<h1>Invalid id/post</h1>";
    }
    

    
    
   // return "<h1>User: " .$id."</h1>";

})->whereNumber('id')->whereAlpha('pid')->whereNumber('y'); //->WhereIn('id',["abc","def"]);                                           //->whereAlphaNumeric('id'); 
  


Route::get('/fruits/{id?}/{name?}/sweet', function ($id=null, $name=null) {
    
    if($id && $name)
    {
        return "<h1>Fruits ID=" .$id."</h1> fruits name=".$name."</h1>";
    }
    else{

        return "<h1>Invalid id/post</h1>";
    }
    
 }) ->WhereNumber('id')->WhereAlpha('name');



Route::get('/featurea', function () {
    return view('featurea');
})->name('featurea');

Route::fallback(function(){

    return "<h1>Page didnt Found</h1>";
});

Route::get('/practicee', function () {
    return view('practicefile');
})->name('practice');


Route::get('/content', function () {
    return view('contents');
})->name('content');

Route::get('/example', function () {
    return view('example');
})->name('example');

Route::get('/design', function () {
    return view('design');
})->name('design');

// Route::get('/getview', function () {
//     return view('design');
// })->name('design');


// Route::get('/getview',[StudentController::class,'getview']);
Route::get('/',[studentController::class,'getView']);





    

  
    

    
    
   // return "<h1>User: " .$id."</h1>";

 //->WhereIn('id',["abc","def"]);         //->whereAlphaNumeric('id'); 


