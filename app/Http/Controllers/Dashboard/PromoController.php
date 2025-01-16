<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function IndexView() {
        return view('admin.promo.indexPromo');
    }
    public function StoreView() {
        return view('admin.promo.storePromo');
    }
    public function UpdateView($id) {
        $promo = Promo::find($id);
        $promodesc = $promo->description = json_decode($promo->description, true);
        return view('admin.promo.editPromo', compact('promo', 'promodesc'));
    }
    // get all promo
    public function index(){
        $promo = Promo::all();
        return response()->json($promo);
    }
    // get promo by id
    public function show($id){
        $promo = Promo::find($id);
        if(!$promo){
            return response()->json(['error' => 'Promo Tidak Ditemukan!'], 404);
        }
        return response()->json($promo);
    }
    // create new promo
    public function store(Request $request){
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'actual_price' => 'required|numeric|min:0',
            'description' => 'required|array',
            'description.*' => 'required|string',
            'ondisplay' => 'required|boolean',
        ]);

        // $promo = Promo::create($validate);

        $promo = new Promo();
        $promo->title = $request->title;
        $promo->price = $request->price;
        $promo->actual_price = $request->actual_price;
        $promo->description = json_encode($request->description);
        $promo->ondisplay = $request->ondisplay;
        $promo->save();
        return response()->json(['message' => 'Promo Berhasil Ditambahkan!', 'data' => $promo], 201);
    }
    // update promo by id
    public function update(Request $request, $id){
        $promo = Promo::find($id);
        if (!$promo) {
            return response()->json(['error' => 'Promo Tidak Ditemukan!'], 404);
        }

        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'actual_price' => 'required|numeric|min:0',
            'description' => 'required|array',
            'description.*' => 'required|string',
            'ondisplay' => 'required|boolean',
        ]);

        // Update properties manually, including encoding the description array
        $promo->title = $request->title;
        $promo->price = $request->price;
        $promo->actual_price = $request->actual_price;
        $promo->description = json_encode($request->description);
        $promo->ondisplay = $request->ondisplay;
        $promo->save();

        return response()->json(['message' => 'Promo Berhasil Diperbarui!', 'data' => $promo], 200);
    }

    // delete promo by id
    public function destroy($id){
        $promo = Promo::find($id);
        if(!$promo){
            return response()->json(['error' => 'Promo Tidak Ditemukan!'], 404);
        }
        $promo->delete();
        return response()->json(['message' => 'Promo Berhasil Dihapus!'], 200);
    }
}
