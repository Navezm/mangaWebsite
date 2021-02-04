<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function create(){
        return view('pages.formulaire');
    }
    public function store(Request $request){
        
        return redirect()->back();
    }
}
