@extends("blank")
@section("konten")


<!-- // untuk menampilkan eror -->
@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
                </ul>
                </div>
@endif

 <!-- codingan formedit -->
    <form action="{{ route('user_update', ['id' => $id])}}" method="post">
        @csrf 
        @method("put")
        Nama : <input type="text" name="nama"> <br>
        Username : <input type="text" name="username"> <br>
        Password : <input type="password" name="password"> <br>
        Level : 
        <select name="level" id="">
            <option value="Admin">Admin</option>
            <option value="Uploader">Uploader</option>
            <option value="Viewer">Viewer</option>
        </select><br>
        <button type="submit">Simpan</button>

</form>
@include("menu") 
@endsection