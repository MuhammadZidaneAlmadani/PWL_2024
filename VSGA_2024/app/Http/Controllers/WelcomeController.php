<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function hello()
    {
        return ("hello world");
    }
    public function greeting()
    {
        return view ("blog.hello", ['name'=>'Andi']);
    }
}
