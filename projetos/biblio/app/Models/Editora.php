<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property $id
 * @property $nome
 */
class Editora extends Model
{
    use HasFactory;

    protected $table = 'editora';

}
