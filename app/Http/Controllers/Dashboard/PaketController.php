<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Paket;

class PaketController extends Controller
{
    // get all Paket 
    public function index(){
        $paket = Paket::all();
        return response()->json($paket);
    }
    // get paket by id
    public function show($id){
        $paket = Paket::find($id);
        if(!$paket){
            return response()->json(['error' => 'Paket Not Found'], 404);
        }
        return response()->json($paket);
    }
    // make new paket
    public function store(Request $request){
        $validate = $request->validate([
            'category' => 'required|string|max:255',
            'tier' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
        ]);

        $paket = Paket::create($validate);
        return response()->json(['message' => 'Paket Created Successfully', 'data' => $paket], 201);
    }
    // update paket by id
    public function update(Request $request, $id){
        $paket = Paket::find($id);
        if(!$paket){
            return response()->json(['error' => 'Paket Not Found'], 404);
        }
        $validate = $request->validate([
            'category' => 'required|string|max:255',
            'tier' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
        ]);
        $paket->update($validate);
        return response()->json(['message' => 'Paket Updated Successfully', 'data' => $paket], 200);
    }
    // delete paket by id
    public function destroy($id){
        $paket = Paket::find($id);
        if(!$paket){
            return response()->json(['error' => 'Paket Not Found'], 404);
        }
        $paket->delete();
        return response()->json(['message' => 'Paket Deleted Successfully'], 200);
    }
}
