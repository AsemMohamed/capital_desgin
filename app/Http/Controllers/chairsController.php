<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class chairsController extends Controller
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
        $chairs = Product::where('category','chairs')->get();/*latest()->paginate(5);*/
        return view('chairs/index', compact('chairs'))/*->with('i', (request()->input('page',1) - 1) * 5)*/;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chairs.create');
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
            'price'              => 'required',
            //'url'              => 'required',
            'type'              => 'required',
            'category'          => 'required',
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
            'price'                 => request('price'),
            //'url'                 => request('url'),
            'type'                  => request('type'),
            'category'                  => request('category'),
            'seo'                   => request('seo'),
            'height'                => request('height'),
            'length'                => request('length'),
            'width'                 => request('width'),
            'image'                 => $new_name
        );

        Product::create($form_data);

        return redirect('chairs')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chairs = Product::findOrFail($id);
        return view('chairs.edit',compact('chairs'));
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
                'price'          =>  'required',
                //'url'          =>  'required',
                'type'           =>  'required',
                'category'           =>  'required',
                'seo'               => 'required',
                'height'            => 'required',
                'length'            => 'required',
                'width'             => 'required',
                'image'          =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'name'              => 'required',
                'price'             => 'required',
               // 'url'             => 'required',
                'type'              => 'required',
                'category'              => 'required',
                'seo'               => 'required',
                'height'            => 'required',
                'length'            => 'required',
                'width'             => 'required',
                'image'             =>  'required|image|max:2048'

            ]);
        }

        $form_data = array(
            'name'                  => request('name'),
            'price'                 => request('price'),
            //'url'                 => request('url'),
            'type'                  => request('type'),
            'category'              => request('seo'),
            'seo'                   => request('category'),
            'height'                => request('height'),
            'length'                => request('length'),
            'width'                 => request('width'),
            'image'                 =>   $image_name
        );

        Product::whereId($id)->update($form_data);

        return redirect('chairs')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chairs = Product::findOrFail($id);
        $chairs->delete();

        return redirect('chairs')->with('success', 'Data is successfully deleted');
    }
}
