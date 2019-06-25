<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public static function getUsers($search){
        return DB::table('users')->join('doljn', 'u_doljn','=','d_id')->where('family', 'like', '%'.$search.'%')->get();//$this->hasMany('App\Models\Unit','unit_id','s_unit');
    }

    public static function getUserById($id){
        return DB::table('users')->join('doljn', 'u_doljn','=','d_id')->where('id', '=', $id)->first();//$this->hasMany('App\Models\Unit','unit_id','s_unit');
    }

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
