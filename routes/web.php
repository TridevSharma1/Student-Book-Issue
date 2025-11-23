<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookIssueController;

// Students
Route::get('/students', [StudentController::class, 'studentlist'])->name('student.list');
Route::get('/students/create', [StudentController::class, 'studentcreateform'])->name('student.create');
Route::post('/students/store', [StudentController::class, 'studentstore'])->name('student.store');

// Book Issue
Route::get('/bookissue/create', [BookIssueController::class, 'create'])->name('bookissue.create');
Route::post('/bookissue/store', [BookIssueController::class, 'store'])->name('bookissue.store');
Route::get('/bookissue', [BookIssueController::class, 'index'])->name('bookissue.index');
