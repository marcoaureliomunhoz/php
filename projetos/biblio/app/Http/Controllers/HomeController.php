<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    protected $editoraRepository;

    public function __construct(
        \App\Services\EditoraRepository $editoraRepository
    )
    {
        $this->editoraRepository = $editoraRepository;
    }

    public function index() {
        $editoras = $this->editoraRepository->getAll();
        //dd($editoras);
        return view('index', compact('editoras'));
    }
}
