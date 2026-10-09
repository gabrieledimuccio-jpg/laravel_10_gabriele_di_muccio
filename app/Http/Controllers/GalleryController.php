<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
$galleries = Gallery::all();
return view('gallery.index', compact('galleries'));
}

/**
* Show the form for creating a new resource.
*/
public function create()
{

$galleries = Gallery::where('name', auth()->user()->name)->latest()->get();

return view('gallery.create', compact('galleries'));
}

/**
* Store a newly created resource in storage.
*/

public function store(Request $request)
{
$request->validate([
'full_name' => 'required|string|max:255',
'location'  => 'required|string|max:255',
'camera_settings' => 'nullable|string|max:1000',
'image'     => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
]);

$fileName = time() . '_' . $request->file('image')->getClientOriginalName();

$request->file('image')->move(public_path('img'), $fileName);

Gallery::create([
'name'  => auth()->user()->name,
'place' => $request->location,
'camera_settings' => $request->camera_settings,
'img'   => 'img/' . $fileName, 
]);

return redirect()->back()->with('message', 'Foto inserita nella galleria');
}



/**
* Display the specified resource.
*/
public function show(Gallery $gallery)
{
return view('gallery.show', compact('gallery'));
}

/**
* Show the form for editing the specified resource.
*/
public function edit(Gallery $gallery)
{
//
}

/**
* Update the specified resource in storage.
*/
public function update(Request $request, Gallery $gallery)
{
//
}

/**
* Remove the specified resource from storage.
*/
public function destroy(Gallery $gallery)
{
//
}
}
