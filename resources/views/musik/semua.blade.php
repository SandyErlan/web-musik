@extends("blank")

@section("konten")

    <h1>Semua musik</h1>

    @foreach($data as $musik)
      
        Judul Lagu : {{ $musik->judul }} <br>
        id musik : {{ $musik->id }} <br>
        
        <a href="{{ route('tampil_musik', ['id' => $musik->id]) }}">Tampil</a> 
        <hr>
        

    @endforeach
    <a href="{{route('buat_musik')}}">Tambah musik Baru</a>
    <hr>
    @include("menu") 
@endsection
