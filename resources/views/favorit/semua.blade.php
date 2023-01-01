@extends("blank")

@section("konten")

    <h1>Semua Favorit</h1>

    @foreach($data as $favorit)
        Label : {{ $favorit->judul_lagu }} <br>
        
        <a href="{{ route('tampil_favorit', ['id' => $favorit->id]) }}">Tampil</a>

<hr>
    @endforeach
    <a href="{{route('buat_favorit')}}">Tambah favorit Baru</a>
    <hr>
    @include("menu") 
@endsection
