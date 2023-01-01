@extends("blank")

@section("konten")

    <form action="{{ route('simpan_band') }}" method="post">
        @csrf

        Nama Band : <input type="text" name="nama_band"> <br>
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

@include("menu")
@endsection
