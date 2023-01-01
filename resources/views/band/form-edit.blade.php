@extends("blank")

@section("konten")

    <form action="{{ route('update_band', ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Nama Album : <input type="text" name="nama_band"> <br>
        Genre :
            <input type="radio" name="genre" value="Pop"> Pop
            <input type="radio" name="genre" value="Rock"> Rock
            <input type="radio" name="genre" value="Klasik"> Klasik
            <input type="radio" name="genre" value="Jaz"> Jaz
        <br>
        Tanggal Rilis : <input type="text" name="tanggal_rilis"> <br>
        <hr>

        <button type="submit">Simpan</button>
    </form>

    <hr>
    @include("menu") 

@endsection
