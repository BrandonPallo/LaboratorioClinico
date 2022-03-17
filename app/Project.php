<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Project extends Model
{
    use SoftDeletes;

    public $table = 'projects';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'revisado',
        'informe',
        'felaboracion',
        'frevision',
        'rev',
        //'hoja',
        'empresa',
        'proyecto',
        'codigo_proy',
        'ubicacion',
        'fentrega',
        'documento' ,
        'revisado_por' ,
        'nombre_documento',

        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
