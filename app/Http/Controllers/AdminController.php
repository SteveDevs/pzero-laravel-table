<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $jsonData = json_decode(file_get_contents(storage_path('app/data.json')), true);

        return view('admin.index', compact('jsonData'));
    }
}
