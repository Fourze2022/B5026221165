@extends('master')
@section('title', 'Tabel VGA')
@section('konten')

    <h1 class="text-center">Data VGA</h1>
    <a href="/vga/tambah" class='btn btn-primary mb-3'> + VGA Baru</a>
    <br>

    <p>Cari Nama VGA Berdasarkan Nama:</p>
    <form action="/vga/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari VGA .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input class="btn btn-primary my-3" type="submit" value="CARI">
    </form>
    <br>

    <table class="table table-striped table-hover text-center">
        <tr>
            <th>Kode VGA</th>
            <th>Merk VGA</th>
            <th>Stock VGA</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($vga as $v)
            <tr>
                <td>{{ $v->kodevga }}</td>
                <td>{{ $v->merkvga }}</td>
                <td>{{ $v->stockvga }}</td>
                <td>
                    @if ($v->tersedia == 'Y')
                        Y
                    @else
                        N
                    @endif
                </td>
                <td>
                    <a href="/vga/view/{{ $v->kodevga }}" class='btn btn-success'>View</a>
                    |
                    <a href="/vga/edit/{{ $v->kodevga }}" class='btn btn-warning'>Edit</a>
                    |
                    <a href="/vga/hapus/{{ $v->kodevga }}" class='btn btn-danger'>Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $vga->links() }}
@endsection
