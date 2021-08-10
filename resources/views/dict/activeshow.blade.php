@extends('layouts.head')
@section('title')Активный диктант@endsection
@section('content')
@include('includes.dict.navbar')

<div class="container-fluid">
    @if ($dict===null)
            <h1 class="text-center text-danger mt-4">На данный момент нет диктантов для написания</h1>
    @else
    <section class="content mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">{{$dict->title}}</h3>
    
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    </div>
                    <div class="card-body" style="display: block;">
                    {{$dict->description}}
                    </div>
                </div>
                <!-- /.card -->
                </div>
            </div>
        </div>
        
    </section>
    @endif
</div>
@endsection