<?php

namespace App\Http\Controllers;

use App\arrival;
use Illuminate\Http\Request;

class arrivalsController extends Controller
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
        $arrivals = arrival::latest()->paginate(5);
        return view('arrivals/index', compact('arrivals'))->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('arrivals.create');
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
            'name'               =>  'required',
            'price'              =>  'required',
            //'url'          => 'required',
            'type'           => 'required',
            'seo'            => 'required',
            'height'         => 'required',
            'length'         => 'required',
            'width'          => 'required',
            'image'              =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(

            'name'                  => request('name'),
            'price'                 => request('price'),
            //'url'                 => request('url'),
            'type'                  => request('type'),
            'seo'                   => request('seo'),
            'height'                => request('height'),
            'length'                => request('length'),
            'width'                 => request('width'),
            'image'                 => $new_name
        );

        arrival::create($form_data);

        return redirect('arrivals')->with('success', 'Data Added successfully.');
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
        $arrivals = arrival::findOrFail($id);
        return view('arrivals.edit',compact('arrivals'));
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
                'seo'            => 'required',
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

                'image'           =>  'image|max:2048'

            ]);
        }

        $form_data = array(
            'name'           =>   request('name'),
            'price'          =>   request('price'),
            //'url'          => request('url'),
            'type'           => request('type'),
            'seo'            => request('seo'),
            'height'         => request('height'),
            'length'         => request('length'),
            'width'          => request('width'),
            'image'          =>   $image_name
        );

        arrival::whereId($id)->update($form_data);

        return redirect('arrivals')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arrivals = arrival::findOrFail($id);
        $arrivals->delete();

        return redirect('arrivals')->with('success', 'Data is successfully deleted');
    }
}
