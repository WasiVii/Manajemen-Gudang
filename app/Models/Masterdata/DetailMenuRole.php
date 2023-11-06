<?php

namespace App\Models\Masterdata;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailMenuRole extends Authenticatable
{
    use Notifiable;

    protected $table = 'detail_menu_role';
    
    protected $fillable = [
        'detail_menu_role_id', 'detail_menu_id', 'role_id'
    ];

    public $timestamps = false;

    public function detailMenu()
    {
        return $this->belongsTo('App\Models\Masterdata\DetailMenu', 'detail_menu_id', 'detail_menu_id');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Masterdata\Role', 'role_id', 'role_id');
    }
}
