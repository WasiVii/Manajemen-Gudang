<?php

namespace App\Models\Masterdata;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailMenu extends Authenticatable
{
    use Notifiable;

    protected $table = 'detail_menu';
    
    protected $fillable = [
        'detail_menu_id', 'menu_id', 'detail_menu_kode', 'detail_menu_nama', 'detail_menu_href'
    ];

    public $timestamps = false;

    public function menu()
    {
        return $this->belongsTo('App\Models\Masterdata\Menu', 'menu_id', 'menu_id');
    }
}
