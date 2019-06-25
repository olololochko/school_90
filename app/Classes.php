<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Classes extends Model
{
    protected $table = 'class';
    //

    public static function getClasses($search){
        return DB::table('class')->join('users', 'c_ruk','=','id')->select('c_num','c_char', 'c_id', 'family','name','sname')->where(DB::raw('CAST(concat(c_num,c_char) as char)'), 'like', "%".$search."%")->get();//$this->hasMany('App\Models\Unit','unit_id','s_unit');
    }
}
