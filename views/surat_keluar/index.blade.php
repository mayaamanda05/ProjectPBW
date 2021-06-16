@extends('layout/main')

@section('title', 'Daftar Surat Keluar')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">    
                <h2 class="mt-3">Arsip Surat Keluar</h1>

                <a href="/surat_masuk/create" class="btn btn-primary my-2">Add</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                <ul class="list-group">
                    @foreach( $suratkeluars as $suratkeluar)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $suratkeluar->judul }}
                        <a href="/surat_masuk/{{ $suratkeluar->id}}" class="btn btn-primary">View</a>

                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection