<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;

class slidersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    /*public function take()
    {
        $sliders = slider::all();
        return view('user/slider', compact($sliders, 'sliders'));
    }*/
    public function index()
    {
        $sliders = slider::latest()->paginate(5);
        return view('sliders/index', compact('sliders'))->with('i', (request()->input('page',1) - 1) * 5);
    }
    public function create()
    {
        return view('sliders.create');
    }
    public function store(request $request)
    {
        $request->validate([
            'image'               =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(

            'title'                  => request('title'),
            'url'                    => request('url'),
            'description'            => request('description'),
            'image'                  => $new_name
        );

        slider::create($form_data);

        return redirect('sliders')->with('success', 'Data Added successfully.');
    }
    public function edit($id)
    {
        $sliders = slider::findOrFail($id);
        return view('sliders.edit',compact('sliders'));
    }
    public function update(request $request , $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'           =>  'required',
                'image'           =>  'image|max:2048'
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
            'title'                  => request('title'),
            'url'                    => request('url'),
            'description'            => request('description'),
            'image'            =>   $image_name
        );

        slider::whereId($id)->update($form_data);

        return redirect('sliders')->with('success', 'Data is successfully updated');
    }
    public function destroy($id)
    {
        $sliders = slider::findOrFail($id);
        $sliders->delete();

        return redirect('sliders')->with('success', 'Data is successfully deleted');
    }
}
