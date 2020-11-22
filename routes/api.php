<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('topics', 'TopicController@topic_id');
Route::get('topics', 'TopicController@title');
Route::get('topics', 'TopicController@is_locked');

Route::post('topics', 'TopicController@topic_id');
Route::post('topics', 'TopicController@title');
Route::post('topics', 'TopicController@is_locked');

Route::get('topic_contents', 'Topic_contentController@topic_id');
Route::get('topic_contents', 'Topic_contentController@content');
Route::get('topic_contents', 'Topic_contentController@is_locked');

Route::post('topic_contents', 'Topic_contentController@topic_id');
Route::post('topic_contents', 'Topic_contentController@content');
Route::post('topic_contents', 'Topic_contentController@is_locked');
