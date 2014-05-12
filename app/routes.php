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
	$data = array();
	$data['messages'] = Message::all();
	$data['replys'] = Reply::all();
	return View::make('messages', $data);
});

Route::get('addmessage', function()
{
	$messages = new Message;
	
	$messages->Content = Input::get('Send');
	$messages->save();
	return Redirect::to('/');
});

Route::get('remove/{type}/{id}', function($type,$id)
{
	if ($type == 'message')
	{
		$messages = Message::find($id);
		$messages->delete();
	}
	if ($type == 'reply')
	{
		$replys = Reply::find($id);
		$replys->delete();
	}
    return Redirect::to('/');
});

Route::get('reply/{id}', function($id)
{
	$replys = new Reply;
	$replys->FatherId = $id;
	$replys->ReplyContent = Input::get('ReplySend');
	$replys->save();
	return Redirect::to('/');
});