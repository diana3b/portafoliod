<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    //
    public function store(){
        //Validacion de campos de formulario
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ],[
            'name.required' => 'necesito su nombre' 
        ]);
        //Enviar email
        Mail::to('dianabarillas69@gmail.com')->queue(new MessageReceived($message));
        return back()->with('status', 'Te responderemos en 24 horas');
    }
}
