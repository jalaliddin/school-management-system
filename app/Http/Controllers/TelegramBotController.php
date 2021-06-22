<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;
use function MongoDB\BSON\toRelaxedExtendedJSON;

class TelegramBotController extends Controller
{
    //
    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }

    public function sendMessage(Request $request, $chat_id, $student_id, $course_id)
    {



        Telegram::sendMessage([
            'chat_id' => $chat_id,
            'text' => $student_id
        ]);
        return response()->json(array(
            'success' => true
        ), 200);
    }

    public function sendMark($mark)
    {
        return 1;
    }

}
