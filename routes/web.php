<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    $student = Student::find(1);

    dd($student->termine);
});
