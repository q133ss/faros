@extends('layouts.admin')
@section('title', 'Изменить СМИ')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Изменить СМИ</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('admin.seo.update', $post->id)}}" enctype="multipart/form-data">
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
                <!-- Настройки SEO -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5 class="card-title">Настройки SEO</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $post->meta_title ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea class="form-control" id="meta_description" name="meta_description" rows="3">{{ $post->meta_description ?? '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ $post->meta_keywords ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="canonical">Canonical URL</label>
                            <input type="text" class="form-control" id="canonical" name="canonical" value="{{ $post->canonical ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_title">OG Title</label>
                            <input type="text" class="form-control" id="og_title" name="og_title" value="{{ $post->og_title ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_description">OG Description</label>
                            <textarea class="form-control" id="og_description" name="og_description" rows="3">{{ $post->og_description ?? '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="og_url">OG URL</label>
                            <input type="text" class="form-control" id="og_url" name="og_url" value="{{ $post->og_url ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_type">OG Type</label>
                            <input type="text" class="form-control" id="og_type" name="og_type" value="{{ $post->og_type ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_site_name">OG Site Name</label>
                            <input type="text" class="form-control" id="og_site_name" name="og_site_name" value="{{ $post->og_site_name ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image">OG Image</label>
                            <input type="text" class="form-control" id="og_image" name="og_image" value="{{ $post->og_image ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image_type">OG Image Type</label>
                            <input type="text" class="form-control" id="og_image_type" name="og_image_type" value="{{ $post->og_image_type ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image_width">OG Image Width</label>
                            <input type="number" class="form-control" id="og_image_width" name="og_image_width" value="{{ $post->og_image_width ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="og_image_height">OG Image Height</label>
                            <input type="number" class="form-control" id="og_image_height" name="og_image_height" value="{{ $post->og_image_height ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="vk_image">VK Image</label>
                            <input type="text" class="form-control" id="vk_image" name="vk_image" value="{{ $post->vk_image ?? '' }}">
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
