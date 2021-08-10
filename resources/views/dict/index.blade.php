@extends('layouts.head')
@section('title')Диктант@endsection
@section('content')
    @include('includes.dict.navbar')
    @guest
        <div class="container">
            <h4 class="text-muted mt-4">{{$date}}</h4>
            <h2 class="text-muted mt-2">Тотальный диктант</h2>
        </div>
        <div class="container">
            <p class="text-danger mb-0">ВНИМАНИЕ!</p><p>Для написания диктанта необходимо авторизоваться!</p>
            <div class="row">
                <div class="col-sm-6">
                    <form action="{{route('dict.store')}}" method="POST">
                        @csrf
                        {{-- @error('content')
                            <p class='text-danger'>{{$message}}</p>
                        @enderror --}}
                        <textarea name="content" rows="10" placeholder="Печатайте текст здесь" class="form-control" disabled></textarea>
                        <div class="container d-flex justify-content-end">
                            <button type="submit" class="btn btn-dark mt-2 disabled" disabled>Отправить</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div class="container">
                        <div class="ratio ratio-21x9">
                            <iframe width="360" height="215" src="{{$url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        @if (!auth()->user()->isWritted)
            @if(!$dict == null)
            <div class="container">
                <h4 class="text-muted mt-4">{{$date}}</h4>
                <h2 class="text-muted mt-2">Тотальный диктант</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="{{route('dict.store')}}" method="POST">
                            @csrf
                            @error('content')
                                <p class='text-danger'>{{$message}}</p>
                            @enderror
                            <textarea name="content" rows="10" placeholder="Печатайте текст здесь" class="form-control"></textarea>
                            <div class="container d-flex justify-content-end">
                                <button type="submit" class="btn btn-dark mt-2">Отправить</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <div class="container">
                            <div class="ratio ratio-21x9">
                                <iframe width="360" height="215" src="{{$url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="container">
                <h4 class="text-muted mt-4">{{$date}}</h4>
                <h2 class="text-muted mt-2">Тотальный диктант</h2>
            </div>
            <div class="container">
                <p class="text-danger mb-0">ВНИМАНИЕ!</p><p>В данное время диктантов нет!</p>
                <div class="row">
                    <div class="col-sm-6">
                        <form action="{{route('dict.store')}}" method="POST">
                            @csrf
                            {{-- @error('content')
                                <p class='text-danger'>{{$message}}</p>
                            @enderror --}}
                            <textarea name="content" rows="10" placeholder="Печатайте текст здесь" class="form-control" disabled></textarea>
                            <div class="container d-flex justify-content-end">
                                <button type="submit" class="btn btn-dark mt-2 disabled" disabled>Отправить</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <div class="container">
                            <div class="ratio ratio-21x9">
                                <iframe width="360" height="215" src="{{$url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
       
        @else
        <div class="container">
            <h4 class="text-muted mt-4">{{$date}}</h4>
            <h2 class="text-muted mt-2">Тотальный диктант</h2>
        </div>
        <div class="container">
            <p class="text-success mb-0">ВНИМАНИЕ!</p><p>Данный диктант уже написан Вами!</p>
            <div class="row">
                <div class="col-sm-6">
                    <form action="{{route('dict.store')}}" method="POST">
                        @csrf
                        {{-- @error('content')
                            <p class='text-danger'>{{$message}}</p>
                        @enderror --}}
                        <textarea name="content" rows="10" placeholder="Печатайте текст здесь" class="form-control" disabled></textarea>
                        <div class="container d-flex justify-content-end">
                            <button type="submit" class="btn btn-dark mt-2 disabled" disabled>Отправить</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div class="container">
                        <div class="ratio ratio-21x9">
                            <iframe width="360" height="215" src="{{$url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
    @endguest
    
@endsection