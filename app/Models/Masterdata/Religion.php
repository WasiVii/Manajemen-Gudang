<?php

namespace App\Models\Masterdata;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Religion extends Authenticatable
{
    use Notifiable;

    protected $table = 'religion';
    
    protected $fillable = [
        'religion_id', 'religion_name'
    ];
    public $timestamps = false;
}
