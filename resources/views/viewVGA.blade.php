@extends('master')
@section('title', 'View Data VGA')
@section('konten')

    <body>

        <div class="text-center my-3">
            <h1>Data VGA</h1>
        </div>
        @foreach ($vga as $v)
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="border border-primary rounded mx-3 mb-3"
                            style="height: 25vh; border-width: 3px !important ">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row my-2">
                            <div class="col-4">
                                <b>Merk VGA</b>
                            </div>
                            <div class="col-8">
                                <b>: </b>{{ $v->merkvga }}
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4">
                                <b>Stock VGA</b>
                            </div>
                            <div class="col-8">
                                <b>: </b>{{ $v->stockvga }}
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4">
                                <b>Ketersediaan</b>
                            </div>
                            <div class="col-8">
                                <b>: </b>{{ $v->tersedia }}
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="/vga" class='btn btn-outline-primary my-2'> OK </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endsection
