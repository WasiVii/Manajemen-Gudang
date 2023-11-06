<?php

namespace App\Models\Masterdata;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Authenticatable
{
    use Notifiable;

    protected $table = 'menu';
    
    protected $fillable = [
        'menu_id', 'menu_kode', 'menu_nama', 'menu_icon', 'menu_href', 'menu_status'
    ];

    public $timestamps = false;
}
