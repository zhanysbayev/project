<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;

class MailController extends Controller
{
    public function send(){
        $objDemo = new \stdClass();
        $objDemo -> sender = 'Aidos Zhanysbayev';
        $objDemo -> receiver = 'Aidos Zhanysbayev';

        Mail::to("zhanysbaev.a123@gmail.com") -> send(new DemoEmail($objDemo));

    }
}