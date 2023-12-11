<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
	public function index()
	{
    	//mengambil data dari table kategori
		$kategori = DB::table('kategori')->get();
    	// mengirim data kategori ke view index
		return view('indexkategori',['kategori' => $kategori]);

	}

    public function pilih(Request $request)
    {
        $kategoriTerpilih = $request->input('kategori');

        $nama = DB::table('kategori')->where('ID', $kategoriTerpilih)->value('Nama');

        return view('konfirmasiKategori', [
            'kategoriTerpilih' => $kategoriTerpilih,
        ]);
    }
}
