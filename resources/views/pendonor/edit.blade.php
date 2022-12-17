@extends('template')
@section('judul', 'Edit Pendonor')

@section('content')
    <a href="{{ route('pendonor.list') }}">List Pendonor</a>
    <form action="{{ route('pendonor.update', ['pendonor' => $pendonor]) }}" method="POST">
        @csrf
        @method('put')
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama', $pendonor->nama) }}" required>
        <br>
        <label>gender :</label>
        <input type="radio" name="gender" id="male" value="1"
            {{ $pendonor->gender == 1 ? 'checked' : '' }}><label for="male">Laki-laki</label>
        <input type="radio" name="gender" id="female" value="2"
            {{ $pendonor->gender == 2 ? 'checked' : '' }}><label for="female">Perempuan</label>
        <br>
        <label for="tl">Tanggal Lahir :</label>
        <input type="date" name="tanggal_lahir" id="tl" required
            value="{{ old('tanggal_lahir', $pendonor->tanggal_lahir) }}">
        <br>
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" cols="30" rows="10">{{ old('alamat', $pendonor->alamat) }}</textarea>
        <br>
        <button type="">Save</button>
    </form>
@endsection
