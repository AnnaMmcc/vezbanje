<?php

use Illuminate\Support\Facades\Route;

Route::get("/", [\App\Http\Controllers\Ocene::class, "index"]);

Route::view("/dodaj-ocenu", "addGrade" );

Route::post("add-user-grade", [\App\Http\Controllers\Ocene::class, "addGrade"]);
