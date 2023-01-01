@extends("blank")

@section("konten")

    <form action="{{ route("update_kategori", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

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
