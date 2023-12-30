<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = [
            'menu' => Menu::all()
        ];

        return view('admin.manage_menu', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.form_create_menu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $data_store = [
            'nama_menu' => $request->input('nama_menu'),
            'gambar_menu' => $request->file('gambar_menu'),
        ];


        // dd($data_store);

        $rules = [
            'gambar_menu' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_menu' => 'required|string|max:255',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ];

        // Menentukan pesan kesalahan validasi kustom
        $customMessages = [
            'gambar_menu.required' => 'Harap pilih gambar.',
            'gambar_menu.image' => 'File harus berupa gambar.',
            'gambar_menu.mimes' => 'Format gambar yang diizinkan: jpeg, png, jpg, gif.',
            'gambar_menu.max' => 'Ukuran gambar tidak boleh melebihi 2 MB.',
            'nama_menu.required' => 'Harap isi nama menu.',
            'nama_menu.string' => 'Nama menu harus berupa teks.',
            'nama_menu.max' => 'Nama menu tidak boleh lebih dari :max karakter.',
            // Tambahkan pesan kesalahan kustom lainnya sesuai kebutuhan
        ];


        // Validasi input menggunakan aturan dan pesan kesalahan kustom
        $validator = Validator::make($data_store, $rules, $customMessages);

        // Jika validasi gagal, kembalikan dengan pesan kesalahan
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            $attributes = [
                'nama_menu' => $request->input('nama_menu'),
            ];

            $image = $request->file('gambar_menu');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('gambar_menu', $imageName, 'public');
            $attributes['gambar_menu'] = $imagePath;


            Menu::create($attributes);

            return redirect()->route('admin.menu')->with('success', 'Data menu berhasil disimpan');
        }
    }

    private function format_number($num)
    {
        $harga_menu = str_replace('Rp. ', '', $num);
        $harga_menu = str_replace('.', '', $harga_menu);

        return (int) $harga_menu;
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

            'menu' => Menu::find($id)
        ];

        return view('admin.form_edit_menu', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $data_store = [
            'nama_menu' => $request->input('nama_menu'),
            'gambar_menu' => $request->file('gambar_menu'),
        ];


        // dd($data_store);

        if ($data_store['gambar_menu'] == null) {
            $rules = [
                'nama_menu' => 'required|string|max:255',
                // Tambahkan aturan validasi lainnya sesuai kebutuhan
            ];
        } else {
            $rules = [
                'gambar_menu' => 'mimes:jpeg,png,jpg,gif|max:2048',
                'nama_menu' => 'required|string|max:255',
                // Tambahkan aturan validasi lainnya sesuai kebutuhan
            ];
        }



        // Menentukan pesan kesalahan validasi kustom
        $customMessages = [
            'gambar_menu.required' => 'Harap pilih gambar.',
            'gambar_menu.image' => 'File harus berupa gambar.',
            'gambar_menu.mimes' => 'Format gambar yang diizinkan: jpeg, png, jpg, gif.',
            'gambar_menu.max' => 'Ukuran gambar tidak boleh melebihi 2 MB.',
            'nama_menu.required' => 'Harap isi nama menu.',
            'nama_menu.string' => 'Nama menu harus berupa teks.',
            'nama_menu.max' => 'Nama menu tidak boleh lebih dari :max karakter.',
            // Tambahkan pesan kesalahan kustom lainnya sesuai kebutuhan
        ];


        // Validasi input menggunakan aturan dan pesan kesalahan kustom
        $validator = Validator::make($data_store, $rules, $customMessages);

        // Jika validasi gagal, kembalikan dengan pesan kesalahan
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            // dd('berhasil');

            $menu = Menu::find($id);

            $attributes = [
                'nama_menu' => $request->input('nama_menu'),
            ];

            if ($request->hasFile('gambar_menu')) {

                if ($menu->gambar_menu) {
                    Storage::disk('public')->delete($menu->gambar_menu);
                }


                $image = $request->file('gambar_menu');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('gambar_menu', $imageName, 'public');
                $attributes['gambar_menu'] = $imagePath;
            }


            $menu->update($attributes);

            return redirect()->route('admin.menu')->with('success', 'Data menu berhasil diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $data = Menu::find($id);

        $data->delete();

        Storage::disk('public')->delete($data->gambar_menu);

        return redirect()->back()->with('success', 'Data menu berhasil dihapus');

        //
    }

    public function all_menu()
    {

        $data = [

            'menu_one' => Menu::get()->first(),
            'all_menu' => Menu::where('id', '!=', 1)->limit(4)->get(),
        ];

        return view('all_menu', $data);
    }
}
