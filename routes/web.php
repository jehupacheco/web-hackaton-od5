<?php

Route::get('/', function() {
  return view('home');
});
Route::get('/organizaciones', 'OrganizacionController@index');
Route::get('/servicios/','ServicioController@index');
Route::get('/organizaciones/{organizacion}', 'OrganizacionController@show');
Route::get('/servicios/{servicio}','ServicioController@show');
