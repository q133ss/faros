<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/service', [\App\Http\Controllers\ServiceController::class, 'index'])->name('service.index');
Route::get('/service/{slug}', [\App\Http\Controllers\ServiceController::class, 'show'])->name('service.show');
Route::get('/case', [\App\Http\Controllers\CaseController::class, 'index'])->name('case.index');
Route::get('/case/{slug}', [\App\Http\Controllers\CaseController::class, 'show'])->name('case.show');
Route::get('/team', [\App\Http\Controllers\TeamController::class, 'index'])->name('team.index');
Route::get('/authors/{slug}', [\App\Http\Controllers\TeamController::class, 'show'])->name('team.show');
#todo тут везде ниже layout нету! Нужны INC
Route::get('/articles', [\App\Http\Controllers\ArticlesController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [\App\Http\Controllers\ArticlesController::class, 'show'])->name('articles.show');
Route::get('/video', [\App\Http\Controllers\VideoController::class, 'index'])->name('video.index');
Route::get('/video/{slug}', [\App\Http\Controllers\VideoController::class, 'show'])->name('video.show');
Route::get('/smi', [\App\Http\Controllers\SmiController::class, 'index'])->name('smi.index');
Route::get('/smi/{slug}', [\App\Http\Controllers\SmiController::class, 'show'])->name('smi.show');
Route::get('/pay', [\App\Http\Controllers\PayController::class, 'index'])->name('pay.index');

# TODO перенести потом все SEO теги для всех страниц в БД meta, content, image ...
# TODO скачать все стили и скрипты с удаленного сервера
# TODO попросить данные от платежки! ЛИБО ГЛЯНУТЬ НА ХОСТЕ!
