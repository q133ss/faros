<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/filters/index', [\App\Http\Controllers\IndexController::class, 'filter']);

Route::get('/service', [\App\Http\Controllers\ServiceController::class, 'index'])->name('service.index');
Route::get('/service/{slug}', [\App\Http\Controllers\ServiceController::class, 'show'])->name('service.show');
Route::post('/form/service', [\App\Http\Controllers\ServiceController::class, 'form'])->name('service.form');

Route::get('/case', [\App\Http\Controllers\CaseController::class, 'index'])->name('case.index');
Route::get('/case/{slug}', [\App\Http\Controllers\CaseController::class, 'show'])->name('case.show');

Route::get('/filters/case', [\App\Http\Controllers\CaseController::class, 'filters'])->name('case.filters');
Route::get('/filters/case/reset', [\App\Http\Controllers\CaseController::class, 'reset'])->name('case.reset');

Route::get('/team', [\App\Http\Controllers\TeamController::class, 'index'])->name('team.index');
Route::get('/authors/{slug}', [\App\Http\Controllers\TeamController::class, 'show'])->name('team.show');
Route::get('/filters/author/{author}/{category}', [\App\Http\Controllers\TeamController::class, 'filters'])->name('team.filters');

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

Route::get('/reviews', [\App\Http\Controllers\ReviewController::class, 'index'])->name('review.index');

Route::post('/feedback', [\App\Http\Controllers\FeedbackController::class, 'store'])->name('feedback.store');

Route::view('/login', 'auth.login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');

Route::name('admin.')->prefix('admin')->middleware(['auth', 'is.admin'])->group(function () {
   Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('index');
   Route::get('/callbacks', [\App\Http\Controllers\Admin\CallbackController::class, 'index'])->name('callbacks.index');
   Route::resource('service', \App\Http\Controllers\Admin\ServiceController::class);
   Route::resource('case', \App\Http\Controllers\Admin\CaseController::class);
   Route::resource('team', \App\Http\Controllers\Admin\TeamController::class);
   Route::resource('post', \App\Http\Controllers\Admin\PostController::class);
   Route::resource('video', \App\Http\Controllers\Admin\VideoController::class);
   Route::resource('smi', \App\Http\Controllers\Admin\SmiController::class);
   Route::get('seo', [\App\Http\Controllers\Admin\SeoController::class, 'index'])->name('seo.index');
   Route::get('seo/{id}', [\App\Http\Controllers\Admin\SeoController::class, 'edit'])->name('seo.edit');
   Route::patch('seo/{id}', [\App\Http\Controllers\Admin\SeoController::class, 'update'])->name('seo.update');
   Route::resource('role', \App\Http\Controllers\Admin\RoleController::class)->only('index', 'edit', 'update');
});

# todo добавить значок ВК

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
