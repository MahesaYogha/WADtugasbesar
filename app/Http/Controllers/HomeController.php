<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Masukan;
use App\Models\OurService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $data = [
            'about_us' => AboutUs::find(1),
            'masukan' => Masukan::limit(3)->get(),
            'service' => OurService::limit(3)->get(),
        ];

        return view('home', $data);
    }
}
