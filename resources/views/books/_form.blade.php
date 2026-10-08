<label for="title">Judul Buku</label><br>
<input
    type="text"
    id="title"
    name="title"
    value="{{ old('title', $book->title ?? '') }}"
>
@error('title')
    <br><small>{{ $message }}</small>
@enderror

<br><br>

<label for="isbn">ISBN</label><br>
<input
    type="text"
    id="isbn"
    name="isbn"
    value="{{ old('isbn', $book->isbn ?? '') }}"
>
@error('isbn')
    <br><small>{{ $message }}</small>
@enderror

<br><br>

<label for="author">Penulis</label><br>
<input
    type="text"
    id="author"
    name="author"
    value="{{ old('author', $book->author ?? '') }}"
>
@error('author')
    <br><small>{{ $message }}</small>
@enderror

<br><br>

<label for="price">Harga</label><br>
<input
    type="number"
    id="price"
    name="price"
    value="{{ old('price', $book->price ?? '') }}"
>
@error('price')
    <br><small>{{ $message }}</small>
@enderror

<br><br>

<label for="stock">Stok</label><br>
<input
    type="number"
    id="stock"
    name="stock"
    value="{{ old('stock', $book->stock ?? '') }}"
>
@error('stock')
    <br><small>{{ $message }}</small>
@enderror

<br><br>
