@extends('layouts.admin')
@section('title', 'Изменить автора')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Изменить автора</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('admin.team.update', $author->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <!-- Общие поля -->
                <div class="form-group">
                    <label for="slug">Slug (генерируется автоматически)</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $author->slug }}">
                </div>
                <div class="form-group">
                    <label for="name">Имя*</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $author->name }}">
                </div>
                <div class="form-group">
                    <label for="list_post">Должность на странице "Команда"</label>
                    <input type="text" class="form-control" id="list_post" name="list_post" value="{{ $author->list_post }}">
                </div>
                <div class="form-group">
                    <label for="page_post">Должность на детальной странице</label>
                    <input type="text" class="form-control" id="page_post" name="page_post" value="{{ $author->page_post }}">
                </div>
                <div class="form-group">
                    <label for="list_text">Текст на странице "Команда"</label>
                    <textarea class="form-control d-none" id="list_text" name="list_text" rows="3">{{ $author->list_text }}</textarea>
                    <div id="code-editor"></div>
                </div>

                <div class="form-group">
                    <label for="rating">Рейтинг</label>
                    <input type="number" class="form-control" id="rating" name="rating" placeholder="1244" value="{{ $author->rating }}">
                </div>

                <div class="form-group">
                    <label for="post_count">Кол-во статей</label>
                    <input type="text" class="form-control" id="post_count" name="post_count" placeholder="54 статьи" value="{{ $author->post_count }}">
                </div>

                <div class="form-group">
                    <label for="smi_count">Кол-во публикаций в СМИ</label>
                    <input type="text" class="form-control" id="smi_count" name="smi_count" placeholder="1 публикация" value="{{ $author->smi_count }}">
                </div>

                <div class="form-group">
                    <label for="text">Слова от автора</label>
                    <textarea class="form-control d-none" id="text" name="from_author" rows="3">{{ $author->from_author }}</textarea>
                    <div id="code-editor"></div>
                </div>

                <div class="form-group">
                    <label for="text">Образование</label>
                    <textarea class="form-control d-none" id="text" name="education" rows="3">{{ $author->education }}</textarea>
                    <div id="code-editor"></div>
                </div>

                <div class="form-group">
                    <label for="text">Дополнительное образование</label>
                    <textarea class="form-control d-none" id="text" name="additional_educational" rows="3">{{ $author->additional_educational }}</textarea>
                    <div id="code-editor"></div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="mail@email.net" value="{{ $author->email }}">
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="url" class="form-control" id="instagram" name="instagram" placeholder="https://instagram.com/" value="{{ $author->instagram }}">
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input id="hasDetail" @if($author->has_detail == true) checked @endif class="form-check-input" value="1" name="has_detail" type="checkbox">
                        <label for="hasDetail" class="form-check-label">Разрешить переход на детальную страницу</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input id="list_show" @if($author->list_show == true) checked @endif class="form-check-input" value="1" name="list_show" type="checkbox">
                        <label for="list_show" class="form-check-label">Отображать на странице "Команда"</label>
                    </div>
                </div>

                <!-- Изображения -->
                <div class="border mt-2 p-2">
                    <div class="form-group mt-2">
                        <label for="logo">Фото</label>
                        <br>
                        <img src="{{$author->img}}" title="Faros Media" width="100px" alt="Faros media">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="logo">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Настройки SEO -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5 class="card-title">Настройки SEO</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $author->seo?->meta_title ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea class="form-control" id="meta_description" name="meta_description" rows="3">{{ $author->seo?->meta_description ?? '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ $author->seo?->meta_keywords ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="canonical">Canonical URL</label>
                            <input type="text" class="form-control" id="canonical" name="canonical" value="{{ $author->seo?->canonical ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_title">OG Title</label>
                            <input type="text" class="form-control" id="og_title" name="og_title" value="{{ $author->seo?->og_title ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_description">OG Description</label>
                            <textarea class="form-control" id="og_description" name="og_description" rows="3">{{ $author->seo?->og_description ?? '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="og_url">OG URL</label>
                            <input type="text" class="form-control" id="og_url" name="og_url" value="{{ $author->seo?->og_url ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_type">OG Type</label>
                            <input type="text" class="form-control" id="og_type" name="og_type" value="{{ $author->seo?->og_type ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_site_name">OG Site Name</label>
                            <input type="text" class="form-control" id="og_site_name" name="og_site_name" value="{{ $author->seo?->og_site_name ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image">OG Image</label>
                            <input type="text" class="form-control" id="og_image" name="og_image" value="{{ $author->seo?->og_image ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image_type">OG Image Type</label>
                            <input type="text" class="form-control" id="og_image_type" name="og_image_type" value="{{ $author->seo?->og_image_type ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image_width">OG Image Width</label>
                            <input type="number" class="form-control" id="og_image_width" name="og_image_width" value="{{ $author->seo?->og_image_width ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image_height">OG Image Height</label>
                            <input type="number" class="form-control" id="og_image_height" name="og_image_height" value="{{ $author->seo?->og_image_height ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="vk_image">VK Image</label>
                            <input type="text" class="form-control" id="vk_image" name="vk_image" value="{{ $author->seo?->vk_image ?? '' }}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <!-- Кнопка сохранения -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>

    <style>
        .form-group {
            margin-top: 20px;
        }
        .card {
            margin-top: 20px;
        }
        .card img {
            max-width: 100px;
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('scripts')
    <!-- Подключение Froala CSS -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@4.0.1/css/froala_editor.pkgd.min.css" rel="stylesheet">

    <!-- Подключение Froala JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/froala-editor@4.0.1/js/froala_editor.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/froala-editor@4.0.1/js/languages/ru.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            new FroalaEditor('#text', {
                language: 'ru', // Язык (русский)
                heightMin: 300, // Минимальная высота редактора
                //toolbarButtons: ['bold', 'italic', 'formatOL', 'formatUL', 'h2'], // Ограничиваем инструменты
            });
        });
    </script>
@endsection
