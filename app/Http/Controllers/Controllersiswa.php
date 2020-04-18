<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use DB;

class ControllerSiswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $siswa = Siswa::where('nama_siswa','like', '%'.$request->cari.'%')->get();  
        }
        $siswa = Siswa::all();
        return view('backEnd.admin.siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.admin.siswa.add');
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
            'nis' => 'required',
            'nama_siswa' => 'required'
        ]);

        $foto = $request->foto;
        $new_foto = time() . $foto->getClientOriginalName();

        Siswa::create([
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'gol_darah' => $request->gol_darah,
            'tgl_lahir' => $request->tgl_lahir,
            'foto' => 'public/images/profile/' . $new_foto
        ]);

        $foto->move('public/images/profile/', $new_foto);

        return redirect('/siswa')->with('status', 'Data siswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('backEnd.admin.siswa.ubah', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nis' => 'required',
            'nama_siswa' => 'required'
        ]);




        if ($request->hasFile('foto')) {
            $foto = $request->foto;
            $new_foto = time() . $foto->getClientOriginalName();
            Siswa::where('id', $siswa->id)
                ->update([
                    'foto' => 'public/images/profile/' . $new_foto
                ]);
            $foto->move('public/images/profile/', $new_foto);
        }

        Siswa::where('id', $siswa->id)
            ->update([
                'nis' => $request->nis,
                'nama_siswa' => $request->nama_siswa,
                'jk' => $request->jk,
                'agama' => $request->agama,
                'gol_darah' => $request->gol_darah,
                'tgl_lahir' => $request->tgl_lahir,
            ]);

        return redirect('/siswa')->with('status', 'Data siswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);
        return redirect('/siswa')->with('status', 'Data siswa berhasil dihapus');
    }
}
