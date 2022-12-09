<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //

    public function create()
    {
        return view('images.create');

    }

    public function store(Request $request)
    {
        $path = $request->file('image')->store('images');

        return $path;

    }

    public function show(Image $image)
    {

    }
}
