@extends("blank")

@section("konten")

    <h1>Semua Band</h1>

    @foreach($data as $band)
      
        Nama band : {{ $band->nama_band }} <br>
        id band : {{ $band->id }} <br>
        
        <a href="{{ route('tampil_band', ['id' => $band->id]) }}">Tampil</a>
        <hr>
        
    @endforeach
    <a href="{{route('buat_band')}}">Tambah band Baru</a>
    <hr>
    @include("menu") 
@endsection
