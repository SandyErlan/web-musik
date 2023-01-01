@extends("blank")

@section("konten")

<form action="{{ route('update_musik', ['id' => $id]) }}" method="post" > 
        @csrf
        @method("put")

        Judul lagu: <input type="text" name="judul"> <br>
        Link lagu: <input type="text" name="link_lagu"> <br>
        Tanggal Membuat : <input type="text" name="tanggal_upload"> <br>
        band : 
        <select name="id_band">
            
            @foreach($bands as $band)
            <option value="{{$band->nama_band}}">{{$band->nama_band}}</option>
            @endforeach
        </select>
        <button type="submit">Simpan</button>
        <hr>
    <hr>
    @include("menu") 

@endsection
