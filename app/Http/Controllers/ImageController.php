<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use \Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //image validation rules
        $rules = [
            'name' => 'nullable|string',
            'type' => 'string',
            'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ];

        // dd($request->file('file'));

        $request->validate($rules);
        $image = new Image();
        $image->ref_id = $request->item;
        $image->type = isset($request->type) ? $request->type : "plan";
        $image->name = $request->name? $request->name : "Image";
        $image->image = '/uploads/'.$request->file("file")->store('images/plans');
        $image->save();

        return redirect()->back()->with("sessionmessage", ['title' => 'success', "message" => 'Plan Image uploaded successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        // dd($image);
         $image = Image::where("id", $image->id)->first();
        if($image->delete()){
            if (Storage::exists(\str_replace('/uploads/','', $image->image))) {
                Storage::delete(\str_replace('/uploads/','', $image->image));
            }
            return redirect()->back()->with("sessionmessage", ['title' => 'success', "message" => 'file deleted']);
        }
    }
}
