<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::latest()->paginate(5);
        return view('categories/index', compact('categories'))->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
            'name'              => 'required',
           //'url'              => 'required',
            'type'              => 'required',
            'price'             => 'required',
            'seo'               => 'required',
            'height'            => 'required',
            'length'            => 'required',
            'width'             => 'required',
            'image'             =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(

            'name'                  => request('name'),
            //'url'                 => request('url'),
            'type'                  => request('type'),
            'price'                 => request('price'),
            'seo'                   => request('seo'),
            'height'                => request('height'),
            'length'                => request('length'),
            'width'                 => request('width'),
            'image'                 => $new_name
        );

        category::create($form_data);

        return redirect('categories')->with('success', 'Data Added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = category::findOrFail($id);
        return view('categories.edit',compact('categories'));
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
                'name'           =>  'required',
                //'url'          =>  'required',
                'type'           =>  'required',
                'price'          =>  'required',
                'seo'            =>  'required',
                'height'         => 'required',
                'length'         => 'required',
                'width'          => 'required',
                'image'          =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'name'              => 'required',
                //'url'             => 'required',
                'type'              => 'required',
                'price'             => 'required',
                'seo'               => 'required',
                'height'            => 'required',
                'length'            => 'required',
                'width'             => 'required',
                'image'             =>  'required|image|max:2048'

            ]);
        }

        $form_data = array(
            'name'                   => request('name'),
            //'url'                  => request('url'),
            'type'                   => request('type'),
            'price'                  => request('price'),
            'seo'                    => request('seo'),
            'height'                => request('height'),
            'length'                => request('length'),
            'width'                 => request('width'),
            'image'                  =>   $image_name
        );

        category::whereId($id)->update($form_data);

        return redirect('categories')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = category::findOrFail($id);
        $categories->delete();

        return redirect('categories')->with('success', 'Data is successfully deleted');
    }
}
