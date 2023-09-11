<?php

namespace App\Http\Controllers;

use App\Events\sendMessageEvent;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class AppChatsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('app-chat');
    }

    public function getMessages(){
        $messages = Message::with('user')->get();
        // dd($messages);
        return $messages;
    }

    public function sendMessage(Request $request){
        $user = Auth::user();
        $message = new Message();
        $message->message = $request->message;
        $message->user_id = $user->id;
        $message->save();
        broadcast(new SendMessageEvent ($user, $message))->toOthers();
        return ['status' => 'Message Sent!'];
    }

}
