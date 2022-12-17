@extends('template')
@section('judul', 'List admin')

@section('content')
    <a href="{{ route('admin.create') }}">Tambah admin</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admin as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ route('admin.edit', ['admin' => $item]) }}">Edit</a>
                        @if (session('idUser') != $item->id)
                            <form action="{{ route('admin.destroy', ['admin' => $item]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Hapus admin {{ $item->nama }}?')">delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
