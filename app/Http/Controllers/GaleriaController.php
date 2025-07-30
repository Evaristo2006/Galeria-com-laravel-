<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    //
    public function index(){
        $images = Galeria::latest()->get();
        return view('gallery.index', compact('images'));

    }

    public function create(){
        return view('gallery.create');

    }

    public function store(Request $request){
          $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'title' => 'nullable|string|max:255'
        ]);

        $path = $request->file('image')->store('public/images');
        $title = $request->title;

        Galeria::create([
            'title' => $request->title,
            'path' => str_replace('public/', 'storage/', $path),
        ]);
    return redirect()->route('gallery.index')->with('sucess','Imagem criada com sucesso');
}
}
