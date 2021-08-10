@extends('layouts.admin')
@section('title')Создание диктанта@endsection
@section('content')
<div class="container">
    <form action="{{route('admin.dict.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="title" class="form-label">Название</label>
            <input value="{{old('title')}}" type="text" class="form-control" id="title" name="title" placeholder="Название">
            @error('title')
                <p class='text-danger'>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Содержимое</label>
            <textarea class="form-control" id="description" name="description" placeholder="Содержимое">{{old('description')}}</textarea>
            @error('description')
                <p class='text-danger'>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Ссылка</label>
            <input value="{{old('url')}}" type="text" class="form-control" id="url" name="url" placeholder="Ссылка">
            @error('url')
            <p class='text-danger'>{{$message}}</p>
        @enderror
        </div>
        <div class="mb-3">
            <label for="date_of_start" class="form-label">Дата начала</label>
            <input value="{{old('date_of_start')}}" type="text" class="form-control" id="date_of_start" name="date_of_start" placeholder="Дата начала">
            @error('date_of_start')
            <p class='text-danger'>{{$message}}</p>
        @enderror
        </div>
        <div class="mb-3">
            <label for="date_of_end" class="form-label">Дата окончания</label>
            <input value="{{old('date_of_end')}}" type="text" class="form-control" id="date_of_end" name="date_of_end" placeholder="Дата окончания">
            @error('date_of_end')
            <p class='text-danger'>{{$message}}</p>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection 