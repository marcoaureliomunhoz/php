<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index() {
        $editoras = [
            "editora 1",
            "editora 2"
        ];
        return view('index', compact('editoras'));
    }
}
