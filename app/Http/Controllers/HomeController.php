<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class HomeController extends Controller {

    public function index() {

        $data = [
            'tripods' => Gallery::all(),
        ];

        return view ('welcome', $data);
    }
}
