<?php

namespace App\Http\Controllers;

use App\Models\OurService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OurServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'service' => OurService::all()
        ];

        return view('admin.our_service', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form_create_service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = [
            'isi' => $request->input('isi'),
            'judul' => $request->input('judul'),
        ];

        $image = $request->file('gambar');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('gambar_service', $imageName, 'public');
        $attributes['gambar'] = $imagePath;


        OurService::create($attributes);

        return redirect()->route('admin.our_service')->with('success', 'Data service berhasil disimpan');
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

        $data = [

            'service' => OurService::find($id)
        ];

        return view('admin.form_edit_service', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = OurService::find($id);

        $attributes = [
            'isi' => $request->input('isi'),
            'judul' => $request->input('judul'),
        ];

        if ($request->hasFile('gambar')) {

            if ($service->gambar) {
                Storage::disk('public')->delete($service->gambar);
            }


            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('gambar_service', $imageName, 'public');
            $attributes['gambar'] = $imagePath;
        }


        $service->update($attributes);

        return redirect()->route('admin.our_service')->with('success', 'Data service berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $data = OurService::find($id);

        $data->delete();


        return redirect()->route('admin.our_service')->with('success', 'Data service berhasil dihapus');
    }
}
