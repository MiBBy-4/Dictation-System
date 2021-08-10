@extends('layouts.admin')
@section('title'){{$dict->title}}@endsection
@section('content')
<div class="container">
    <form action="{{route('admin.update', $dict)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Название</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Название" value="{{$dict->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Содержимое</label>
            <textarea rows="6" class="form-control" id="description" name="description" placeholder="Содержимое">{{$dict->description}}</textarea>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label>Статус:</label>
                <select class="custom-select" name="status" id="status">
                  <option value="1">Активный</option>
                  <option value="0">Неактивный</option>
                </select>
              </div>
        </div>
        
        <div class="mb-3">
            <div class="form-group">
                <label for="date_of_start" class="form-label">Дата начала</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"  name="date_of_start" placeholder="Дата окончания" value="{{$dict->date_of_start}}">
                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
              </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="date_of_end" class="form-label">Дата окончания</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"  name="date_of_end" value="{{$dict->date_of_end}}">
                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
              </div>
        </div>
        {{-- <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        </div> --}}
        <button type="submit" class="btn  btn-secondary d-flex justify-content-md-center mt-4">Изменить</button> 
    </form>
</div>
@endsection