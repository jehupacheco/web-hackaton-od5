<?php

Route::get('/', function() {
  return view('home');
});
Route::get('/organizaciones', 'OrganizacionController@index');
Route::get('/organizaciones/{organizacion}', 'OrganizacionController@show');
Route::get('/servicios/','ServicioController@index');
Route::get('/servicios?tipo=legal', 'ServicioController@index');
Route::get('/servicios?tipo=psico', 'ServicioController@index');
Route::get('/servicios/{servicio}','ServicioController@show');
Route::post('/resenas','ResenaController@store');
