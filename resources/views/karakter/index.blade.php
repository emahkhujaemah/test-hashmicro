@extends('adminlte::page')

@section('title', 'Karakter')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
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
                            <div class="col-lg-6">
                                {{-- <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="L" >Laki-Laki</option>
                                        <option value="P" >Perempuan</option>
                                    </select>                 
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No Hp</label>
                                    <input name="no_hp" class="form-control" value="{{old('no_hp')}}">
                                    <div class="text-danger">
                                        @error('no_hp')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_ibu">Nama Ibu</label>
                                    <input name="nama_ibu" class="form-control" value="{{old('nama_ibu')}}">
                                    <div class="text-danger">
                                        @error('nama_ibu')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sekolah_asal">Sekolah Asal</label>
                                    <input name="sekolah_asal" class="form-control" value="{{old('sekolah_asal')}}">
                                    <div class="text-danger">
                                        @error('sekolah_asal')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_sekolah">Alamat Sekolah</label>
                                    <input name="alamat_sekolah" class="form-control" value="{{old('alamat_sekolah')}}">
                                    <div class="text-danger">
                                        @error('alamat_sekolah')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div> --}}
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
