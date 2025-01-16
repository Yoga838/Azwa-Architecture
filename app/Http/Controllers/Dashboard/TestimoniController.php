<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    // Function untuk delete testimoni berdasarkan ID
    public function destroy($id){
        $testimoni = Testimoni::find($id);

        if (!$testimoni) {
            return response()->json(['message' => 'Testimoni Not Found'], 404);
        }

        // Hapus file yang tersimpan di storage
        Storage::delete($testimoni->path);
        
        // Hapus record dari database
        $testimoni->delete();

        return response()->json(['message' => 'Testimoni Deleted Successfully'], 200);
    }

    // Function untuk update testimoni berdasarkan ID
    public function update(Request $request, $id){
        $testimoni = Testimoni::find($id);

        if (!$testimoni) {
            return response()->json(['message' => 'Testimoni Not Found'], 404);
        }

        $request->validate([
            'file' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('file')) {
            // Hapus file lama
            Storage::delete($testimoni->path);

            // Simpan file baru
            $file = $request->file('file');
            $path = $file->store('public/testimoni');
            $testimoni->path = $path;
        }

        // Simpan perubahan
        $testimoni->save();

        return response()->json(['message' => 'Testimoni Updated Successfully'], 200);
    }

    // Function untuk mendapatkan data testimoni berdasarkan ID
    public function show($id){
        $testimoni = Testimoni::find($id);

        if (!$testimoni) {
            return response()->json(['message' => 'Testimoni Not Found'], 404);
        }

        return response()->json($testimoni, 200);
    }

}
