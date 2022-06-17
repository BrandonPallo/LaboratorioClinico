<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Service extends Model
{
    use SoftDeletes;

    public $table = 'services';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',  //Requested By:
        'company',
        'service_engineer',
        'date',
        'csr',
        'company_1',
        'company_2',
        'addres_1',
        'addres_2',
        'site_contact',
        'attention',
        'phone_1',
        'phone_2',
        'service_request',
        'id_user',
        'service_request_1',
        'service_request_2',
        'service_request_3',
        'service_request_4',
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
    public function users_services(){
        return $this->hasMany(User::class, 'id_user','id');
    }
}
