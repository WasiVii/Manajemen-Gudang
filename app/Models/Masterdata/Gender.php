<?php

namespace App\Models\Masterdata;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gender extends Authenticatable
{
    use Notifiable;

    protected $table = 'gender';
    
    protected $fillable = [
        'gender_id', 'gender_name'
    ];
    public $timestamps = false;
}
