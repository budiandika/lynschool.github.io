<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;
use DB;

class Controllerkontak extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view('backEnd.admin.kontak.index', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.admin.kontak.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'detail' => 'required'
        ]);

        Kontak::create([
            'type' => $request->type,
            'detail' => $request->detail,
            'id_akun' => $request->id_akun,
        ]);

        return redirect('/kontak')->with('status', 'Data kontak berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontak $kontak)
    {
        return view('backEnd.admin.kontak.ubah', compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontak $kontak)
    {
        $request->validate([
            'type' => 'required',
            'detail' => 'required'
        ]);

        Kontak::where('id', $kontak->id)
            ->update([
            'type' => $request->type,
            'detail' => $request->detail,
            'id_akun' => $request->id_kontak,
            ]);

        return redirect('/kontak')->with('status', 'Data kontak berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontak $kontak)
    {
        Kontak::destroy($kontak->id);
        return redirect('/kontak')->with('status', 'Data kontak berhasil dihapus');
    }
}
