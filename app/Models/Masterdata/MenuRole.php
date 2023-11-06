<?php

namespace App\Models\Masterdata;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuRole extends Authenticatable
{
    use Notifiable;

    protected $table = 'menu_role';
    
    protected $fillable = [
        'menu_role_id', 'menu_id', 'role_id'
    ];

    public $timestamps = false;

    public function menu()
    {
        return $this->belongsTo('App\Models\Masterdata\Menu', 'menu_id', 'menu_id');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Masterdata\Role', 'role_id', 'role_id');
    }
}
