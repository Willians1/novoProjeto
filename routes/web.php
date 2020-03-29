<?php

use Illuminate\Support\Facades\Route;

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
    $helloWorld = 'Hello World';

    return view('welcome', compact('helloWorld'));
});

Route::get('/model',function(){

//$products = \App\Product::all(); //select * from products

// $user = new \App\User();
   // $user->name = 'Usuario Teste';
   // $user->email = 'mail@teste.com';
   //  $user->password = bcrypt('12345678');

   // $user->save();

    // return $user->save();

// \App\User::all() - retorna todos os usuarios
    
 //   return \App\User::find(3) ; //Collection

// return \App\User::where('name', 'Prof. Dorris Weissnat')->first(); // select * from users where name = 'Prof. Dorris Weissnat'
//return \App\User::paginate(10); - paginar dados com laravel

// Mass Assignment  Atribuição em Massa

 //    $user = \App\User::create([
   //      'name' => 'Willians Farias',
   //      'email' => 'emaildff@email.com',
  //       'password' => bcrypt('123456677')
  //   ]);

    //Mass Update
 //   $user = \App\User::find(41);
 //   $user->update([
 //       'name' => 'Atualizando com Mass Update'
 //   ]); //true or false

    //Como eu faria para pegar a loja de um usuário
    //$user = \App\User::find(4);

    //dd($user->store()->count()); //0 objeto unico (Store) se for collection de dados (Objetos)
    
    //Pegar os produtos de uma loja?
    //$loja = \App\Store::find(1);
    //return $loja->products; | $loja->products()->where('id', 1)->get();

    //Pegar as lojas de uma categoria de uma loja?
    // $categoria = \App\Category::find(1);
    // $categoria->products;

    //Criar uma loja para um usuario

    // $user = \App\User::find(10);
    // $store = $user->store()->create([
    //    'name' => 'Loja Teste',
     //   'description' => 'Loja Teste de produtos de informatica',
     //   'mobile_phone' => 'xx-xxxxx-xxxx',
     //   'phone' => 'xx-xxxxx-xxxx',
      //  'slug' => 'loja-teste'

   // ]);

   // Criar um produto para uma loja
   //$store = \App\Store::find(41);
   //$product = $store->products()->create([
     // 'name' => 'Notebook Dell',
     // 'description' => 'CORE I5 10GB',
     // 'body' => 'Qualquer coisa...',
     // 'price' => 2999.90,
     // 'slug' => 'notebook-dell',
  // ]);

  // dd($product);


    //Criar uma categoria
    // \App\Category::create([
    //    'name' => 'Games',
    //    'slug' => 'games'
    // ]);
    // \App\Category::create([
    //    'name' => 'Notebooks',
    //    'slug' => 'notebooks'
    // ]);

    // return \App\Category::all();

    //Adicionar um produto para uma categoria ou vice-versa

    //$product = \App\Product::find(41);

    //dd($product->categories()->sync([2]));

    $product = \App\Product::find(41);

    return $product->categories;

    return \App\User::all();

    

});

Route::prefix('admin')->namespace('Admin')->group(function(){

   Route::prefix('stores')->group(function(){

      Route::get('/', 'StoreController@index');
      Route::get('/create', 'StoreController@create');
      Route::post('/store', 'StoreController@store');
      Route::get('/{store}/edit', 'StoreController@edit');
      Route::post('/update/{store}', 'StoreController@update');
      Route::get('/destroy/{store}', 'StoreController@destroy');

   });
});

//Route::get
//Route::post
//Route::put
//Route::patch
//Route::delete
//Route::options