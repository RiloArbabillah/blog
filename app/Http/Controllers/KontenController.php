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
        return view('crud.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'judul' => ['required', 'max:200'],
            'konten' => ['required'],
        ]);
        
        Konten::create($input);
        return redirect()->route('crud.index');
    }

    public function edit(Request $request, Konten $konten)
    {
        return view('crud.edit', [
            'konten' => $konten
        ]);
    }

    public function update(Request $request, Konten $konten)
    {
        $input = $request->validate([
            'judul' => ['required', 'max:200'],
            'konten' => ['required'],
        ]);
        
        $konten->update($input);
        return redirect()->route('crud.index');
    }

    public function delete(Request $request, Konten $konten)
    {
        $konten->delete();
        return redirect()->back();
    }
}
