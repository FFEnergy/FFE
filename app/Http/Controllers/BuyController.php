<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Contents };

class BuyController extends Controller
{
    public function index()
    {
       $content = Contents::orderBy('id', 'ASC')->get();
       return view('pages.ficheproduit', compact('content'));
    }
}
