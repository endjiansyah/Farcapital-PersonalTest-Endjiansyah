@extends('template')
@section('judul', 'Edit Pendonor')

@section('content')
    <a href="{{ route('pendonor.list') }}">Kembali</a>
    <br><br>
    Nama : {{ $pendonor->nama }} <br>
    Gender :
    @if ($pendonor->gender == 1)
        Laki-laki
    @else
        Perempuan
    @endif
    <br>
    Tanggal Lahir : {{ $pendonor->tanggal_lahir }} <br>
    Alamat : {{ $pendonor->alamat }}
    <br>
    Lolos Kriteria? :
    @if ($pendonor->layak === true)
        Lolos
    @else
        Tidak Lolos
    @endif
    {{-- ----------------------- --}}

@endsection
