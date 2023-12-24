<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ExamController, QuestionsController,
    UserController, StudentApplicationController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('auth.login');
});
/*
Route::get('get-involved', function(){
    return view('get_involved');
})->name('get_involved');

Route::get('students-apply', function(){
    return view('applications.students');
})->name('students_apply');

Route::get('sponsors-apply', function(){
    return view('applications.sponsors');
})->name('sponsors_apply');

Route::get('student/test/{uni}', function(){
    return 'sloellsls';
})->name('test_link');
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    /*examination link*/
    Route::get('/exam/list',[ExamController::class, 'index'])->name('exam.list');
    Route::get('exam/create', [ExamController::class, 'create'])->name('exam.create');
    Route::get('exam/edit/{id}', [ExamController::class, 'edit'])->name('exam.edit');
    Route::delete('exam/delete/{id}', [ExamController::class, 'destroy'])->name('exam.destroy');

    /*question link */
    Route::get('/exam/question/list/{id}', [QuestionsController::class, 'index'])->name('exam.question.list');
    Route::get('/exam/question/create', [QuestionsController::class, 'create'])->name('exam.question.create');
    Route::get('exam/question/edit/{id}', [QuestionsController::class, 'edit'])->name('exam.question.edit');
    Route::delete('exam/question/delete/{id}', [QuestionsController::class, 'destroy'])->name('exam.question.destroy');

    /*user links */
    Route::get('/user/list', [UserController::class, 'index'])->name('user.list');
    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::delete('users/delete/{id}', [UserController::class, 'delete'])->name('user.delete');


    /*applications*/
    Route::get('/student-applications', [StudentApplicationController::class, 'index'])->name('student-applications.list');
    Route::get('/student-application/{id}', [StudentApplicationController::class, 'show'])->name('student-applications.show');
});
