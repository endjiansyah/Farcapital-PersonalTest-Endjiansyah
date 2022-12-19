@extends('template')
@section('judul', 'Pengecekan Pendonor')

@section('content')
    <a href="{{ route('pendonor.list') }}">Kembali</a>
    <form action="{{ route('pendonor.update', ['pendonor' => $pendonor]) }}" method="POST">
        @csrf
        @method('put')
        <ol>
            <li>tidak pernah menderita hepatitis B</li>
            <li>tidak kontak erat dengan penderita hepatitis B dalam 6 bulan terakhir</li>
            <li>tidak mendapat transfusi darah dalam 6 bulan terakhir</li>
            <li>tidak melakukan pemasangan tato atau tindik dalam 6 bulan terakhir</li>
            <li>tidak melakukan operasi gigi dalam 3 hari terakhir</li>
            <li>tidak melakukan operasi kecil dalam 1 tahun terakhir</li>
            <li>tidak melakukan vaksinasi polio, influenza, kolera, stetanus, dipteria, profilaksis dalam 1 hari terakhir
            </li>
            <li>tidak melakukan vaksinasi virus hidup parotitis epidemica, measles, tetanus toxin dalam 2 minggu terakhir
            </li>
            <li>tidak melakukan injeksi rabies therapeutic dalam 1 tahun terakhir</li>
            <li>tidak ada gejala alergi menghilang dalam 1 minggu terakhir</li>
            <li>tidak melakukan transplantasi kulit dalam 1 tahun terakhir</li>
            <li>tidak sedang hamil, menyusui, atau 6 bulan setelah persalinan</li>
            <li>tidak ketergantungan obat dan tidak alkoholisme akut</li>
            <li>tidak mengidap sifilis, tuberculosis, epilepsi dan tidak sering kejang</li>
        </ol>
        <hr>
        <label>apakah anda lolos semua pengecekan diatas? :</label>
        <input type="radio" name="layak" id="ya" value="TRUE"
            {{ $pendonor->layak === true ? 'checked' : '' }}><label for="ya">ya</label>
        <input type="radio" name="layak" id="tidak" value="FALSE"
            {{ $pendonor->layak === false ? 'checked' : '' }}><label for="tidak">tidak</label>
        <br>
        <hr>
        <button type="">Save</button>
    </form>
@endsection
