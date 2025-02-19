@extends('layouts.admin')
@section('title', 'Изменить статью')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Изменить статью</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('admin.post.update', $post->id)}}" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}">
                </div>
                <div class="form-group">
                    <label for="list_name">Название в списке*</label>
                    <input type="text" class="form-control" id="list_name" name="list_name" value="{{ $post->list_name }}">
                </div>
                <div class="form-group">
                    <label for="post_name">Название на детальной странице*</label>
                    <input type="text" class="form-control" id="post_name" name="post_name" value="{{ $post->post_name }}">
                </div>
                <div class="form-group">
                    <label for="author_id">Автор*</label>
                    <select class="form-control" name="author_id" id="author_id">
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}" @if($post->author_id) == $author->id) selected @endif>{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="pre_title">Подзаголовок</label>
                    <textarea class="form-control d-none text-edit" id="pre_title" name="pre_title" rows="3">{{ $post->pre_title }}</textarea>
                    <div id="code-editor"></div>
                </div>

                <div class="form-group">
                    <label for="content">Содержание статьи</label>
                    <textarea class="form-control d-none text-edit" id="content" name="content" rows="3">{{ $post->content }}</textarea>
                    <div id="code-editor"></div>
                </div>

                <!-- Изображения -->
                <div class="border mt-2 p-2">
                    <div class="form-group mt-2">
                        <label for="list_img">Изображение в списке</label>
                        <img src="{{$post->list_img}}" title="Faros Media" width="100px" alt="Faros media">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="list_img" class="custom-file-input" id="list_img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border mt-2 p-2">
                    <div class="form-group mt-2">
                        <label for="img">Изображение на детальной странице</label>
                        <img src="{{$post->img}}" title="Faros Media" width="100px" alt="Faros media">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="img">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="category_id">Категория*</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if($post->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tags">Теги</label>
                    @php $postTags = $post->tags?->pluck('id')->all() @endphp
                    @foreach($tags as $tag)
                        <div class="form-check">
                            <input id="tag_{{$tag->id}}" @if($postTags != null && in_array($tag->id, $postTags)) checked @endif class="form-check-input" value="{{$tag->id}}" name="tags[]" type="checkbox">
                            <label for="tag_{{$tag->id}}" class="form-check-label">{{$tag->name}}</label>
                        </div>
                    @endforeach
                </div>

                <!-- Настройки SEO -->
                @include('admin.seo', ['post' => $post])
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
            new FroalaEditor('.text-edit', {
                language: 'ru', // Язык (русский)
                heightMin: 300, // Минимальная высота редактора
                //toolbarButtons: ['bold', 'italic', 'formatOL', 'formatUL', 'h2'], // Ограничиваем инструменты
            });
        });
    </script>
@endsection
