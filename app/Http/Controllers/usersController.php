<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class usersController extends Controller
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
        $users = User::all();
        return view('users/index', compact('users'))->with('i', (request()->input('page',1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'email'              =>  'required',
            'password'           =>  'required'
        ]);

        $form_data = array(
            /*'title'          =>   $request->title,
            'url'            =>   $request->url(),
            'description'    =>   $request->description,
            'image'          =>   $new_name*/

            'name'                  => request('name'),
            'email'                 => request('email'),
            'password'              => request('password'),

        );

        user::create($form_data);

        return redirect('users')->with('success', 'Data Added successfully.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = user::findOrFail($id);
        return view('users.edit',compact('users'));
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
                'email'          =>  'required',
                'password'       =>  'required',

            ]);
        }
        else
        {
            $request->validate([

            ]);
        }

        $form_data = array(
            'name'                  => request('name'),
            'email'                 => request('email'),
            'password'              => request('password'),
        );

        user::whereId($id)->update($form_data);

        return redirect('users')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = user::findOrFail($id);
        $users->delete();

        return redirect('users')->with('success', 'Data is successfully deleted');
    }
}
