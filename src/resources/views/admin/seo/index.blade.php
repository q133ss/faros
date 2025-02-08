@extends('layouts.admin')
@section('title', 'СЕО')
@section('content')
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>ID</th>
                <th>Ссылка</th>
                <th>Изменить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><a href="{{$item->seable_id}}" target="_blank">{{$item->seable_id}}</a></td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{route('admin.seo.edit', $item->id)}}" class="btn btn-warning">Изменить</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
