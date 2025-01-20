<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Portofolio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{    
    public function Store(Request $request){
        // validate input
        // dd($request->all());

        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'date' => 'required|date',
            'category' => 'required|string|max:100',
            'luas' => 'required|numeric|min:0',
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kontraktor' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        // save to db
        $portofolio = new Portofolio();
        $portofolio->name = $validate['name'];
        $portofolio->type = $validate['type'];
        $portofolio->date = $validate['date'];
        $portofolio->category = $validate['category'];
        $portofolio->luas = $validate['luas'];
        $portofolio->kontraktor = $validate['kontraktor'];
        $portofolio->deskripsi = $validate['deskripsi'];
        $portofolio->save();

        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $file) {
                $path = $file->store('portofolio', 'public');
                $portofolio->fotos()->create([
                    'path' => $path,
                ]);
            }
        }

        // dd($request->file('foto'));
        // dd($request->all(), $request->file('foto'));
        // redirect
        return response()->json(['success' => 'Data Portofolio Berhasil Disimpan!', 'data' => $portofolio],201);
    }

    public function get(Request $request){
        $portofolio = Portofolio::with('fotos')->get();
        // return response()->json(['data'=>$portofolio],200);

        // $images = File::files(public_path('assets/img/porto'));
        return view('pages.project', compact('portofolio'));
    }

    public function edit(Request $request, $id){
        // dd($request->all());
        // dd($request->hapus_foto);
        $portofolio = Portofolio::findOrFail($id);
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'date' => 'required|date',
            'category' => 'required|string|max:100',
            'luas' => 'required|numeric|min:0',
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hapus_foto' => 'nullable|array',
            'hapus_foto.*' => 'integer|exists:fotos,id',
            'kontraktor' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);


        $portofolio->update($validate);

        if($request->filled('hapus_foto')) {
            foreach ($request->hapus_foto as $fotoId) {
                $foto = $portofolio->fotos()->find($fotoId);
                if ($foto) {
                    $path = public_path('storage/' . $foto->path);
                    if (File::exists($path)) {
                        unlink($path);
                    }
                    $foto->delete();
                }
            }
        }

        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $file) {
                $path = $file->store('portofolio', 'public');
                $portofolio->fotos()->create([
                    'path' => $path,
                ]);
            }
        }

        return response()->json(['success' => 'Data Portofolio Berhasil Diupdate!', 'data' => $portofolio],201);
    }

    public function delete($id){
        $portofolio = Portofolio::findOrFail($id);
        
        foreach ($portofolio->fotos as $foto) {
            // delete the file from storage
            $path = public_path('storage/' . $foto->path);
            if (File::exists($path)) {
                unlink($path);
            }
            $foto->delete();
        }

        $portofolio->delete();
        return response()->json(['success' => 'Data Portofolio Berhasil Dihapus!'],201);
    }

    public function getById($id){
        // Ambil portofolio berdasarkan ID dan termasuk relasi fotos
        $portofolio = Portofolio::with('fotos')->findOrFail($id);
        $allportofolio = Portofolio::with('fotos')->get();
        $relatedPortofolio = Portofolio::where('category', $portofolio->category)
                                ->where('id', '!=', $id)
                                ->get();
        // return response()->json(['data' => $portofolio], 200);
        return view('pages.project-detail', compact('portofolio', 'allportofolio', 'relatedPortofolio'));

    }

    public function IndexView (Request $request) {
        $portofolio = Portofolio::with('fotos')->get();
        return view('admin.portofolio.indexPortofolio', compact('portofolio'));
    }

    public function StoreView() {
        return view('admin.portofolio.storePortofolio');
    }

    public function UpdateView($id) {
        $portofolio = Portofolio::with('fotos')->findOrFail($id);
        // dd($portofolio);
        return view('admin.portofolio.editPortofolio', compact('portofolio'));
    }

}
