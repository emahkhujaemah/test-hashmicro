@extends('adminlte::page')

@section('title', 'Karakter')

@section('content_header')
    <h1 class="m-0 text-dark">Feature 2</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">

                <div class="card-body">
                    <form action="/karakter" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="input1">Input Huruf 1</label>
                                    <input name="input1" class="form-control" value="{{old('input1')}}"
                                    >
                                    <div class="text-danger">
                                        @error('input1')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input2">Input Huruf 2</label>
                                    <input name="input2" class="form-control" value="{{old('input2')}}">
                                    <div class="text-danger">
                                        @error('input2')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                            
                            
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary float-right floa">Simpan</button>
                        </div>
                    </form>        
                </div>
            

            </div>
        </div>
    </div>
@stop
