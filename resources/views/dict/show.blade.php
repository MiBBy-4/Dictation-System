@extends('layouts.head')
@section('title')Ваши диктанты@endsection
@section('content')
@include('includes.dict.navbar')
      @foreach ($dict as $d)
      <section class="content mt-4">

        <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">{{$d->title}}</h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body" style="display: block;">
                  {{$d->content}}
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
      @endforeach
@endsection