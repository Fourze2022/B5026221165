@extends('master')
@section('title', 'Edit Data VGA')
@section('konten')

    <body>

        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Edit Data VGA</h3>

        <a href="/vga" class="btn btn-primary my-3"> Kembali</a>

        <br>
        <br>

        @foreach ($vga as $v)
            <form action="/vga/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="kodevga" value="{{ $v->kodevga }}">

                <div class="form-group row">
                    <label for="merkvga" class="col-sm-2 col-form-label mr-2">Merk VGA</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" required="required" name="merkvga"
                            value="{{ $v->merkvga }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="stockvga" class="col-sm-2 col-form-label mr-2">Stock VGA</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" required="required" name="stockvga"
                            value="{{ $v->stockvga }}">
                    </div>
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>
        @endforeach
    </body>
@endsection
