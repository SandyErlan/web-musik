@extends("blank")

@section("konten")

Nama Band
    <h1>{{ $band->nama_band }}</h1>
    user : {{ $band->user->nama }}<br>  <!-- /konek to model -->
    genre : {{ $band->genre }} <br>
   
    Tanggal Rilis : {{ $band->tanggal_rilis }} <br> 
    <a href="{{ route('ubah_band', ['id' => $band->id]) }}">Ubah</a>


<form action="{{ route('hapus_band', ['id' => $band->id]) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Hapus</button>
</form>
<hr>

    <a href="{{route('semua_band')}}">Lihat band</a> 
    <hr>
@include("menu")
@endsection