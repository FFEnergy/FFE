<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Contents,  Contacts};

class ContactController extends Controller
{
    public function index()
    {
       $content = Contents::all();
       return view('pages.contact', compact('content'));
    }

    public function Contact(Request $request)
    {
      $request->validate([
        'firstname' => 'required|min:2|max:50',
        'name' => 'required|min:2|max:50',
        'email' => 'required|email',
        'telephone' => 'required|min:10|numeric',
        'message' => 'required|min:5|max:500',
      ]);

      Contacts::create($request->all());
      return redirect()->back()->with('info', 'Le message à bien été envoyé');
    }
}
