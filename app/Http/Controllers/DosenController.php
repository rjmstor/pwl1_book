<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()

    {
        $data = ["layung", "endah", "permata"];
        return view('dosen', ['nama' => $data]);
    }
}
