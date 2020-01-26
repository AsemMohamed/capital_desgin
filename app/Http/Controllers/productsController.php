<?php

namespace App\Http\Controllers;

use App\Album;
use App\design;
use App\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function chair()
    {

        $chairs = Product::where('category','chairs')->get();
        return view('chair', compact('chairs'));
    }
    public function sofa()
    {
        $sofas = Product::where('category','sofas')->get();
        return view('sofa', compact('sofas'));
    }
    public function bed()
    {
        $beds = Product::where('category','beds')->get();
        $images = Album::all()->where('product_id', $beds[0]->id);

        return view('bed', compact('beds','images'));
    }
    public function dining()
    {
        $dinings = Product::where('category','dinings')->get();
        return view('dining', compact('dinings'));
    }
    public function stchairs()
    {
        $st_chairs = product::where('category','st_chairs')->get();
        return view('st_chair', compact('st_chairs'));
    }
    public function table()
    {
        $tables = product::where('category','tables')->get();
        return view('table', compact('tables'));
    }
    public function design()
    {
        $designs = design::all();
        return view('designing', compact('designs'));
    }
}
