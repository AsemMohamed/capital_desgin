<?php

namespace App\Http\Controllers;

use App\design;
use Illuminate\Http\Request;

class designsController extends Controller
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
        $designs = design::latest()->paginate(5);
        return view('designs/index', compact('designs'))->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('designs.create');
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
            'type'              => 'required',
            'image'             =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(

            'name'                  => request('name'),
            'price'                   => request('price'),
            'type'                  => request('type'),
            'image'                 => $new_name
        );

        design::create($form_data);

        return redirect('designs')->with('success', 'Data Added successfully.');
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
        $designs = design::findOrFail($id);
        return view('designs.edit',compact('designs'));
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
                'name'             =>  'required',
                'price'            =>  'required',
                'type'             =>  'required',
                'image'            =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'name'              => 'required',
                'price'             => 'required',
                'type'              => 'required',
                'image'             =>  'required|image|max:2048'

            ]);
        }

        $form_data = array(
            'name'                   => request('name'),
            'price'                  => request('price'),
            'type'                   => request('type'),
            'image'                  =>   $image_name
        );

        design::whereId($id)->update($form_data);

        return redirect('designs')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $designs = design::findOrFail($id);
        $designs->delete();

        return redirect('designs')->with('success', 'Data is successfully deleted');
    }
}
