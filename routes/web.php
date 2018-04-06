<?php

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

Route::get('/', function () {
    return view('vendor/adminlte/auth/login');
});
Route::get('/home', function () {
    return view('vendor/adminlte/home');
});
Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    //Student urls
    Route::get('/student','StudentController@index')->name('student');
    Route::get('/addstudent','StudentController@add')->name('student');
    Route::post('/addstudent', ['uses'=>'StudentController@create','as'=>'student.add']);
    Route::resource('students','StudentController');
    
    
    //Class urls
    Route::get('/class','ClassController@index')->name('class');
    Route::get('/addclass','ClassController@add')->name('class');
    Route::post('/addclass', ['uses'=>'ClassController@create','as'=>'class.add']);
    Route::resource('classcs','ClassController');
    
     //Subjects urls
    Route::get('/subject','SubjectController@index')->name('subject');
    Route::get('/addsubject','SubjectController@add')->name('subject');
    Route::post('/addsubject', ['uses'=>'SubjectController@create','as'=>'subject.add']);
    Route::resource('subjects','SubjectController');
    
    //Exam urls
    Route::get('/exam','ExamController@index')->name('exam');
    Route::get('/addexam','ExamController@add')->name('exam');
    Route::post('/addexam', ['uses'=>'ExamController@create','as'=>'exam.add']);
    Route::resource('exams','ExamController');
    
    //Result urls
    Route::get('/result','ResultController@index')->name('result');
    Route::get('/addresult','ResultController@add')->name('result');
    Route::post('/addresult', ['uses'=>'ResultController@create','as'=>'result.add']);
    Route::resource('results','ResultController');
    Route::resource('resultview','ResultviewController');
    
    
     //Teacher urls
    Route::get('/teacher','TeacherController@index')->name('teacher');
    Route::get('/addteacher','TeacherController@add')->name('teacher');
    Route::post('/addteacher', ['uses'=>'TeacherController@create','as'=>'teacher.add']);
    Route::resource('teachers','TeacherController');
    
    
    //feestructure urls
    Route::get('/feestructure','FeestructureController@index')->name('feestructure');
    Route::get('/addfeestructure','FeestructureController@add')->name('feestructure');
    Route::post('/addfeestructure', ['uses'=>'FeestructureController@create','as'=>'feestructure.add']);
    Route::resource('feestructures','FeestructureController');
    
});
