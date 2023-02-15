<?php

use App\Http\Controllers\PaginasController;
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
    return view('welcome');
});

//Route::get('listado-producto', [ProductoController::class, 'listado']);
//Route::get('formulario-producto', [ProductoController::class, 'formulario']);

Route::get('producto', [ProductoController::class, 'index']);

//Route::get('canciones/{id?}', [PaginasController::class, 'canciones']); 
//Route::get('producto', [PaginasController::class, 'contacto']);
//Route::post('producto', [PaginasController::class, 'postContacto']);



    //$canciones = [];
    //$canciones[] = [
      //  'nombre' => 'Hola', 
        //'artista' => 'Yo'
   // ];
    //$canciones[] = [
      //  'nombre' => 'Adios', 
        //'artista' => 'Alguien'
   // ];

    //Para debuggear
    //dd($canciones);
   // if(!is_null($id)) {
     //   $cancion = $canciones[$id];
   // } else {
     //   $cancion = null;

    //}



   // return view('canciones', compact('canciones', 'cancion'));
    //->with(['canciones' => $canciones]);
//});


//Route::get('canciones/{id}', function ($id) {

  //  $canciones = [];
    //$canciones[] = ['nombre' => 'Hola', 'artista' => 'Yo'];
    //$canciones[] = ['nombre' => 'Adios', 'artista' => 'Alguien'];

    //$cancion = $canciones[$id];

    //return view('detalleCancion', compact('cancion'));
    //->with(['canciones' => $canciones]);
//});