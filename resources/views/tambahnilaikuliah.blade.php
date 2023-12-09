@extends('master')
@section('title', 'Tambah Data Nilai Kuliah')
@section('konten')

    <body>

        <h2>Tambah Data Nilai Kuliah</h2>

        <a href="/nilaikuliah" class="btn btn-outline-primary"> Kembali</a>

        <br>
        <br>

        <form action="/nilaikuliah/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="NRP" class="col-sm-1 col-form-label mr-2">NRP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="NRP" name="NRP">
                </div>
            </div>
            <div class="form-group row">
                <label for="NilaiAngka" class="col-sm-1 col-form-label mr-2">Nilai Angka</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="NilaiAngka" name="NilaiAngka">
                </div>
            </div>
            <div class="form-group row">
                <label for="SKS" class="col-sm-1 col-form-label mr-2">SKS</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="SKS" name="SKS">
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-success my-2">
        </form>
    @endsection
