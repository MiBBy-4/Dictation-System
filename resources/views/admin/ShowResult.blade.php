@extends('layouts.admin')
@section('title')Диктанты {{$user->name}}@endsection
@section('content')
<div class="container">
    <h1 class="text-center text-muted mt-4">
        Диктанты {{$user->name}}
    </h1>
    <div>
        <h4 class="text-muted">Email: {{$user->email}}</h4>
        @foreach ($dicts as $dict)
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
                    {{$dict->content}}
                  </div>
                  <div class="card-footer">
                    Дата создания: {{$dict->created_at}}
                  </div>
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
        </section>
        @endforeach
    </div>
</div>
@endsection