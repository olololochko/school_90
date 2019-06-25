<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    protected $table='student';

    public static function getStudents($search){
        return DB::table('student')->join('class', 's_class','=','c_id')->select(DB::raw('CAST(concat(c_num,c_char) as char) as c_class'),'s_adress','s_tel', 's_family','s_name','s_sname')->where('s_family', 'like', "%".$search."%")->get();//$this->hasMany('App\Models\Unit','unit_id','s_unit');
    }

    public static function getStudentsByClass($s_class){
        return DB::table('student')->join('class', 's_class','=','c_id')->select(DB::raw('CAST(concat(c_num,c_char) as char) as c_class'),'s_adress','s_tel', 's_family','s_name','s_sname')->where('s_class', '=', $s_class)->get();//$this->hasMany('App\Models\Unit','unit_id','s_unit');
    }
}
