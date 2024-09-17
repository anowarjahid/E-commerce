<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;




Route::get('/', [TeacherController::class, 'viewTeacher'])->name('view-teacher');
Route::get('/add-teacher', [TeacherController::class, 'addTeacher'])->name('add-teacher');
Route::post('/store-teacher', [TeacherController::class, 'storeTeacher'])->name('store-teacher');
Route::get('/edit-teacher/{id}', [TeacherController::class, 'editTeacher'])->name('edit-teacher');
Route::put('/teacher-update-store/{id}', [TeacherController::class, 'updateTeacher'])->name('update-teacher');
Route::delete('/delete-teacher/{id}', [TeacherController::class, 'deleteTeacher'])->name('delete-teacher');
