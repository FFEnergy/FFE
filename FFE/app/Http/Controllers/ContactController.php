<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Contents };

class ContactController extends Controller
{
    public function index()
    {
       $content = Contents::all();
       return view('pages.contact', compact('content'));
    }
}
