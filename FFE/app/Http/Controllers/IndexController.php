<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Contents };

class IndexController extends Controller
{
    public function index()
    {
       $content = Contents::all();
       return view('pages.index', compact('content'));
    }
}
