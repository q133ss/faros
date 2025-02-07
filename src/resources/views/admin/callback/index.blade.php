@extends('layouts.admin')
@section('title', 'Заявки')
@section('content')
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Телефон</th>
                <th>Сайт/Компания</th>
                <th>Тип услуги</th>
                <th>Проблема</th>
            </tr>
            </thead>
            <tbody>
            @foreach($callbacks as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->site}}</td>
                <td>{{$item->getService()}}</td>
                <td>{{$item->getProblem()}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
