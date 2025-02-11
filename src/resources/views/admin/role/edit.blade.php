@extends('layouts.admin')
@section('title', 'Изменить роль')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Изменить роль</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('admin.role.update', $role->id)}}" enctype="multipart/form-data">
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
                <div class="form-group">
                    <label for="tags">Доступы</label>
                    @php
                        $permissions = [];
                        if($role->permissions != null){
                            foreach($role->permissions?->permissions as $permission) {
                                $permissions[] = $permission;
                            }
                        }
                    @endphp
                    @foreach($role::PERMISSIONS as $permission => $name)
                        <div class="form-check">
                            <input id="{{$permission}}" @if(in_array($permission, $permissions)) checked @endif class="form-check-input" value="{{$permission}}" name="permissions[]" type="checkbox">
                            <label for="{{$permission}}" class="form-check-label">{{$name}}</label>
                        </div>
                    @endforeach
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
            new FroalaEditor('.text-edit', {
                language: 'ru', // Язык (русский)
                heightMin: 300, // Минимальная высота редактора
                //toolbarButtons: ['bold', 'italic', 'formatOL', 'formatUL', 'h2'], // Ограничиваем инструменты
            });
        });
    </script>
@endsection
