<?php

/*

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function comics() {

        $fumetti = config('comics');
        
        return view('comics', compact('fumetti'));
    }

    public function show($id) {

        $comics = config('comics');
    
        $data = ['fumetto' => $comics[$id]];
    
        return view('detail', $data);
    }
}

*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function comics() {

        $fumetti = Comic::all();
        
        return view('comics', compact('fumetti'));
    }

    public function show($id) {

        $comics = Comic::where('id', $id);
        
        return view('detail', compact('comics'));
    }
}

