@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')
    <h1>Data Buku</h1>

    <form method="GET" action="{{ route('books.index') }}">
    <input
        type="search"
        name="q"
        value="{{ $keyword }}"
        placeholder="Cari judul, penulis, atau ISBN"
    >
    <button type="submit">Cari</button>
    <a href="{{ route('books.index') }}">Reset</a>
</form>


    <ol start="{{ $books->firstItem() }}">
        @forelse ($books as $book)
            <br>
            <li>
                <strong>{{ $book->title }}</strong> — {{ $book->author }} (Stok: {{ $book->stock }})
                <br>
                <a href="{{ route('books.show', $book) }}">Detail</a>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="{{ route('books.edit', $book) }}">Edit</a>
                
                
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <form method="POST" action="{{ route('books.destroy', $book) }}" style="display: inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                
            </li>
        @empty
            <br>
            <li style="list-style-type: none;">Data belum tersedia.</li>
        @endforelse
    </ol>

    <br>
    
    @if ($books->hasPages())
        <nav>
            @if ($books->onFirstPage())
                <span>Sebelumnya</span>
            @else
                <a href="{{ $books->previousPageUrl() }}">Sebelumnya</a>
            @endif

            &nbsp;&nbsp;
            <span>
                Halaman {{ $books->currentPage() }} dari {{ $books->lastPage() }}
            </span>
            &nbsp;&nbsp;

            @if ($books->hasMorePages())
                <a href="{{ $books->nextPageUrl() }}">Berikutnya</a>
            @endif
        </nav>
    @endif
@endsection
