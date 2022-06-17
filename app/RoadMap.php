<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class RoadMap extends Model
{
    use SoftDeletes;

    public $table = 'road_map';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'day',  //Requested By:
        'date',
        'out_time',
        'start_time',
        'end_time',
        'in_time',
        'labor',
        'travel',
        'standby',
        'id_service',
        'porcentaje',
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

    public function services_roadmap(){
        return $this->hasMany(Service::class, 'id_service','id');
    }
}
