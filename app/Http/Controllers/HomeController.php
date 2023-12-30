<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Masukan;
<<<<<<< HEAD
use App\Models\OurService;
=======
>>>>>>> 0e3ab3444c6f62e5555d7c52dea31dc4936ace32
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $data = [
            'about_us' => AboutUs::find(1),
            'masukan' => Masukan::limit(3)->get(),
<<<<<<< HEAD
            'service' => OurService::limit(3)->get(),
=======
>>>>>>> 0e3ab3444c6f62e5555d7c52dea31dc4936ace32
        ];

        return view('home', $data);
    }
}
