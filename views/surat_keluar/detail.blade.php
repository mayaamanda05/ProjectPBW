@extends('layout/main')

@section('title', 'Detail Surat')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">    
                <h1 class="mt-3">Daftar Surat Keluar</h1>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-text">{{ $suratkeluar->no_surat }}</h5>
                        <h6 class="card-text">{{ $suratkeluar->judul }}</h6>
                        <p class="card-text">{{ $suratkeluar->pengirim }}</p>
                        <p class="card-text">{{ $suratkeluar->tanggal_keluar }}</p>

                        <a href="{{ $suratkeluar->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/surat_keluar/{{ $suratkeluar->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" style="margin-left: 10px;">Delete</button>
                        </form>
                        <a href="/surat_masuk" class="card-link" style="letter-spacing: 2px; margin-left: 10px;">Back</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection