<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class AboutUsController extends Controller
{
    public function index(Request $request)
    {
        $rooms = Room::all();
        
        return view('rooms.index', compact('rooms'));
    }
}
