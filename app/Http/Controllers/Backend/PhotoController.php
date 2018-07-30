<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->file('avatar')->store('pdf');
        $file = request()->file('avatar');
        $ext = $file->extension();
        $name = rand(11111,99999).'.'.$ext;
        $path = $file->storeAs('avatars', $name);
        $contents = \Storage::get('avatars/36610.jpeg');
        return $contents;
        return $path;
        // if ($request->file('avatar')->isValid()){
        //
        //       $imagePath = $request->file('avatar')->store('public');
        //       $image = Image::make(Storage::get($imagePath))->resize(320,240)->encode();
        //       Storage::put($imagePath,$image);
        //
        //       $imagePath = explode('/',$imagePath);
        //
        //       $imagePath = $imagePath[1];
        //
        //       $myTheory->image = $imagePath;
        //
        //       }
        //
        //       $myTheory->save();

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
