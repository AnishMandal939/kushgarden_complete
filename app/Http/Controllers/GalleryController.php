<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use File;
use App\Http\Requests\GalleryStoreRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::latest()->get();
		return view('gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryStoreRequest $request)
    {
        $attributes = self::attributes($type = 'save');
		$attributes->save();
		return redirect()->back()->with('message', 'gallery added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        $galleries = Gallery::latest()->get();
        return view('gallery',compact('galleries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $image_path = public_path('assets/img/gallery/').$gallery->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
		$gallery->delete();
		return redirect()->back()->with('message', 'Data Deleted.');        
    }
	public static function attributes($type = false)
	{
		if ($type) {
			$attributes = new Gallery();
		}
		$attributes['is_current'] = request('is_current');
		if (request()->has('image')) {
			$file = request()->file('image');
			$name = $file->getClientOriginalName();
			$filename = time() . '.' . $name;
			$file->move(public_path() . '/assets/img/gallery/', $filename);
			$attributes['image'] = trim($filename);
		}
		return $attributes;
	}    
}
