<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function index(Request $request)
    {
        $konten = Konten::get();
        return view('crud.index', [
            'konten' => $konten
        ]);
    }

    public function create(Request $request)
    {
        # code...
    }

    public function store(Request $request)
    {
        # code...
    }

    public function edit(Request $request, Konten $konten)
    {
        # code...
    }

    public function update(Request $request, Konten $konten)
    {
        # code...
    }

    public function delete(Request $request, Konten $konten)
    {
        # code...
    }
}
