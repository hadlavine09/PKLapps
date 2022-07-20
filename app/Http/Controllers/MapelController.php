<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{

    public function index(){

        $mapel = Mapel::all();
        return view('post.mapel',compact('mapel'));
    }
}
