@extends('layouts.admin')
@section('title')Диктанты@endsection
@section('content')
<div class="container">
    <h1 class="text-center text-muted mt-2">Список диктантов</h1>
    <div class="mt-4">
        @foreach ($dicts as $dict)
            <div class="conteiner-fluid text-center"><a href="{{route('admin.dictation.show', $dict->id)}}" class="btn text-muted">{{$dict->title}}</a></div>
        @endforeach
    </div>
</div>

<div class="container d-flex justify-content-md-center mt-4">
    {{$dicts->appends($_GET)->links()}}
</div>
<div class="container">
    <a href="{{route('admin.dict.create')}}" class="btn  btn-secondary d-flex justify-content-md-center mt-4">Создать диктант</a>
</div>
@endsection
