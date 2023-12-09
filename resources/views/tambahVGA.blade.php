@extends('master')
@section('title', 'Tambah Data VGA')
@section('konten')

    <body>

        <h3>Tambah VGA Baru</h3>

        <a href="/vga" class="btn btn-outline-primary"> Kembali</a>

        <br>
        <br>

        <form action="/vga/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="merkvga" class="col-sm-2 col-form-label mr-2">Merk VGA</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="merkvga" name="merkvga">
                </div>
            </div>
            <div class="form-group row">
                <label for="stockvga" class="col-sm-2 col-form-label mr-2">Stock VGA</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="stockvga" name="stockvga">
                </div>
            </div>
            <div>
                <input type="hidden" id="tersedia">
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success my-2">
        </form>
    @endsection
