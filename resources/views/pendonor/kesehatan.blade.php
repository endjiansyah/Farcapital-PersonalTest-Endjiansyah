@extends('template')
@section('judul', 'Edit Pendonor')

@section('content')
    <a href="{{ route('pendonor.list') }}">Kembali</a>
    <h1>Kesehatan Pendonor</h1>
    <form action="{{ route('pendonor.update', ['pendonor' => $pendonor]) }}" method="POST">
        @csrf
        @method('put')
        <label>mendapat izin ortu? :</label>
        <input type="radio" name="izinortu" id="ya" value="TRUE"
            {{ $pendonor->izinortu == 1 ? 'checked' : '' }}><label for="ya">ya</label>
        <input type="radio" name="izinortu" id="tidak" value="FALSE"
            {{ $pendonor->izinortu == 2 ? 'checked' : '' }}><label for="tidak">tidak</label>
        <br>
        <label for="bb">berat badan :</label>
        <input type="number" name="beratbadan" id="bb" required
            value="{{ old('beratbadan', $pendonor->beratbadan) }}">
        <br>
        <label for="temperatur">Temperatur :</label>
        <input type="number" name="temperatur" id="temperatur" required
            value="{{ old('temperatur', $pendonor->temperatur) }}">
        <br>
        <label for="sistole">sistole :</label>
        <input type="number" name="sistole" id="sistole" required value="{{ old('sistole', $pendonor->sistole) }}">
        <br>
        <label for="diastole">diastole :</label>
        <input type="number" name="diastole" id="diastole" required value="{{ old('diastole', $pendonor->diastole) }}">
        <br>
        <label for="nadi">nadi :</label>
        <input type="number" name="nadi" id="nadi" required value="{{ old('nadi', $pendonor->nadi) }}">
        <br>
        <label for="hemoglobin">hemoglobin :</label>
        <input type="number" name="hemoglobin" id="hemoglobin" required
            value="{{ old('hemoglobin', $pendonor->hemoglobin) }}">
        <br>

        <button type="">Save</button>
    </form>
@endsection
