<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // dd(AboutUs::find(1)->isi);
        $data = [
            'about_us' => AboutUs::find(1)
        ];

        return view('admin.manage_about_us', $data);
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        // dd('asdas');

        $data = AboutUs::find($id);

        $attributes = [
            'isi' => $request->input('isi'),
        ];

        if ($request->hasFile('gambar')) {

            if ($data->gambar) {
                Storage::disk('public')->delete($data->gambar);
            }


            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('gambar_about_us', $imageName, 'public');
            $attributes['gambar'] = $imagePath;
        }

        // $image = $request->file('gambar');
        // $imageName = time() . '.' . $image->getClientOriginalExtension();
        // $imagePath = $image->storeAs('gambar_about_us', $imageName, 'public');
        // $attributes['gambar'] = $imagePath;


        $data->update($attributes);

        return redirect()->back()->with('success', 'Data menu berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 0dbe8e5530c92cc161fec6581997c5cf6c62fd53
