<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ocene extends Controller
{
    public function index()
    {
        $ocene = \App\Models\Ocene::all();
        return view("welcome", compact('ocene'));
    }


    public function addGrade(Request $request)
    {
        $request->validate([
            "profesor" => "string|required",
            "ocena" => "int|required|min:1|max:5",
            "predmet" => "string|required"
        ]);

        \App\Models\Ocene::create([
            'profesor' =>$request->get('profesor'),
            'ocena' =>$request->get('ocena'),
            'predmet' =>$request->get('predmet')
        ]);

        return redirect("/");

    }

}




