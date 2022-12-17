@extends('template')
@section('judul', 'List Pendonor')

@section('content')
    <a href="{{ route('pendonor.create') }}">Tambah pendonor</a>
    <table border="1">
        <thead>
            <tr>
                <th>waktu registrasi</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Status kriteria</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendonor as $item)
                <tr>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        @if ($item->gender == 1)
                            Laki-laki
                        @else
                            Perempuan
                        @endif
                    </td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        @if ($item->layak === true)
                            Layak
                        @else
                            tidak lolos
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('pendonor.show', ['pendonor' => $item]) }}">Detail</a>
                        <a href="{{ route('pendonor.edit', ['pendonor' => $item]) }}">Edit</a>

                        <form action="{{ route('pendonor.destroy', ['pendonor' => $item]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Hapus data {{ $item->nama }}?')">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
