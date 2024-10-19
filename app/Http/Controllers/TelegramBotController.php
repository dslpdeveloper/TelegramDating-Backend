<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class TelegramBotController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $tgData = $request->all();
        $jsonTgData = json_encode($tgData);

        if (isset($tgData['message']['text']) && $tgData['message']['text'] == '/start') {
            $chatId = $tgData['message']['chat']['id'];
            $message = "<b>Welcome to Telegram Dating</b> \n\n Open the app and connect with other people.";
        }
    }
}
