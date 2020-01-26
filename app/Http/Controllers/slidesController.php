<?php

namespace App\Http\Controllers;

use App\slider;
use App\department;
use App\arrival;
use App\category;
use Illuminate\Http\Request;

class slidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = slider::all();
        $departments = department::all();
        $arrivals = arrival::all();
        $categories = category::all();
        return view('index', compact('slides', 'departments', 'arrivals', 'categories'));
    }


}
