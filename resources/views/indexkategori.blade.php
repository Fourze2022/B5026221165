@extends('master')
@section('title', 'Data Kategori')
@section('konten')

    <h2>Data Kategori</h2>
    <br>
    <h3>Pilih Kategori</h3>
    <form action="/kategori/pilih" method="POST">
        @csrf
        <div class="form-group">
            <select name="kategori" id="kategori" class="form-control">
                @foreach($kategori as $k)
                    <option
                        value="{{ $k->ID }}">{{ $k->Nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">KIRIM</button>
    </form>
@endsection
