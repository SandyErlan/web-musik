@extends("blank")

@section("konten")

    <h1>Semua Kategori</h1>

    @foreach($data as $kategori)
        Nama Kategori : {{ $kategori->nama }} <br>


        <a href="{{ route('tampil_kategori', ['id' => $kategori->id]) }}">Tampil</a>
        <hr>
        
    @endforeach
    <a href="{{route('buat_kategori')}}">Tambah Kategori Baru</a>
    <hr>
    @include("menu") 
@endsection
