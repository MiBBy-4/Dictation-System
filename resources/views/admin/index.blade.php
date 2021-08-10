@extends('layouts.admin')
@section('title')Пользователи@endsection
@section('content')
<div class="container">
    <h1 class="text-center text-muted mt-2">Пользователи</h1>
    <div class="container d-flex justify-content-md-center mt-4">
        <form action="{{route('admin.dict.index')}}" method="get">
            @csrf
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="search_field" class="form-control float-right" placeholder="Поиск" @if(isset($_GET['search_field'])) value="{{$_GET['search_field']}}" @endif>
    
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
            </div>
        </form>
    </div>
   
    <div class="mt-4">
        @foreach ($users as $user)
            <div class="conteiner-fluid text-center"><a href="{{route('admin.user.show', $user->id)}}" class="btn text-muted">{{$user->name}}</a></div>
        @endforeach
    </div>
</div>
<div class="container d-flex justify-content-md-center mt-4">
    {{$users->appends($_GET)->links()}}
</div>
@endsection
