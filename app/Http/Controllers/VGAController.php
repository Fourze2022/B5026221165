<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VGAController extends Controller{

    public function index()
	{
    	// mengambil data dari table VGA
        $vga = DB::table('vga')
            ->orderBy('merkvga','asc')
            ->paginate(5);

    	// mengirim data VGA ke view index
		return view('indexVGA',['vga' => $vga]);
	}

    // method untuk menampilkan view form tambah VGA
	public function tambah()
	{
		// memanggil view tambah
		return view('tambahVGA');
	}

	// method untuk insert data ke table VGA
	public function store(Request $request)
	{
		// gunakan ternary operator untuk menentukan kondisi stok
		DB::table('vga')->insert([
			'merkvga' => $request->merkvga,
			'stockvga' => $request->stockvga,
            'tersedia'=> ($request->stockvga > 0) ? 'Y' : 'N'
		]);
		// alihkan halaman ke halaman VGA
		return redirect('/vga');
	}

    // method untuk edit VGA
	public function edit($kodevga)
	{
		// mengambil data VGA berdasarkan id yang dipilih
		$vga = DB::table('vga')->where('kodevga',$kodevga)->get();
		// passing data VGA yang didapat ke view editVGA.blade.php
		return view('editVGA',['vga' => $vga]);

	}

    // update data VGA
	public function update(Request $request)
	{
		// update data VGA
		DB::table('vga')->where('kodevga', $request->kodevga)->update([
			'merkvga' => $request->merkvga,
			'stockvga' => $request->stockvga,
            'tersedia'=> ($request->stockvga > 0) ? 'Y' : 'N'
		]);
		// alihkan halaman ke halaman vga
		return redirect('/vga');
	}

    public function view($kodevga)
	{
		// mengambil data VGA berdasarkan kodevga yang dipilih
		$vga = DB::table('vga')->where('kodevga',$kodevga)->get();
		// passing data VGA yang didapat ke view viewVGA.blade.php
		return view('viewVGA',['vga' => $vga]);

	}

	// method untuk hapus data VGA
	public function hapus($kodevga)
	{
		// menghapus  data VGA berdasarkan kodevga yang dipilih
		DB::table('vga')->where('kodevga',$kodevga)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/vga');
	}

    public function cari(Request $request)
    {
	// menangkap data pencarian
	$cari = $request->cari;

 	// mengambil data dari table VGA sesuai pencarian data
	$vga = DB::table('vga')
	    ->where('merkvga','like',"%".$cari."%")
	    ->paginate();

    	// mengirim data vga ke view index
	return view('indexVGA',['vga' => $vga,'cari' => $cari]);
    }
}
