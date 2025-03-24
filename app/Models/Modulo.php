<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasUuids;
    
    /**

     * The attributes that are mass assignable.

     *

     * @var array<int, string>

     */

    protected $fillable = ['curso_id', 'modulo_nome', 'modulo_ordem'];

    /**
     * Relacionamento: Um módulo pertence a um curso.
     */
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}
