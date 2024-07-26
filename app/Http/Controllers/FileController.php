<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use \Storage;
class FileController extends Controller
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
    public function store(Request $request){
        //file validation rules
        $rules = [
            'name' => 'nullable|string',
            'type' => 'string',
            'file' => 'required'
        ];

        // dd($request->file('file'));

        $request->validate($rules);
        $file = new File();
        $file->ref_id = $request->plan;
        $file->name = $request->name ? $request->name : "File";
        $file->file = '/uploads/'.$request->file("file")->store('files/plans');
        $file->save();

        return redirect()->back()->with("sessionmessage", ['title' => 'success', "message" => 'Plan File uploaded successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file){
        $file = File::where("id", $file->id)->first();
        if($file->delete()){
            if (Storage::exists(\str_replace('/uploads/','', $file->file))) {
                Storage::delete(\str_replace('/uploads/','', $file->file));
            }
            return redirect()->back()->with("sessionmessage", ['title' => 'success', "message" => 'file deleted']);
        }
    }
}
