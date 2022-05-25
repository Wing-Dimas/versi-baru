<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index(){
        $data = Barang::get();
        return view("katalog", compact("data"));
    }
}
