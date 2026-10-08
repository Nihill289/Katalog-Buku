@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h1>Tambah Buku</h1>

    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        
        @include('books._form')

        <button type="submit">Simpan</button>
    </form>
@endsection
