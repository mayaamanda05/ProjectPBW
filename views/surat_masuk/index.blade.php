@extends('layout/main')

@section('title', 'Daftar Surat Masuk')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">    
                <h2 class="mt-3">Arsip Surat Masuk</h1>

                <a href="/surat_masuk/create" class="btn btn-primary my-2">Add</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                <ul class="list-group">
                    @foreach( $suratmasuks as $suratmasuk)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $suratmasuk->judul }}
                        <a href="/surat_masuk/{{ $suratmasuk->id}}" class="btn btn-primary">View</a>

                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection