<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaosController extends Controller
{
    public function index()
    {
        $kaos = DB::table('kaos')->paginate(10);

        return view('indexkaos', ['kaos' => $kaos]);
    }

    public function tambah()
    {
        return view('tambahkaos');
    }

    public function store(Request $request)
    {
        DB::table('kaos')->insert([
            'merkkaos' => $request->merk,
            'stockkaos' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/kaos');
    }

    public function edit($id)
    {
        $kaos = DB::table('kaos')->where('kodekaos', $id)->get();

        return view('editkaos', ['kaos' => $kaos]);
    }

    public function update(Request $request)
{
    DB::table('kaos')->where('kodekaos', $request->id)->update([
        'merkkaos' => $request->merk,
        'stockkaos' => $request->stok,
        'tersedia' => $request->tersedia
    ]);

    return redirect('/kaos');
}


    public function hapus($id)
    {
        DB::table('kaos')->where('kodekaos', $id)->delete();

        return redirect('/kaos');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $kaos = DB::table('kaos')
            ->where('merkkaos', 'like', "%" . $cari . "%")
            ->paginate();

        return view('indexkaos', ['kaos' => $kaos]);
    }

    public function view($id)
    {
        $kaos = DB::table('kaos')->where('kodekaos', $id)->get();

        return view('viewkaos', ['kaos' => $kaos]);
    }
}
