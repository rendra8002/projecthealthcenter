<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class MessageController
{
    public function index()
    {

        return view('pages.frontend.message.index');
    }
}
