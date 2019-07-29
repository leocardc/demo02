<?php

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
//     return view('welcome');
// });

// Route::view('/', 'home')->name('inicio');
// Route::view('/acercade', 'acercade')->name('acercade');
// Route::get('/catalogo', 'CatalogoController@index')->name('catalogo');
// Route::view('/contacto', 'contacto')->name('contacto');


// Observe que se generan las 7 rutas documentadas al inicio (index, create, ...).

// Route::resource('catalogo', 'CatalogoController');

// // Con el siguiente comando se generan sólo las rutas indicadas:

// Route::resource('catalogo', 'CatalogoController')->only([
//     'index', 'show'
// ]);
// Generar todas las rutas, excepto las rutas indicadas en el array:
// Route::resource('catalogo', 'CatalogoController')->except([
//     'index', 'show'
// ]);
// Route::view('/', 'home')->name('inicio');
// Route::apiResource('catalogo', 'CatalogoController');
// Route::post('contacto', 'MensajesController@store');

// Route::view('/acercade', 'acercade')->name('acercade');
// Route::view('/contacto', 'contacto')->name('contacto');

// Route::get('/', 'OtrasPruebasController@inicio')->name('inicio');

// Route::view('/acercade', 'acercade')->name('acercade');
// Route::get('/catalogo', 'ProductoController@index')->name('productos.index');

// Route::get('/catalogo/crear', // ruta para mostrar la vista                   
//            'ProductoController@create')->name('productos.create');


// Route::post('/catalogo/', // ruta que gestiona el envío por POST
//             'ProductoController@store')->name('productos.store');

// Route::get('/catalogo/{producto}', 'ProductoController@show')->name('productos.show');

// Route::resource('mensajes', 'MensajeController');

// Route::view('/contacto', 'contacto')->name('contacto');
// Route::post('contacto', 'OtrasPruebasController@respuestaContacto');
// Route::post('contacto', 'MensajeController@store')->name('mensajes.store');

// Route::get('mensajes/crear', 'MensajeController@create')->name('crear-mensaje');
// Route::post('mensajes', 'MensajeController@store')->name('guardar-mensaje');


// Route::get('mensajes/ver', 'MensajeController@index')->name('ver-mensajes');

// Route::get('mensajes/{id}', 'MensajeController@show')->name('buscar-mensaje');

// Route::get('mensajes/{id}/editar', 'MensajeController@edit')
//        ->name('editar-mensaje');


// Route::delete('mensajes/{id}', 'MensajeController@destroy')
//        ->name('eliminar-mensaje');

Route::view('/', 'home', ['nombre' => 'Leonardo'])->name('inicio');
Route::view('acercade', 'acercade')->name('acercade');
Route::get('catalogo', 'ProductoController@index')->name('productos.index');
Route::get('/catalogo/crear','ProductoController@create')->name('productos.create');
Route::post('/catalogo/','ProductoController@store')->name('productos.store');
Route::get('/catalogo/{producto}', 'ProductoController@show')->name('productos.show');          
Route::resource('mensajes', 'MensajeController');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::resource('usuarios', 'UsuariosController');
Route::get('roles', function () {
    return \App\Role::all();
 });
 Route::get('roles-usuarios', function () {
    return \App\Role::with('user')->get();
 });
