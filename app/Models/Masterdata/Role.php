<?php

namespace App\Models\Masterdata;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Authenticatable
{
    use Notifiable;

    protected $table = 'role';

    protected $fillable = [
        'role_id', 'role_nama'
    ];

    public $timestamps = false;

    public function menu_role()
    {
        return $this->belongsTo('App\Models\Masterdata\MenuRole', 'role_id', 'role_id');
    }
    public function menu()
    {
        return $this->belongsTo('App\Models\Masterdata\Menu', 'menu_id', 'menu_id');
    }
    public function detail_menu_role()
    {
        return $this->belongsTo('App\Models\Masterdata\DetailMenuRole', 'role_id', 'role_id');
    }
    public function detail_menu()
    {
        return $this->belongsTo('App\Models\Masterdata\DetailMenu', 'detail_menu_id', 'detail_menu_id');
    }
}
