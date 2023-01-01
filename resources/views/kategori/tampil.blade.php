@extends("blank")

@section("konten")

<h1>Tampil Kategori</h1>

    Nama Kategori : {{ $kategori->nama }} <br>
    Lagu : {{ $kategori->keterangan }} <br> 

    <a href="{{ route('ubah_kategori', ['id' => $kategori->id]) }}">Ubah</a>
       

        <form action="{{ route('hapus_kategori', ['id' => $kategori->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    <a href="{{route('semua_kategori')}}">Lihat Kategori</a>
<hr>
@include("menu")
@endsection
