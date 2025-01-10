<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/service', [\App\Http\Controllers\ServiceController::class, 'index'])->name('service.index');
Route::get('/service/{slug}', [\App\Http\Controllers\ServiceController::class, 'show'])->name('service.show');
Route::get('/case', [\App\Http\Controllers\CaseController::class, 'index'])->name('case.index');
Route::get('/case/{slug}', [\App\Http\Controllers\CaseController::class, 'show'])->name('case.show');
Route::get('/team', [\App\Http\Controllers\TeamController::class, 'index'])->name('team.index');
Route::get('/authors/{slug}', [\App\Http\Controllers\TeamController::class, 'show'])->name('team.show');
#todo тут layout нету! Нужны INC
Route::get('/articles', [\App\Http\Controllers\ArticlesController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [\App\Http\Controllers\ArticlesController::class, 'show'])->name('articles.show');

// Нам осталось: video, smi, online

# TODO перенести потом все SEO теги для всех страниц в БД meta, content, image ...
# TODO объеденить меню в layout
# TODO сделать inc для SEO полей
# TODO скачать все стили и скрипты с удаленного сервера
