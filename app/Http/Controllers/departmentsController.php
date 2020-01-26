<?php

namespace App\Http\Controllers;

use App\department;
use Illuminate\Http\Request;

class departmentsController extends Controller
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
        $departments = department::all();
        return view('departments.index', compact('departments'))->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
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
            'name'               => 'required',
            'url'                => 'required',
            'seo'                => 'required',
            'image'              =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(

            'name'                  => request('name'),
            'url'                  => request('url'),
            'seo'                  => request('seo'),

            'image'                  => $new_name
        );

        department::create($form_data);

        return redirect('departments')->with('success', 'Data Added successfully.');
    }
    public function show()
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
        $departments = department::findOrFail($id);
        return view('departments.edit',compact('departments'));
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
            'name'            => request('name'),
            'url'             => request('url'),
            'seo'             => request('seo'),
            'image'           =>   $image_name
        );

        department::whereId($id)->update($form_data);

        return redirect('departments')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$departments = department::findOrFail($id);
        $departments->delete();

        return redirect('departments')->with('success', 'Data is successfully deleted');*/
    }

    public function sendAll(){
        $departments = department::all()->count();

        return view('admin.home', compact('departments'));

    }
}
