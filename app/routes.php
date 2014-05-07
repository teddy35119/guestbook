<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$messages = Message::all();
	
	return View::make('messages')->with('messages', $messages);;
});


Route::get('addmessage', function()
{
	$message = new Message;
	
	$message->Content = Input::get('Send');
	$message->save();
	return Redirect::to('/');
});

Route::get('remove/{id}', function($id)
{
    $messages = Message::find($id);
	$messages->delete();
    return Redirect::to('/');
});