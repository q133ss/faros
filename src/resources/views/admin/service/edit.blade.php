@extends('layouts.admin')
@section('title', 'Изменить услугу')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Изменить услугу</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('admin.service.update', $service->id)}}" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $service->slug }}">
                </div>
                <div class="form-group">
                    <label for="list_name">Название</label>
                    <input type="text" class="form-control" id="list_name" name="name" value="{{ $service->name }}">
                </div>
                <div class="form-group">
                    <label for="post_name">Подзаголовок</label>
                    <input type="text" class="form-control" id="post_name" name="subtitle" value="{{ $service->subtitle }}">
                </div>

                <div class="form-group">
                    <label for="text">Короткое описание</label>
                    <textarea class="form-control d-none" id="text" name="short_description" rows="3">{{ $service->short_description }}</textarea>
                    <div id="code-editor"></div>
                </div>

                <!-- Цвет фона и текста -->
                <div class="form-group">
                    <label for="bg_color">Цвет фона</label>
                    <input type="color" class="form-control my-colorpicker1 colorpicker-element" name="bg_color" value="{{ $service->bg_color }}">
                </div>

                <!-- Изображения -->
                <div class="border mt-2 p-2">
                    <div class="form-group mt-2">
                        <label for="list_img">Изображение</label>
                        <br>
                        <img src="{{$service->img}}" width="100px" alt="Faros media">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="list_img">
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
                            <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $service->seo?->meta_title ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea class="form-control" id="meta_description" name="meta_description" rows="3">{{ $service->seo?->meta_description ?? '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ $service->seo?->meta_keywords ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="canonical">Canonical URL</label>
                            <input type="text" class="form-control" id="canonical" name="canonical" value="{{ $service->seo?->canonical ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_title">OG Title</label>
                            <input type="text" class="form-control" id="og_title" name="og_title" value="{{ $service->seo?->og_title ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_description">OG Description</label>
                            <textarea class="form-control" id="og_description" name="og_description" rows="3">{{ $service->seo?->og_description ?? '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="og_url">OG URL</label>
                            <input type="text" class="form-control" id="og_url" name="og_url" value="{{ $service->seo?->og_url ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_type">OG Type</label>
                            <input type="text" class="form-control" id="og_type" name="og_type" value="{{ $service->seo?->og_type ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_site_name">OG Site Name</label>
                            <input type="text" class="form-control" id="og_site_name" name="og_site_name" value="{{ $service->seo?->og_site_name ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image">OG Image</label>
                            <input type="text" class="form-control" id="og_image" name="og_image" value="{{ $service->seo?->og_image ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image_type">OG Image Type</label>
                            <input type="text" class="form-control" id="og_image_type" name="og_image_type" value="{{ $service->seo?->og_image_type ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image_width">OG Image Width</label>
                            <input type="number" class="form-control" id="og_image_width" name="og_image_width" value="{{ $service->seo?->og_image_width ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image_height">OG Image Height</label>
                            <input type="number" class="form-control" id="og_image_height" name="og_image_height" value="{{ $service->seo?->og_image_height ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="vk_image">VK Image</label>
                            <input type="text" class="form-control" id="vk_image" name="vk_image" value="{{ $service->seo?->vk_image ?? '' }}">
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
