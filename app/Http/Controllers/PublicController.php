<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        $title = 'Hotel California';
        return view ('welcome',['title'=>$title]);
    }
}
