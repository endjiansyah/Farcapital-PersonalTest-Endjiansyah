@extends('template')
@section('judul', 'Tambah Pendonor')

@section('content')
    <a href="{{ route('pendonor.list') }}">Kembali</a>

    <form action="{{ route('pendonor.store') }}" method="POST">
        @csrf
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" placeholder="ex: Fulan.." required>
        <br>

        <label>gender :</label>
        <input type="radio" name="gender" id="male" value="1"><label for="male">Laki-laki</label>
        <input type="radio" name="gender" id="female" value="2"><label for="female">Perempuan</label>
        <br>

        <label for="tl">Tanggal Lahir :</label>
        <input type="date" name="tanggal_lahir" id="tl" required>
        <br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
        <br>
        <hr>
        <button type="">Save</button>
    </form>
@endsection
