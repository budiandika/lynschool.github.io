<?php

namespace App\Http\Controllers;

use App\Wali;
use Illuminate\Http\Request;
use DB;

class ControllerWali extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wali = Wali::all();
        return view('backEnd.admin.wali.index', compact('wali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.admin.wali.add');
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
            'no_ktp' => 'required',
            'nama_wali' => 'required'
        ]);

        $foto = $request->foto;
        $new_foto = time() . $foto->getClientOriginalName();

        Wali::create([
            'no_ktp' => $request->no_ktp,
            'nama_wali' => $request->nama_wali,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'gol_darah' => $request->gol_darah,
            'tgl_lahir' => $request->tgl_lahir,
            'type_wali' => $request->type_wali,
            'foto' => 'public/images/profile/' . $new_foto
        ]);

        $foto->move('public/images/profile/', $new_foto);

        return redirect('/wali')->with('status', 'Data wali berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function show(Wali $wali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function edit(Wali $wali)
    {
        return view('backEnd.admin.wali.ubah', compact('wali'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wali $wali)
    {
        $request->validate([
            'no_ktp' => 'required',
            'nama_wali' => 'required'
        ]);




        if ($request->hasFile('foto')) {
            $foto = $request->foto;
            $new_foto = time() . $foto->getClientOriginalName();
            Wali::where('id', $wali->id)
                ->update([
                    'foto' => 'public/images/profile/' . $new_foto
                ]);
            $foto->move('public/images/profile/', $new_foto);
        }

        Wali::where('id', $wali->id)
            ->update([
            'no_ktp' => $request->no_ktp,
            'nama_wali' => $request->nama_wali,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'gol_darah' => $request->gol_darah,
            'tgl_lahir' => $request->tgl_lahir,
            'type_wali' => $request->type_wali,
            ]);

        return redirect('/wali')->with('status', 'Data wali berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wali $wali)
    {
        Wali::destroy($wali->id);
        return redirect('/wali')->with('status', 'Data wali berhasil dihapus');
    }
}
