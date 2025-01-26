<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/service', [\App\Http\Controllers\ServiceController::class, 'index'])->name('service.index');
Route::view('/service/orm', 'service.orm')->name('service.orm');
Route::view('/service/smm', 'service.smm')->name('service.smm');
Route::view('/service/pr', 'service.pr')->name('service.pr');
Route::view('/service/marketing-strategiya-orm-pharm-serm/', 'service.marketing')->name('service.marketing');
#todo вверх страницы не тот! нет тегов
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
Route::get('/sort/smi', [\App\Http\Controllers\SmiController::class, 'sort'])->name('smi.sort');

Route::get('/pay', [\App\Http\Controllers\PayController::class, 'index'])->name('pay.index');

# TODO постранично | ИДЕМ ПО СПИСКУ
# Переносим все статьи, теги и фото
# todo у кейсов делаем сортировку, поиск, теги, форму и все!!!!


# todo убрать везде <title>СМИ</title> Он будет в SEO | перенести все title
# todo перенести все seo в smi  СПАРСИТЬ СЕО ТЕГИ У SMI!!!!! По слагу!!!
# todo team.show авторы недели
# todo case.show что там под популярными постами?
# todo добавить значок ВК


# TODO перенести записи парсом! либо взять из БД
# TODO с помощью GPT попробовать убрать ошибки из консоли + ускорить
# TODO перенести потом все SEO теги для всех страниц в БД meta, content, image ...
# TODO попросить данные от платежки! ЛИБО ГЛЯНУТЬ НА ХОСТЕ!

# TODO админка

# TODO при переносе на хост в отдельную фотку сохраним бекап!
