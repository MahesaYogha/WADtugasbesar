<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('reservasiForm');
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
        //

        $data = [
            'nama' => $request->nama,
        ];

        $query = mysqli_query($conn, "INSERT INTO reservasi(nama, no_telepon, jumlah_orang, tanggal_reservasi, catatan) VALUES ('$nama', '$no_telepon', '$jumlah_orang', '$tanggal_reservasi', '$catatan')");

        if ($query) {
            echo "<script>alert('Reservasi berhasil dibuat')</script>";
            echo "<meta http-equiv='refresh' content='1 url=reservasiForm.php>";
        } 

        else {
            echo "<script>alert('Reservasi gagal dibuat')</script>";
            echo "<meta http-equiv='refresh' content='1 url=reservasiForm.php'>";
        }

        $conn->close();
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
