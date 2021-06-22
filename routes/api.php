<?php

use Illuminate\Http\Request;
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
//Route::post('/bot/getupdates', function() {
//    $updates = Telegram::getUpdates();
//    return (json_encode($updates));
//});

//Route::post('bot/sendmessage/{course_id}/{student_id}', function() {
//    Telegram::sendMessage([
//        'chat_id' => '784281582',
//        'text' => 'Hello world!'
//    ]);
//
//    return response()->json('ok',200);
//});


Route::post('bot/sendmessage/{chat_id}/{student_id}/{course_id}', 'TelegramBotController@sendMessage')
    ->name('telegram.send.message');
Route::get('bot/mark/{student_id}', 'TelegramBotController@sendMark')
    ->name('telegram.send.mark');