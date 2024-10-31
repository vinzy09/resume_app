<?php

use Illuminate\Support\Facades\Route;

Route::get('/resumes', function () {
    return view('resumes.index'); // Assuming you create a file named index.blade.php in resources/views/resumes
});
