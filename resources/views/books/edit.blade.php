@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h1>Edit Buku</h1>

    <form method="POST" action="{{ route('books.update', $book) }}">
        @csrf
        @method('PUT')
        
        @include('books._form', ['book' => $book])

        <button type="submit">Perbarui</button>
    </form>
@endsection
