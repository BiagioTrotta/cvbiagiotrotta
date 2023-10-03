<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        $url = Storage::url('public/images/CV_Biagio_Trotta.pdf');
        return view('home', compact('url'));
    }
}
