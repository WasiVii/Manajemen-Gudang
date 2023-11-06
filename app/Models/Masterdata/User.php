<?php

namespace App\Models\Masterdata;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
        'id',
        'name',
        'username',
        'password',
        'role_id',
        'user_date_of_birth',
        'user_place_of_birth',
        'gender_id',
        'religion_id',
        'user_domisili_address',
        'user_provinsi',
        'user_kecamatan',
        'user_city',
        'user_postal_code',
        'user_phone_number',
        "login_date"
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Masterdata\Role', 'role_id', 'role_id');
    }

    public function gender()
    {
        return $this->belongsTo('App\Models\Masterdata\Gender', 'gender_id', 'gender_id');
    }

    public function religion()
    {
        return $this->belongsTo('App\Models\Masterdata\Religion', 'religion_id', 'religion_id');
    }
}
