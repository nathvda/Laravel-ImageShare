<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\CreateImageRequest;

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
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateImageRequest $request)
    {

        try {
        
        $request->file('image');

        $filename = time() . '-' . $request['title'] . '.' . $request->file('image')->extension();
    
        $request->file('image')->move(public_path('images/assets'), $filename);

        Image::create([
            'user_id' => auth()->user()->id,
            'url' => $request['url'],
            'title' => $request['title'],
            'name' => $filename,
            'description' => $request['description']
        ]);


        }

        catch (\Exception $th){

        }


    
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        
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
        //
    }
}
