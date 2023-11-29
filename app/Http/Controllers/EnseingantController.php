<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnseingantController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('ensaignant');
    // }

    public function index()
    {
        return view('enseignant.home');
    }

    public function listStudent()
    {
        $classes = auth()->user()->enseignant->classes;
        return view('enseignant.listStudents',['classes'=>$classes]);
    }

    public function showStudentInfo($idm)
    {
        // idm stand for id massar of the student
        return view('enseignant.students.student');
    }

    public function showStudentDocInfo($idm, $path = null)
    {
        // idm stand for id massar of the student
        // path stand for the path of directory of the students
        return view('enseignant.students.studentDoc');
    }

    public function showStudentDocInfoSearch(Request $req)
    {
        // idm stand for id massar of the student
        // path stand for the path of directory of the students
        return view('enseignant.students.studentDoc');
    }
    public function showStudentDev($idm){
        // idm stand for id massar of the student
        return view('enseignant.students.studentDevoir');
    }

    public function listDoc(){
        return view('enseignant.document');
    }
    public function cours(){
        return view('enseignant.coure.cours');
    }

    public function courShow($id){
        return view('enseignant.coure.cour',['id'=>$id]);
    }


    public function editCour($id){
        return view('enseignant.coure.form',['id'=>$id]);
    }

    public function updateCour($id,Request $req){
        return redirect()->route('Enseingant.courInfo',['id'=>$id]);
    }

// ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public function devoirs(){
        return view('enseignant.devoir.devoirs');
    }

    public function devoirShow($id){
        return view('enseignant.devoir.devoir',['id'=>$id]);
    }

    public function devoirShowRepons($id){
        return view('enseignant.devoir.devoirReponse',['id'=>$id]);
    }


    public function editdevoir($id){
        return view('enseignant.devoir.form',['id'=>$id]);
    }

    public function updatedevoir($id,Request $req){
        return redirect()->route('Enseingant.devoirInfo',['id'=>$id]);
    }

}
