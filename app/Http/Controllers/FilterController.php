<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filter(Request $request)
    {
        // Mendapatkan data yang dikirim dari formulir
        $selectedValues = $request->input('selectedValues');

        // Validasi dan pemrosesan data jika diperlukan
        // Misalnya, konversi JSON menjadi array
        $selectedValuesArray = json_decode($selectedValues, true);

        // Kirim data yang diproses ke halaman baru
        return view('Map.FilteredMap')->with('selectedValues', $selectedValuesArray);
    }
}
