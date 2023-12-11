<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->paginate(10);
        return view('indexKaryawan', ['karyawan' => $karyawan]);
    }

    public function tambah()
    {
        return view('tambahKaryawan');
    }

    public function store(Request $request)
    {
        //Pesan Validasi
    $messages = [
        'kodekaryawan.unique' => 'Maaf, kode karyawan sudah tersedia. Tolong gunakan kode yang berbeda.',
    ];

    // Validasi input
    $request->validate([
        'kodekaryawan' => [
            'required',
            'max:5',
            Rule::unique('karyawan', 'kodekaryawan'),
        ],
        'namalengkap' => 'required|max:50',
        'divisi' => 'required|max:20',
        'departemen' => 'required|max:20',
    ], $messages);

    DB::table('karyawan')->insert([
        'kodekaryawan' => $request->kodekaryawan,
        'namalengkap' => $request->namalengkap,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen
    ]);

    //alert berhasil
    return redirect('/karyawan')->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $karyawan = DB::table('karyawan')->where('kodekaryawan', $id)->get();
        return view('editKaryawan', ['karyawan' => $karyawan]);
    }

    public function update(Request $request)
    {
        DB::table('karyawan')->where('kodekaryawan', $request->kodekaryawan)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        return redirect('/karyawan');

    }

    public function hapus($id)
    {
        DB::table('karyawan')->where('kodekaryawan', $id)->delete();
        return redirect('/karyawan');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $karyawan = DB::table('karyawan')
                        ->where('namalengkap', 'like', "%" . $cari . "%")
                        ->paginate();
        return view('indexKaryawan', ['karyawan' => $karyawan]);
    }

    public function view($id)
    {
        $karyawan = DB::table('karyawan')->where('kodekaryawan', $id)->get();
        return view('viewKaryawan', ['karyawan' => $karyawan]);
    }
}
