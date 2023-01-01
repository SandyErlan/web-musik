@extends("blank")

@section("konten")

    <form action="{{ route("update_favorit", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Label : <input type="text" name="judul_lagu"> <br>
        
        Judul Lagu : 
        <select name="id_musik">
            
            @foreach($musiks as $musik)
            <option value="{{$musik->judul}}">{{$musik->judul}}</option>
            @endforeach
        </select>
        <button type="submit">Simpan</button>
        <hr>
    <hr>
    @include("menu") 

@endsection
