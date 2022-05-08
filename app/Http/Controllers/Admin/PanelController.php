<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeModel;

class PanelController extends Controller
{
    public function index()
    {
        $counts = HomeModel::all();
        return view('admin.index', compact('counts'));
    }
}
