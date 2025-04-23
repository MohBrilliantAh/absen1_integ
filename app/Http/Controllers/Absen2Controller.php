<?php

namespace App\Http\Controllers;

use App\Models\Absen2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Absen2Controller extends Controller
{
    public function index()
    {
        return response()->json(Absen2::all());
    }

    public function store(Request $request)
    {
        $response = Http::get('http://127.0.0.1:8000/api/users/' . $request->user_id);

        if ($response->status() == 404) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $absen2 = Absen2::create($request->all());
        return response()->json($absen2, 201);
    }
}
