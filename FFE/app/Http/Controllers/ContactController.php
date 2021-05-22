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

      // $data = [
      //      'nom' => "Florent",
      //      'email' => "Florent",
      //      'message' => "Florent",
      // ];
      //
      // Mail::send('emails.response', ["data"=>$data], function($message)
      // {
      //     $message->from('ffenergy.contact@gmail.com', 'FFE');
      //     $message->to('fmartinez@edenschool.fr')->cc('fmartinez@edenschool.fr');
      //     $message->subject('FFE');
      // });

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

    public function show()
    {
      $messages = Messages::all();
      return view('admin.contactShow', compact('messages'));
    }
}
