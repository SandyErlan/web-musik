@extends("blank")

@section("konten")

    <form action="{{ route("simpan_musik") }}" method="post">
        @csrf


        Judul lagu: <input type="text" name="judul"> <br>
        Link Drive lagu: <input type="text" name="link_lagu"> <br>
        Tanggal Membuat : <input type="text" name="tanggal_upload"> <br>
        band : 
        
        <!-- menghubungkan band -->
        <select name="band_id"> 
            @foreach($bands as $band)
            <option value="{{$band->id}}">{{$band->nama_band}}</option>
            @endforeach
        </select>
        <button type="submit">Simpan</button>
        <hr>
 


        @include("menu")
@endsection
