<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|unique:tags,name|max:255',
        ]);

        Tag::create($data);
        return redirect()->route('tags.index')->with('success', 'Tag created successfully.');
    }
}
