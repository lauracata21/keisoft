<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $noticias=Noticia::all();
        return view ('home', compact('noticias'));
    }
}
