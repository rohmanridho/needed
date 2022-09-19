<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $industries = Industry::take(4)->get();
        return view('pages.home', [
            'industries' => $industries
        ]);
    }
}