@extends('layouts.admin')
@section('title')Результаты диктантов@endsection
@section('content')
{{-- <div class="container">
    <div class="input-group mb-3">
        <input type="text" class="form-control rounded-0" placeholder="Поиск">
        <span class="input-group-append">
          <button type="button" class="btn btn-info btn-flat">Go!</button>
        </span>
      </div>
    <h1 class="text-muted text-center ">Выберите пользователя</h1>
    <p class="text-muted mb-4 text-center">Для просмотра результатов диктанта, необходимо выбрать пользователя:</p>
    @foreach ($users as $user)
        <div class="conteiner-fluid text-center"><a href="{{route('admin.result.show', $user->id)}}" class="btn text-muted text-center">{{$user->name}}</a></div>
    @endforeach
</div> --}}
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Результаты диктантов</h3>

          <div class="card-tools">
              <form action="{{route('admin.userDictations.index')}}" method="get">
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
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>Название диктанта</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Текст</th>
                <th>Дата написания</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              @foreach ($dicts as $dict)
              @if ($user->id === $dict->user_id)
                <tr>
                  <td>{{$dict->title}}</td> 
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td><textarea name="content"rows="3">{{$dict->content}}</textarea></td>
                  <td>{{$dict->created_at}}</td>
                </tr>
              @endif
              @endforeach
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  
<div class="container d-flex justify-content-md-center mt-4">
    {{$users->appends($_GET)->links()}}
</div>
</div>

@endsection