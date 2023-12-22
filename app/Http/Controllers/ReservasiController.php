<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class ReservasiController extends Controller
{
    public function index()
    {
        $count_reservasi = Reservasi::count();
        $reservasi = Reservasi::all();
        return view('reservasi/listReservasi', compact('count_reservasi', 'reservasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('reservasi/reservasiForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = [
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'jumlah_orang' => $request->jumlah_orang,
            'tanggal_reservasi' => $request->tanggal_reservasi,
            'catatan' => $request->catatan,
        ];
        Reservasi::create($data);
        return redirect('/reservasi');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $row = Reservasi::where('id', $id)->first();
        return view('reservasi/detailReservasi', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $row = Reservasi::where('id', $id)->first();
        return view('reservasi/FormUpdateReservasi', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->validate([
            'nama' => 'required',
            'no_telepon' => 'required',
            'jumlah_orang' => 'required',
            'tanggal_reservasi' => 'required',
            'catatan' => 'required',
        ]);

        Reservasi::where('id', $id)->update($data);
        return redirect('/reservasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Reservasi::where('id', $id)->delete();
        return redirect('/reservasi');
    }
}
