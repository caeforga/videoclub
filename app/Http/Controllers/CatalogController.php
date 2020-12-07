<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function getIndex() {
		return view('catalog.index')->with('arrayPeliculas', DB::table('movies')->get());
    }
    public function getShow($id) {
		return view('catalog.show')->with('pelicula', Movie::findOrFail($id));
    }
    public function getCreate() {
        return view('catalog.create');
    }
    public function getEdit($id) {
        return view('catalog.edit')->with('pelicula', Movie::findOrFail($id));
    }
}
