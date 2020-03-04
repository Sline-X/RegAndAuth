<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name', 'Web dev blog'], function($message){
            $message->to('email', 'To User')->subject('Test email');
            $message->from('my_emale', 'Maksim');
        });
    }
}
