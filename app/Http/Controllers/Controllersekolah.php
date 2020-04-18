<?php

namespace App\Http\Controllers;

use App\Sekolah;
use Illuminate\Http\Request;
use DB;

class Controllersekolah extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        return view('backEnd.admin.sekolah.index', compact('sekolah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.admin.sekolah.add');
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
            'nama_sekolah' => 'required',
            'alamat' => 'required'
        ]);

        $foto = $request->foto;
        $new_foto = time() . $foto->getClientOriginalName();

        Sekolah::create([
            'nama_sekolah' => $request->nama_sekolah,
            'alamat' => $request->alamat,
            'no_telpon' => $request->no_telpon,
            'email' => $request->email,
            'no_fax' => $request->no_fax,
            'website' => $request->website,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'foto' => 'public/images/profile/' . $new_foto
        ]);

        $foto->move('public/images/profile/', $new_foto);

        return redirect('/sekolah')->with('status', 'Data sekolah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function show(Sekolah $sekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sekolah $sekolah)
    {
        return view('backEnd.admin.sekolah.ubah', compact('sekolah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sekolah $sekolah)
    {
        $request->validate([
            'nama_sekolah' => 'required',
            'alamat' => 'required'
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->foto;
            $new_foto = time() . $foto->getClientOriginalName();
            Sekolah::where('id', $sekolah->id)
                ->update([
                    'foto' => 'public/images/profile/' . $new_foto
                ]);
            $foto->move('public/images/profile/', $new_foto);
        }

        Sekolah::where('id', $sekolah->id)
            ->update([
            'nama_sekolah' => $request->nama_sekolah,
            'alamat' => $request->alamat,
            'no_telpon' => $request->no_telpon,
            'email' => $request->email,
            'no_fax' => $request->no_fax,
            'website' => $request->website,
            'visi' => $request->visi,
            'misi' => $request->misi,
            ]);

        return redirect('/sekolah')->with('status', 'Data sekolah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sekolah $sekolah)
    {
        Sekolah::destroy($sekolah->id);
        return redirect('/sekolah')->with('status', 'Data sekolah berhasil dihapus');
    }
}
