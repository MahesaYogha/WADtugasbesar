<?php

namespace App\Http\Controllers;

use App\Models\Masukan;
use App\Models\Menu;
use Illuminate\Http\Request;

class MasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = [
            'masukan' => Masukan::all()
        ];

        return view('admin.manage_masukan', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $masukan = Masukan::find($id);

        $attributes = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'no_hp' => $request->input('no_hp'),
            'penilaiian' => $request->input('penilaiian'),
            'isi_masukan' => $request->input('isi_masukan'),
            // 'isi' => $request->input('isi'),
        ];

        Masukan::create($attributes);

        return redirect()->back()->with('success', 'Data masukan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $data = [

            'masukan' => Masukan::find($id)
        ];

        return view('admin.form_update_masukan', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $masukan = Masukan::find($id);

        $attributes = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'no_hp' => $request->input('no_hp'),
            'penilaiian' => $request->input('penilaiian'),
            'isi_masukan' => $request->input('isi_masukan'),
            // 'isi' => $request->input('isi'),
        ];

        $masukan->update($attributes);

        return redirect()->route('admin.masukan')->with('success', 'Data masukan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

        $masukan = Masukan::find($id);
        $masukan->delete();

        return redirect()->route('admin.masukan')->with('success', 'Data masukan berhasil dihapus');
    }
}
