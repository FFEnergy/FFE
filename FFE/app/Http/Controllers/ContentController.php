<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Contents };
use Auth;

class ContentController extends Controller
{
    public function index()
    {
        $content = Contents::with("pages")->get();
        return view('admin.articleModif', compact('content'));
    }
}
