@extends("blank")

@section("konten")

<h1>Tampil Musik</h1>

    
    Judul Lagu : {{ $musik->judul }} <br>
    Link Lagu : {{ $musik->link_lagu }} <br>
    Tanggal Upload : {{ $musik->tanggal_upload }} <br>
    Band : {{ $musik->band->nama_band}} <br>
 

    <a href="{{ route('ubah_musik', ['id' => $musik->id]) }}">Ubah</a>
       

        <form action="{{ route('hapus_musik', ['id' => $musik->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    <a href="{{route('semua_musik')}}">Lihat semua musik</a>

<hr>    
    @include("menu")
@endsection