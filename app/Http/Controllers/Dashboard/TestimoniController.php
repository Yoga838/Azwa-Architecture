<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index(){
        $testimoni = Testimoni::all();

        return view('admin.testimoni.indexTestimoni', compact('testimoni'));
    }
    public function indexStore() {
        return view('admin.testimoni.storeTestimoni');
    }
    public function store(Request $request){
        
        $request->validate([
            'file'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $file = $request->file('file');
        $path = $file->store('public/testimoni');
        
        $testimoni = new Testimoni();
        $testimoni->path = $path;
        $testimoni->save();

        return response()->json(['message' => 'Testimoni Created Successfully'], 201);
    }
}
