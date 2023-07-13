<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'course' => Course::count(),
            'material' => Material::count()
        ]);
    }
}
