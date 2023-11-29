<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function examanIndex()
    {
        return view('enseignant.exam.index');
    }

    public function examanUpdate(Request $req)
    {
        return response()->json(['success' => true, 'message']);
    }
}
