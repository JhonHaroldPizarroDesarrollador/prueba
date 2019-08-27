<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'form';

    protected $fillable = [
        'nombre', 'telefono', 'correo', 'asunto', 'mensaje',
    ];
}
