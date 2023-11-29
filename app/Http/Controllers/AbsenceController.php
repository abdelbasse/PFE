<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenceController extends Controller
{

    public function absenceIndex()
    {
        return view('enseignant.absence.absenceIndex');
    }
    public function absenceUpdate(Request $req){
        return view('enseignant.absence.absenceIndex');

    }
}
