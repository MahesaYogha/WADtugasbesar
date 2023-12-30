<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
<<<<<<< HEAD
=======
use App\Models\Masukan;
<<<<<<< HEAD
use App\Models\OurService;
=======
>>>>>>> 0e3ab3444c6f62e5555d7c52dea31dc4936ace32
>>>>>>> 0dbe8e5530c92cc161fec6581997c5cf6c62fd53
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $data = [
<<<<<<< HEAD
            'about_us' => AboutUs::find(1)
=======
            'about_us' => AboutUs::find(1),
            'masukan' => Masukan::limit(3)->get(),
<<<<<<< HEAD
            'service' => OurService::limit(3)->get(),
=======
>>>>>>> 0e3ab3444c6f62e5555d7c52dea31dc4936ace32
>>>>>>> 0dbe8e5530c92cc161fec6581997c5cf6c62fd53
        ];

        return view('home', $data);
    }
}
