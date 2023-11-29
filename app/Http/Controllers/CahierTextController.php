<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CahierTextController extends Controller
{
    public function index()
    {
        $classes = auth()->user()->enseignant->classes;
        $cahierTextes = auth()->user()->enseignant->cahierTextes;
        return view('enseignant.cahierTextList',['classes'=>$classes,'cahierTextes'=>$cahierTextes]);

    }

    public function search(Request $req){
        return view('enseignant.cahierTextList');
    }
}
