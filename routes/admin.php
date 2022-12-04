<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BoardController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\ReviewController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

/*
 * Namespace has default path (App/Http/Controllers) so any new namespace defined will add to
default path and the new path will be as : (App/Http/Controllers/Admin)
 */

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    // define the guard from 'config/auth.php' to be admin not web
    Config::set('auth.defines', 'admin');

    // group route if the user is loggedIn
    Route::group(['middleware' => 'adminGuest:admins'], function () {
        Route::get('login', 'AdminAuth@login');
        Route::post('login', 'AdminAuth@doLogin');
        Route::get('forgot/password', 'AdminAuth@forgot_password');
        Route::post('forgot/password', 'AdminAuth@forgot_password_post');
        Route::get('reset/password/{token}', 'AdminAuth@reset_password');
        Route::post('reset/password/{token}', 'AdminAuth@change_password');
    });

    // Check for middleware admin and deffined the guard as :admin | group Route If User Not Logged In
    Route::group(['middleware' => 'admin:admins'], function () {
        Route::get('/', function () {
            return view('admin.home');
        });
        Route::any('logout', 'AdminAuth@logout');

        // Admin
        Route::resource('admin', 'AdminController');
        Route::delete('admin/destroy/all', 'AdminController@destroyAll');

        // Student
        Route::resource('student', 'StudentController');
        Route::delete('student/destroy/all', 'StudentController@destroyAll');

        // Board
        Route::resource('board', 'BoardController');
        Route::resource('/board/store', 'BoardController');
        Route::post('/board/store', [BoardController::class, 'store'])->name('board.store');
        Route::delete('board/destroy/all', 'BoardController@destroyAll');

        // Class
        Route::resource('class', 'ClassController');
        Route::post('/class/store', [ClassController::class, 'store'])->name('class.store');
        Route::delete('class/destroy/all', 'classController@destroyAll');

        // Subject
        Route::resource('subject', 'SubjectController');
        Route::post('/subject/store', [SubjectController::class, 'store'])->name('subject.store');
        Route::delete('subject/destroy/all', 'SubjectController@destroyAll');
        Route::post('/ajax/get-class-list', [SubjectController::class, 'getClassList'])->name('subject.getClassList');

         // Review
         Route::resource('review', 'ReviewController');
         Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');
         Route::delete('review/destroy/all', 'ReviewController@destroyAll');
        // / Route::post('/ajax/get-class-list', [ReviewController::class, 'getClassList'])->name('subject.getClassList');
        // Chapter
        Route::resource('chapter', 'ChapterController');
        Route::post('/chapter/store', [ChapterController::class, 'store'])->name('chapter.store');
        // Route::post('/ajax/get-Chapter-list', [ChapterController::class, 'getChapterList'])->name('chapter.getChapterList');
        Route::post('/ajax/get-Chapter-SubjectList', [ChapterController::class, 'getChapterSubjectList'])->name('chapter.getChapterSubjectList');
        // Route::post('api/fetch-class', [ChapterController::class, 'fetchClass']);
        // Route::post('api/fetch-subject', [ChapterController::class, 'fetchSubject']);
        Route::delete('chapter/destroy/all', 'ChapterController@destroyAll');
        // Banner
        Route::resource('banner', 'BannerController');
        Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
        Route::delete('banner/destroy/all', 'BannerController@destroyAll');
        // Exam
        Route::resource('exam', 'ExamController');
        Route::delete('exam/destroy/all', 'ExamController@destroyAll');
        Route::post('/ajax/get-chapter-list', [ExamController::class, 'getChapterList'])->name('exam.getChapterList');
        // Question
        Route::resource('question', 'QuestionController');

        // Answer
        Route::resource('answer', 'AnswerController');

    });

    Route::get('lang/{lang}', function ($lang) {
        session()->has('lang') ? session()->forget('lang') : '';
        $lang == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
        return back();
    });
});
