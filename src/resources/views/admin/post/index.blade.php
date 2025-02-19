@extends('layouts.admin')
@section('title', 'Статьи')
@section('content')
    <a href="{{route('admin.post.create')}}" class="btn btn-primary">Добавить</a>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>ID</th>
                <th>Фото в списке</th>
                <th>Название в списке</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img src="{{$item->list_img}}" width="100px" alt="Faros media"></td>
                    <td>{{$item->list_name}}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{route('admin.post.edit', $item->id)}}" class="btn btn-warning">Изменить</a>
                            <form action="{{route('admin.post.destroy', $item->id)}}" method="POST">
                                @method("delete")
                                @csrf
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Вы уверены, что хотите удалить эту запись?')">Удалить</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
