<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Models\Message;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function showMessage(){
        $messages = Message::all();
        return view('messages', ['messages' => $messages]);
    }
    public function showForm(){
        return view("contact");
    }

    public function storeMessage(StoreMessageRequest $request){
        Message::create([
            $request -> input('name'),
            $request -> input('email'),
            $request -> input('message'),
        ]);

        return redirect('/messages');
    }
}
