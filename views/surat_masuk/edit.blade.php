@extends('layout/main')

@section('title', 'Form Ubah Data')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">    
                <h1 class="mt-3">Update Surat Masuk</h1>

                <form method="post" action=" /surat_masuk/{{$suratmasuk->id}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="no_surat">No Surat</label>
                        <input type="text" class="form-control @error('no_surat') is-invalid @enderror" id="no_surat" placeholder="Masukkan no_surat" name="no_surat" autocomplete="off" value="{{ $suratmasuk->no_surat }}">
                            @error('no_surat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Masukkan judul" name="judul" autocomplete="off" value="{{ $suratmasuk->judul }}">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="pengirim">Pengirim</label>
                        <input type="text" class="form-control @error('pengirim') is-invalid @enderror" id="pengirim" placeholder="Masukkan nama pengirim"  name="pengirim" autocomplete="off" value="{{ $suratmasuk->pengirim }}">
                        @error('pengirim')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input type="text" class="form-control @error('tanggal_masuk') is-invalid @enderror" id="tanggal_masuk" placeholder="Tambahkan tanggal masuk surat"  name="tanggal_masuk" autocomplete="off" value="{{ $suratmasuk->tanggal_masuk }}">
                        @error('tanggal_masuk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                        

                    <button type="submit" class="btn btn-primary mt-5">Update</button>
                    
                </form>
                    

            </div>
        </div>
    </div>
@endsection