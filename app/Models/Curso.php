<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasUuids;
    
    /**

     * The attributes that are mass assignable.

     *

     * @var array<int, string>

     */

    protected $fillable = ['curso_nome', 'curso_carga_horaria'];
}
