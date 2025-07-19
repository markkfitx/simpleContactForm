<?php
use App\Http\Controllers\MessageController;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get("/contact", [MessageController::class, 'showForm']);
Route::get("/messages", [MessageController::class, 'storeMessage']);
Route::post("/contact", [MessageController::class, 'showMessage']);