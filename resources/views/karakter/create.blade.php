@extends('adminlte::page')

@section('title', 'Karakter')

@section('content_header')
    <h1 class="m-0 text-dark">Feature 2</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                {{-- <div class="card-body">
                    <form action="/santri" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="rows">Input Huruf 1</label>
                                    <input name="rows" class="form-control" value="{{old('rows')}}"
                                    >
                                    <div class="text-danger">
                                        @error('rows')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="columns">Input Huruf 1</label>
                                    <input name="columns" class="form-control" value="{{old('columns')}}">
                                    <div class="text-danger">
                                        @error('columns')
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
                </div> --}}
            

            </div>
        </div>
    </div>
@stop
