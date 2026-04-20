<div>
    <h2>DAFTAR BUKU</h2>

    @foreach ($user->books as book)
    <div>
        Judul Buku : {{ $book->title }}
    </div>
    @endforeach
</div>