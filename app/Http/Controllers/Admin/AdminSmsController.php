<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Session;


class AdminSmsController extends Controller
{
    
   public function sms( ){
    Nexmo::message()->send([
        'to'   => '201069945283',
        'from' => 'esraa',
        'text' => 'hey, the borrow time will end soon'
    ]);
    Session::flash('SMS_sent', 'SMS sent Successfully.');

    return redirect()->back();
   }
}
