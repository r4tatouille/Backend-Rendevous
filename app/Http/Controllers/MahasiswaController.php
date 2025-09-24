<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $data = Mahasiswa::all();
        return response()->json($data);
    }
    public function store(Request $request) {
        $request->validate([
            "full_name" => "required|string|min:25",
            "age" => "required|integer|min_digits:2",
            "full_address" => "required|string|min:35",
        ]);
Mahasiswa::create($request->all());
return response()->json([
    "message"=> "Data mahasiswa berhasil disimpan",
]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            "full_name" => "required|string|min:25",
            "age" => "required|integer|min:",
            "full_address" => "required|string|min:35",
        ]);

        Mahasiswa::findOrFail($id)->update($request->all());

        return response()->json([
            "message"=> "Data mahasiswa berhasil diupdate",
        ]);
    }
    public function destroy($id) {
        Mahasiswa::findOrFail($id)->delete();
        return response()->json([
            "message"=> "Data mahasiswa berhasil dihapus",
        ]);
    }

}
