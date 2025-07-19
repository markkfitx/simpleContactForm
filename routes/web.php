<?php
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get("/contact", function(){
    return view("contact");
});

Route::get("/messages", function(){
    $messages = Message::all();
    return view('messages', ['messages' => $messages]);
});

Route::post("/contact", function(Request $request){
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
});