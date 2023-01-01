@extends("blank")

@section("konten")

    <form action="{{ route("simpan_kategori") }}" method="post">
        @csrf

        Nama Kategori : <input type="text" name="nama"> <br>
        Pilihan lagu :

        <select name="id_musik">
            @foreach($musiks as $musik)
            <option value="{{$musik->judul}}">{{$musik->judul}}</option>
            @endforeach
        </select>
        <button type="submit">Simpan</button>
        <hr>
    </form>
<hr>
@include("menu") 

@endsection
