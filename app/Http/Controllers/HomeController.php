<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $data = [
            'about_us' => AboutUs::find(1)
        ];

        return view('home', $data);
    }
}
