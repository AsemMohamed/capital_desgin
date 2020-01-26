<?php

namespace App\Http\Controllers;

use App\Album;
use App\Product;
use Illuminate\Http\Request;

class albumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $albums = Album::latest()->paginate(5);
        return view('albums/index', compact('albums'))->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();

        return view('albums.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required',
            'category'       => 'required',
            'seo'            => 'required',
            'image'          =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(

            'name'          => request('name'),
            'category'      => request('category'),
            'seo'           => request('seo'),
            'product_id'           => request('product_id'),
            'image'         => $new_name
        );

        Album::create($form_data);

        return redirect('albums')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $albums = Album::findOrFail($id);
        return view('albums.edit',compact('albums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'name'              =>  'required',
                'category'          =>  'required',
                'seo'               => 'required',
                'image'             =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'name'              => 'required',
                'category'          => 'required',
                'seo'               => 'required',
                'image'             =>  'required|image|max:2048'
            ]);
        }

        $form_data = array(
            'name'                  => request('name'),
            'category'              => request('seo'),
            'seo'                   => request('category'),
            'product_id'            => request('product_id'),
            'image'                 =>   $image_name
        );

        Album::whereId($id)->update($form_data);
        return redirect('albums')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $albums = Album::findOrFail($id);
        $albums->delete();
        return redirect('albums')->with('success', 'Data is successfully deleted');
    }
}
