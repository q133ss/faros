<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/service', [\App\Http\Controllers\ServiceController::class, 'index'])->name('service.index');
Route::view('/service/orm', 'service.orm')->name('service.orm');
Route::view('/service/smm', 'service.smm')->name('service.smm');
Route::view('/service/pr', 'service.pr')->name('service.pr');
Route::view('/service/marketing-strategiya-orm-pharm-serm/', 'service.marketing')->name('service.marketing');

Route::get('/case', [\App\Http\Controllers\CaseController::class, 'index'])->name('case.index');
Route::get('/case/{slug}', [\App\Http\Controllers\CaseController::class, 'show'])->name('case.show');

Route::get('/filters/case', [\App\Http\Controllers\CaseController::class, 'filters'])->name('case.filters');
Route::get('/filters/case/reset', [\App\Http\Controllers\CaseController::class, 'reset'])->name('case.reset');

Route::get('/team', [\App\Http\Controllers\TeamController::class, 'index'])->name('team.index');
Route::get('/authors/{slug}', [\App\Http\Controllers\TeamController::class, 'show'])->name('team.show');

Route::get('/articles', [\App\Http\Controllers\ArticlesController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [\App\Http\Controllers\ArticlesController::class, 'show'])->name('articles.show');
Route::get('/articles/page/{page}', [\App\Http\Controllers\ArticlesController::class, 'more'])->name('articles.more');
Route::get('/filters/articles', [\App\Http\Controllers\ArticlesController::class, 'filters'])->name('articles.filters');
Route::get('/filters/articles/reset', [\App\Http\Controllers\ArticlesController::class, 'reset'])->name('articles.reset');

Route::get('/video', [\App\Http\Controllers\VideoController::class, 'index'])->name('video.index');
Route::get('/video/{slug}', [\App\Http\Controllers\VideoController::class, 'show'])->name('video.show');

Route::get('/smi', [\App\Http\Controllers\SmiController::class, 'index'])->name('smi.index');
Route::get('/smi/{slug}', [\App\Http\Controllers\SmiController::class, 'show'])->name('smi.show');
Route::get('/sort/smi', [\App\Http\Controllers\SmiController::class, 'sort'])->name('smi.sort');

Route::get('/pay', [\App\Http\Controllers\PayController::class, 'index'])->name('pay.index');

# TODO админка

# TODO ГЛАВНАЯ СТРАНИЦА!
# TODO убрать все .html
# todo добавить значок ВК
# TODO Спросить, что делать с платежкой?

# TODO ищем все тудушки

# todo при сохранении фото в админке добавить вебп (но это потом)

# TODO при переносе на хост в отдельную фотку сохраним бекап!

# TODO с помощью GPT попробовать убрать ошибки из консоли + ускорить  скажу. что завтра оптимизирую все за свой счет!!!!

Route::get('/slugs', function (){
    $c = \App\Models\Smi::pluck('slug')->all();
    foreach ($c as $slug) {
        echo "https://faros.media/smi/".$slug."<br>";
    }
});
