<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function listing(){
        $DBmanga = Manga::all();
        return view('pages.mangatheque', compact('DBmanga'));
    }
}
