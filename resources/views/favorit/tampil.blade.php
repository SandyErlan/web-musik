@extends("blank")

@section("konten")

<h1>Tampil Favorit</h1>


    Label : {{ $favorit->judul_lagu }} <br>
    Judul Lagu : {{ $favorit->musik_id }} <br>

<a href="{{ route('ubah_favorit', ['id' => $favorit->id]) }}">Ubah</a>


<form action="{{ route('hapus_favorit', ['id' => $favorit->id]) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Hapus</button>
</form>
<hr>
<a href="{{route('semua_favorit')}}">Semua Favorit</a> 
    <hr>
    @include("menu")
@endsection