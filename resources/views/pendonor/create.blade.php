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
        <h4>pengecekan</h4>
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
            <li>tidak Menderita penyakit kulit pada vena (pembuluh darah balik) yang akan ditusuk</li>
            <li>tidak mempunyai kecenderungan perdarahan atau penyakit darah, misalnya thalasemia - Seseorang yang termasuk
                kelompok masyarakat yang berisiko tinggi mendapatkan HIV dan AIDS (homoseks, morfinis, berganti-ganti
                pasangan seks dan pemakai jarum suntik tidak steril)</li>
            <li>tidak mengidap HIV dan AIDS menurut hasil pemeriksaan saat donor darah</li>
        </ol>
        <hr>
        <label>apakah anda lolos semua pengecekan diatas? :</label>
        <input type="radio" name="layak" id="ya" value="TRUE"><label for="ya">ya</label>
        <input type="radio" name="layak" id="tidak" value="FALSE"><label for="tidak">tidak</label>
        <br>
        <hr>
        <button type="">Save</button>
    </form>
@endsection
