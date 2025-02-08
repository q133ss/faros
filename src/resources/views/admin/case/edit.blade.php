@extends('layouts.admin')
@section('title', 'Изменить кейс ' . $case->list_name)
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Изменить кейс</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('admin.case.update', $case->id)}}" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
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
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $case->slug }}">
                </div>
                <div class="form-group">
                    <label for="list_name">Название в списке*</label>
                    <input type="text" class="form-control" id="list_name" name="list_name" value="{{ $case->list_name }}">
                </div>
                <div class="form-group">
                    <label for="post_name">Название на детальной странице*</label>
                    <input type="text" class="form-control" id="post_name" name="post_name" value="{{ $case->post_name }}">
                </div>
                <div class="form-group">
                    <label for="type">Тип</label>
                    <select class="form-control" name="type" id="type">
                        <option value="default" @if($case->type == 'default') selected @endif>Обычный</option>
                        <option value="bgYellow" @if($case->type == 'bgYellow') selected @endif>Желтый фон</option>
                        <option value="double" @if($case->type == 'double') selected @endif>Двойной</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="author_id">Автор*</label>
                    <select class="form-control" name="author_id" id="author_id">
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}" @if($case->author_id == $author->id) selected @endif>{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="text">Текст</label>
                    <textarea id="text" name="text" rows="3">{{ $case->text ?? '' }}</textarea>
                </div>

                <!-- Цвет фона и текста -->
                <div class="form-group">
                    <label for="bg_color">Цвет фона</label>
                    <input type="color" class="form-control my-colorpicker1 colorpicker-element" name="bg_color" value="{{ $case->bg_color ?? '' }}">
                </div>
                <div class="form-group">
                    <label for="text_color">Цвет текста</label>
                    <input type="color" class="form-control my-colorpicker2 colorpicker-element" name="text_color" value="{{ $case->text_color ?? '' }}">
                </div>

                <div class="form-group">
                    <label for="tags">Теги</label>
                    @foreach($tags as $tag)
                        <div class="form-check">
                            <input id="tag_{{$tag->id}}" @if(in_array($tag->id, $caseTags)) checked @endif class="form-check-input" value="{{$tag->id}}" name="tags[]" type="checkbox">
                            <label for="tag_{{$tag->id}}" class="form-check-label">{{$tag->name}}</label>
                        </div>
                    @endforeach
                </div>

                <!-- Изображения -->
                <div class="border mt-2 p-2">
                    <img src="{{ $case->logo }}" width="100px" alt="Логотип">
                    <div class="form-group mt-2">
                        <label for="logo">Логотип</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="logo" class="custom-file-input" id="logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border mt-2 p-2">
                    <img src="{{ $case->list_img }}" width="100px">
                    <div class="form-group mt-2">
                        <label for="list_img">Изображение в списке</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="list_img" class="custom-file-input" id="list_img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border mt-2 p-2">
                    <img src="{{ $case->img }}" width="100px">
                    <div class="form-group mt-2">
                        <label for="img">Изображение на детальной странице</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="img">
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
                            <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $case->seo?->meta_title ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea class="form-control" id="meta_description" name="meta_description" rows="3">{{ $case->seo?->meta_description ?? '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ $case->seo?->meta_keywords ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="canonical">Canonical URL</label>
                            <input type="text" class="form-control" id="canonical" name="canonical" value="{{ $case->seo?->canonical ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_title">OG Title</label>
                            <input type="text" class="form-control" id="og_title" name="og_title" value="{{ $case->seo?->og_title ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_description">OG Description</label>
                            <textarea class="form-control" id="og_description" name="og_description" rows="3">{{ $case->seo?->og_description ?? '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="og_url">OG URL</label>
                            <input type="text" class="form-control" id="og_url" name="og_url" value="{{ $case->seo?->og_url ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_type">OG Type</label>
                            <input type="text" class="form-control" id="og_type" name="og_type" value="{{ $case->seo?->og_type ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_site_name">OG Site Name</label>
                            <input type="text" class="form-control" id="og_site_name" name="og_site_name" value="{{ $case->seo?->og_site_name ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image">OG Image</label>
                            <input type="text" class="form-control" id="og_image" name="og_image" value="{{ $case->seo?->og_image ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image_type">OG Image Type</label>
                            <input type="text" class="form-control" id="og_image_type" name="og_image_type" value="{{ $case->seo?->og_image_type ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image_width">OG Image Width</label>
                            <input type="number" class="form-control" id="og_image_width" name="og_image_width" value="{{ $case->seo?->og_image_width ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image_height">OG Image Height</label>
                            <input type="number" class="form-control" id="og_image_height" name="og_image_height" value="{{ $case->seo?->og_image_height ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="vk_image">VK Image</label>
                            <input type="text" class="form-control" id="vk_image" name="vk_image" value="{{ $case->seo?->vk_image ?? '' }}">
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
