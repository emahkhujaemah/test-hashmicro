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

                <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <?php 
                                    $input1 = "ABBCD";
                                    $input2 = "Gallant Duct";

                                    $input1LowerCase = strtolower($input1);
                                    $input2LowerCase = strtolower($input2);
                                    $char1 = similar_text($input1LowerCase, $input2LowerCase);
                                ?>

                                <h4>Kalimat 1 : {{$input1}} </h4>
                                <h4>Kalimat 2 : {{$input2}} </h4>
                                
                                <br>
                                <?php
                                    $char2 = strlen($input1);
                                    // echo "Jumlah Huruf Pertama : ".$char2;
                                ?>
                                <h5>Jumlah Huruf Pertama : {{$char1}}</h5>
                                <h5>Jumlah Huruf Pertama : {{$char2}}</h5>
                                <br>
                                <?php
                                    $sameCharPersen = round($char1/$char2 * 100, 2);
                                    // echo "Hasilnya ". $sameCharPersen ."%";    
                                ?>
                                <h6>Hasilnya {{$sameCharPersen}}%</h6>
                            </div>
                        </div>
                        
                </div>
            


            </div>
        </div>
    </div>
@stop