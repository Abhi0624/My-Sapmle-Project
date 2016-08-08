<?php


Route::group(['middleware'=>['web']], function(){


Route::get('/', function() {
	return view('welcome');
});
Route::get('cards','CardsController@index');
Route::get('cards/{card}','CardsController@show');
Route::post('cards/{card}/notes','NotesController@store');

});