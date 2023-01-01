@extends("login-daftar-blank")
@section("daftar")

@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
                </ul>
                </div>
            @endif

 <!-- codingan formInput -->
    <form action="{{ route('form-simpan') }}" method="post">
        @csrf 

        Nama : <input type="text" name="nama"> <br>
        Username : <input type="text" name="username"> <br>
        Password : <input type="password" name="password"> <br>
        Level : 
        <select name="level" id="">
            <option value="Admin">Admin</option>
            <option value="Uploader">Uploader</option>
            <option value="Viewer">Viewer</option>
        </select><br>
        <button type="submit">Daftar</button>

</form>
@endsection