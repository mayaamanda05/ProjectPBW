@extends('layout/main')

@section('title', 'Form Tambah Data')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">    
                <h1 class="mt-3">Surat Keluar</h1>

                <form method="post" action="/surat_masuk">
                    @csrf
                    <div class="form-group">
                        <label for="no_surat">No Surat</label>
                        <input type="text" class="form-control @error('no_surat') is-invalid @enderror" id="no_surat" placeholder="masukkan no surat" name="no_surat" autocomplete="off" value="{{ old('no_surat')}}">
                            @error('no_surat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="masukkan judul surat" name="judul" autocomplete="off" value="{{ old('judul')}}">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="pengirim">Pengirim</label>
                        <input type="text" class="form-control @error('pengirim') is-invalid @enderror" id="pengirim" placeholder="masukkan nama pengirim"  name="pengirim" autocomplete="off" value="{{ old('pengirim')}}">
                        @error('pengirim')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                     <div class="form-group">
                        <label for="tanggal_keluar">Tanggal Keluar</label>
                        <input type="text" class="form-control @error('tanggal_keluar') is-invalid @enderror" id="tanggal_keluar" placeholder="masukkan tanggal masuk surat ex. 31-01-2021"  name="tanggal_keluar" autocomplete="off" value="{{ old('tanggal_keluar')}}">
                        @error('tanggal_keluar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                        

                    <button type="submit" class="btn btn-primary mt-5">Add</button>
                    
                </form>
                    

            </div>
        </div>
    </div>
@endsection