@extends("blank")

@section("konten")

    <form action="{{ route("simpan_favorit") }}" method="post">
        @csrf


        Label : <input type="text" name="judul_lagu"> <br>
        
        Judul Lagu: 
        <select name="id_musik">
            
            @foreach($musiks as $musik)
            <option value="{{$musik->judul}}">{{$musik->judul}}</option>
            @endforeach
            
        </select>
        <button type="submit">Simpan</button>
        <hr>



        @include("menu")
@endsection
