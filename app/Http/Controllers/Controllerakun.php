<?php

namespace App\Http\Controllers;

use App\Akun;
use Illuminate\Http\Request;
use DB;

class Controllerakun extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun = Akun::all();
        return view('backEnd.admin.akun.index', compact('akun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.admin.akun.add');
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
            'username' => 'required',
            'password' => 'required'
        ]);

        Akun::create([
            'username' => $request->username,
            'password' => $request->password,
            'id_level' => $request->id_level,
            'status' => $request->status,
        ]);

        return redirect('/akun')->with('status', 'Data akun berhasil ditambahkan');
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
     * @param  \App\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit(Akun $akun)
    {
        return view('backEnd.admin.akun.ubah', compact('akun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Akun $akun)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        Akun::where('id', $akun->id)
            ->update([
            'username' => $request->username,
            'password' => $request->password,
            'id_level' => $request->id_level,
            'status' => $request->status,
            ]);

        return redirect('/akun')->with('status', 'Data akun berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Akun $akun)
    {
        Akun::destroy($akun->id);
        return redirect('/akun')->with('status', 'Data akun berhasil dihapus');
    }
}
