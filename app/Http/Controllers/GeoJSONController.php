<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeoJSONController extends Controller
{
    public function index()
    {
        $path = public_path('assets/jatim.geojson');
        $geojson = json_decode(file_get_contents($path), true);

        return response()->json($geojson);
    }
}x`
