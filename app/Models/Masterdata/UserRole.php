<?php

namespace App\Models\Masterdata;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRole extends Authenticatable
{
    use Notifiable;

    protected $table = 'user_role';
    
    protected $fillable = [
        'user_role_id', 'user_id', 'role_id'
    ];
    public $timestamps = false;
    
    public function role()
    {
        return $this->belongsTo('App\Models\Masterdata\Role', 'role_id', 'id');
    }
}
