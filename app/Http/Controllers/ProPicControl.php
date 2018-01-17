<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ProPicControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //profile pic
        // Handle upload
        if ($request->hasFile('profile_pic')) {
            // Get filename with extension
            $fileNameWithExt = $request->file('profile_pic')->getClientOriginalName();

            // Get only name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get only ext
            $ext = $request->file('profile_pic')->getClientOriginalExtension();

            //Final name
            $fileName2store = $filename.'_'.time().'.'.$ext;

            //Upload img
            $path = $request->file('profile_pic')->storeAs('public/profile_pics', $fileName2store);
        } else {
            $fileName2store = 'noimage.jpg';
        }

        //Create img
        $usersId = auth()->user()->id;
        $user = User::find($usersId);
        $user->profile_pic = $fileName2store;
        $user->save();

        return redirect('/home')->with('success', 'Post Created');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
