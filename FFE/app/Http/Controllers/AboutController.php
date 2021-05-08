<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Contents };

class AboutController extends Controller
{
    public function index()
    {
       $content = Contents::all();
       return view('pages.about', compact('content'));
    }
}
