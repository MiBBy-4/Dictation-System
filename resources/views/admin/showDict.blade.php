@extends('layouts.admin')
@section('title'){{$dict->title}}@endsection
@section('content')
<div class="container mb-4">
    <h1 class="text-center text-muted mt-2">{{$dict->title}}</h1>
</div>
<div class="container mt-4">
    <h3 class="text-muted ">Ссылка: {{$dict->url}}</h3>
    <h3 class="text-muted mt-4">Статус: 
        @if ($dict->status)
            <span class="text-success">Активен</span> 
        @else
        <span class="text-danger">Неактивен</span> 
        @endif    
    </h3>
    <h3 class="text-muted mt-4">Текст: 
        <p>
        {{$dict->description}}
        </p>
    </h3>
    <h3 class="text-muted mt-4">Дата начала: {{$dict->date_of_start}}</h3>
    <h3 class="text-muted mt-4">Дата окончания: {{$dict->date_of_end}}</h3>
</div>
<div class="container">
    <a href="{{route('admin.dict.edit', $dict->id)}}" class="btn  btn-secondary d-flex justify-content-md-center mt-4">Изменить</a>
</div>




@endsection