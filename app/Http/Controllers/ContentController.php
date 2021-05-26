<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Contents };
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    public function index()
    {
        $content = Contents::with("pages")->get();
        return view('admin.articleModif', compact('content'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'content' => 'required|min:2|max:1000',
            'titre_content' => 'required|min:2|max:191',
        ]);
        $content = Contents::find($request->id);
        $content->update($request->all());

        return redirect()->back()->with('info','les informations ont bien été modifiés');
    }
}
