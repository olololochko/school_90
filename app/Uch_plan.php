<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Uch_plan extends Model
{
    protected $table='uch_plan';

    public static function getPlans($class, $predmet, $syear){
        $table = DB::table('uch_plan')->join('class', 'up_class','=','c_id')->join('predmet', 'up_predmet','=','p_id');//$this->hasMany('App\Models\Unit','unit_id','s_unit');
        if ($class !=="") $table = $table->where('up_class', '=', $class);
        if ($predmet !=="") $table = $table->where('p_name', 'like', '%'.$predmet.'%');
        if ($syear !=="") $table = $table->Where('up_year', '=', $syear);
        return $table->get();
    }
}
