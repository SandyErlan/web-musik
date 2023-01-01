@extends("blank")
@section("konten")
 <!-- codingan 1 user tampil -->
    
 Nama : {{ $data_user -> nama }}<br>
 Username :{{ $data_user -> username }}<br>
 Password : {{ $data_user -> password }}<br>
 Level : {{ $data_user -> level }}<br>
 Create :{{ $data_user -> created_at }}<br>
 Update :{{ $data_user -> updated_at }}<br> 

@include("menu") 
@endsection