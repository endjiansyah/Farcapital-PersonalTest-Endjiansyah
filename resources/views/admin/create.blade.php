@extends('template')
@section('judul', 'Tambah admin')

@section('content')
    <a href="{{ route('admin.list') }}">Kembali</a>
    <form action="{{ route('admin.store') }}" method="POST">

        @csrf
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" placeholder="ex: Fulan.." required>
        <br>
        <label for="email">email :</label>
        <input type="email" name="email" id="email"required>
        <br>
        <label for="password">password :</label>
        <input type="password" name="password" id="password"required>
        <br>
        <button type="">Save</button>
    </form>
@endsection
