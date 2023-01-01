@extends("user.tables")
@section("data")



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">level</th>
    
      <th scope="col">Edit data</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_user as $user)
    <tr>
      <th scope="row">{{ $user -> id }}</th>
      <td>{{ $user -> nama }}</td>
      <td>{{ $user -> username }}</td>
      <td>{{ $user -> level }}</td>
        
      <td>
      <!-- edit data -->
        <a href="{{ route('form-edit', ['id' => $user->id]) }}">edit</a> 
        
      <!-- TAMPIL 1 USER -->
        <a href="{{ route('user-show', ['id' => $user->id]) }}">show</a>

        <!-- menghapus user -->
<form action="{{ route("user_hapus", ['id' => $user->id]) }}" method="post">
          @csrf
          @method("delete")
        <button type="submit">Hapus</button>
</form>

      </td>
    </tr>
    @endforeach    
  </tbody>
</table>
<hr>
<a href="{{route('form-input')}}">Tambah Akun Baru</a>
<hr>
@include("menu") 

@endsection