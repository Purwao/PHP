<?php

namespace App\Http\Controllers;

use App\Models\pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function index()
            {
                $data = pelajaran::all();

                return response()->json($data);


            }

}
