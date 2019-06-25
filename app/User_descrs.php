<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User_descrs extends Model
{
    protected $table='user_descrs';

    public static function getDescrs($search){
        return DB::table('user_descrs')->where('ud_user', '=', $search)->orderByDesc('created_at')->get();//$this->hasMany('App\Models\Unit','unit_id','s_unit');
    }
}
