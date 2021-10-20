<?php

namespace App\Services;

use App\Models\Editora;

class EditoraRepository
{
    public function getAll()
    {
        return Editora::all();
    }
}
