<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Contents,  Contacts};
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

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

      Mail::send('emails.verification', ['request' => $request], function ($m) use ($request) {
        $m->from('ffenergy.contact@gmail.com', 'FFE');

        $m->to($request->email)->subject('merci de votre intérêt');
      });

      return redirect()->back()->with('info', 'Le message à bien été envoyé');
    }

    public function show()
    {
      $messages = Contacts::all();
      return view('admin.contactShow', compact('messages'));
    }

    public function reponse(Request $request)
    {
      $request->validate([
        'email' => 'required|email',
        'message' => 'required|min:5|max:500',
      ]);

      Mail::send('emails.response', ['request' => $request], function ($m) use ($request) {
        $m->from('ffenergy.contact@gmail.com', 'FFE');

        $m->to($request->email)->subject('Reponse demande de contact');
      });

      return redirect()->back()->with('info', 'Le mail à bien été envoyé');
    }
}
