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
        $path = $file->store('testimoni', 'public');
        
        $testimoni = new Testimoni();
        $testimoni->link_image = $path;
        $testimoni->save();

        return response()->json(['message' => 'Testimoni Berhasil Ditambahkan!'], 201);
    }
    // Function untuk delete testimoni berdasarkan ID
    public function destroy($id){
        $testimoni = Testimoni::find($id);

        if (!$testimoni) {
            return response()->json(['message' => 'Testimoni Tidak Ditemukan!'], 404);
        }

        // Hapus file yang tersimpan di storage
        Storage::delete($testimoni->path);
        
        // Hapus record dari database
        $testimoni->delete();

        return response()->json(['message' => 'Testimoni Berhasil Dihapus!'], 200);
    }

    // Function untuk update testimoni berdasarkan ID
    public function update(Request $request, $id){
        $testimoni = Testimoni::find($id);

        if (!$testimoni) {
            return response()->json(['message' => 'Testimoni Tidak Ditemukan!'], 404);
        }

        $request->validate([
            'file' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('file')) {
            // Hapus file lama
            Storage::delete($testimoni->path);

            // Simpan file baru
            $file = $request->file('file');
            $path = $file->store('testimoni', 'public');
            $testimoni->link_image = $path;
        }

        // Simpan perubahan
        $testimoni->save();

        return response()->json(['message' => 'Testimoni Berhasil Diupdate!'], 200);
    }

    public function UpdateView($id) {
        $testimoni = Testimoni::find($id);
        
        // Debugging untuk memastikan data yang ditemukan
        // dd($testimoni);
    
        if (!$testimoni) {
            return redirect()->route('admin.testimoni.index')->with('error', 'Testimoni tidak ditemukan');
        }
        return view('admin.testimoni.editTestimoni', compact('testimoni'));
    }    

    // Function untuk mendapatkan data testimoni berdasarkan ID
    public function show($id){
        $testimoni = Testimoni::find($id);

        if (!$testimoni) {
            return response()->json(['message' => 'Testimoni Tidak Ditemukan!'], 404);
        }

        return response()->json($testimoni, 200);
    }

}
