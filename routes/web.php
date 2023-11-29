<?php

use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CahierTextController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EnseingantController;
use App\Http\Controllers\ExamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes();

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// ||||||||||||||||||||||||||  Enseingnant ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::middleware('ensaignant')->group(function () {
    Route::get('Enseingant', [EnseingantController::class, 'index'])->name('Enseingant.index');

    // Ensignent relation with students
    Route::get('Enseingant/students', [EnseingantController::class, 'listStudent'])->name('Enseingant.liststudent');
    Route::get('Enseingant/students/{idm}', [EnseingantController::class, 'showStudentInfo'])->name('Enseingant.student');
    Route::get('Enseingant/students/{idm}/Doc/{path?}', [EnseingantController::class, 'showStudentDocInfo'])->name('Enseingant.student.doc');
    Route::get('Enseingant/students/{idm}/Doc', [EnseingantController::class, 'showStudentDocInfoSearch'])->name('Enseingant.student.doc');
    Route::get('Enseingant/students/{idm}/Devoir', [EnseingantController::class, 'showStudentDev'])->name('Enseingant.student.devoir');


    // Ensignent Cahier Text Management
    Route::get('Enseingant/cahierText', [CahierTextController::class, 'index'])->name('Enseingant.cahierText');
    Route::post('Enseingant/cahierText', [CahierTextController::class, 'search'])->name('Enseingant.cahierText');



    // documents.blade
    Route::get('Enseingant/Documents', [EnseingantController::class, 'listDoc'])->name('Enseingant.documents');

    // course
    Route::get('Enseingant/cours', [EnseingantController::class, 'cours'])->name('Enseingant.cours');
    Route::get('Enseingant/cour/info/{id}', [EnseingantController::class, 'courShow'])->name('Enseingant.courInfo');
    Route::get('Enseingant/cour/info/{id}/update', [EnseingantController::class, 'editCour'])->name('Enseingant.update');
    Route::post('Enseingant/cour/info/{id}/update', [EnseingantController::class, 'updateCour'])->name('Enseingant.update');

    // devoir
    Route::get('Enseingant/devoirs', [EnseingantController::class, 'devoirs'])->name('Enseingant.devoirs');
    Route::get('Enseingant/devoirs/info/{id}', [EnseingantController::class, 'devoirShow'])->name('Enseingant.devoirInfo');
    Route::get('Enseingant/devoirs/info/{id}/reponse', [EnseingantController::class, 'devoirShowRepons'])->name('Enseingant.devoirInfo.repons');
    Route::get('Enseingant/devoirs/info/{id}/update', [EnseingantController::class, 'editdevoir'])->name('Enseingant.updateDevoir');
    Route::post('Enseingant/devoirs/info/{id}/update', [EnseingantController::class, 'updatedevoir'])->name('Enseingant.updateDevoir');


    //absecs
    Route::get('Enseingant/absence', [AbsenceController::class, 'absenceIndex'])->name('Enseingant.absence');
    Route::post('Enseingant/absence', [AbsenceController::class, 'absenceUpdate'])->name('Enseingant.absence');


    // not examan
    Route::get('Enseingant/exam', [ExamController::class, 'examanIndex'])->name('Enseingant.exam');
    Route::post('Enseingant/exam', [ExamController::class, 'examanUpdate'])->name('Enseingant.exam');
});
