@extends('layouts.admin')
@section('title'){{$user->name}}@endsection
@section('content')
<div class="container mb-4">
    <h1 class="text-center text-muted mt-2">{{$user->name}}</h1>
</div>
<div class="container mt-4">
    <h3 class="text-muted ">Email: {{$user->email}}</h3>
    <h3 class="text-muted ">Зарегистрирован: {{$user->created_at}}</h3>
    <form action="{{route('admin.user.destroy', $user->id)}}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" class="btn btn-block bg-gradient-danger btn-lg" value="Удалить">
    </form>
</div>

    


@endsection