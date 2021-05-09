<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ User };
use Auth;

class UserController extends Controller
{
    public function index()
    {
      $user = Auth::user();
      return view('auth.compte', compact('user'));
    }

  public function update(Request $request)
  {
    $request->validate([
      'name' => 'required|min:2|max:255',
      'email' => 'required|email',
    ]);
    $user = User::find(Auth::user()->id);
    $user->update($request->all());
    return redirect()->back()->with('info', 'Les informations ont bien été modifiés');
  }
}
