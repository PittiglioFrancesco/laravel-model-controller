<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function comics() {

        $comics = config('comics');
    
        $data = ['fumetti' => $comics];
    
        return view('comics', $data);
    }

    public function show($id) {

        $comics = config('comics');
    
        $data = ['fumetto' => $comics[$id]];
    
        return view('detail', $data);
    }
}
