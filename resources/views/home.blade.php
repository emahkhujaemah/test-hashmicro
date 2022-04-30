@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>1</h3>

            <p>Users</p>
          </div>
          <div class="icon">
            <i class="fas fa-fw fa-user"></i>
          </div>
          <a href="/users" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>3</h3>
            <p>Feature 1</p>
          </div>
          <div class="icon">
            <i class="ion fas fa-fw fa-th"></i>
          </div>
          <a href="/nested" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>1</h3>
            <p>Feature 2</p>
          </div>
          <div class="icon">
            <i class="fas fa-fw fa-file"></i>
          </div>
          <a href="/karakter" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->

    {{-- <div class="row m-4">
      <div class="col-lg">
        <div  class="text-center"> 
          <img src="{{asset('img/madrasah.png')}}" class="img-fluid" alt="Madrasah" style="height:320px;">
      </div>
      </div>
    </div> --}}

  </section>
@stop
