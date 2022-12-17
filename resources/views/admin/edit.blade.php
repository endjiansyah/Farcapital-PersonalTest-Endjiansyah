@extends('template')
@section('judul', 'Edit admin')

@section('content')
    <a href="{{ route('admin.list') }}">Kembali</a>
    <form action="{{ route('admin.update', ['admin' => $admin]) }}" method="POST">
        @csrf
        @method('put')
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama', $admin->nama) }}" required>
        <br>

        <label for="email">email :</label>
        <input type="email" name="email" id="email" value="{{ old('email', $admin->email) }}" required>
        <br>


        <label for="password">password :</label>
        <input type="text" name="password" id="password">
        <br>
        <button type="">Save</button>
    </form>
@endsection
