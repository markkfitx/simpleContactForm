<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function showMessages(){
        $messages = Message::all();
        return view('messages', ['messages' => $messages]);
    }
    public function showForm(){
        return view("contact");
    }

    public function storeMEssage(Request $request){
        $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email',
        'message' => 'required|min:8|max:1000',
    ]);

    Message::create([
        'sender_name' => $validated['name'],
        'sender_email' => $validated['email'],
        'message' => $validated['message'],
    ]);
    return redirect('/messages');
    }
}
