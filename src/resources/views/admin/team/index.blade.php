@extends('layouts.admin')
@section('title', 'Команда')
@section('content')
    <a href="{{route('admin.team.create')}}" class="btn btn-primary">Добавить</a>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>ID</th>
                <th>Фото</th>
                <th>Имя</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($team as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img src="{{$item->img}}" width="100px" alt="Faros media"></td>
                    <td>{{$item->name}}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{route('admin.team.edit', $item->id)}}" class="btn btn-warning">Изменить</a>
                            <form action="{{route('admin.team.destroy', $item->id)}}" method="POST">
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
