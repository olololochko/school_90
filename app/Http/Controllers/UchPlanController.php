<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predmet;
use App\Classes;
use App\Uch_plan;
use Validator;

class UchPlanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->input('syear')) $syear=$request->input('syear'); else $syear='';
        if ($request->input('predmet')) $predmet=$request->input('predmet'); else $predmet='';
        if ($request->input('class')) $class=$request->input('class'); else $class='';
        $uch_prog = Uch_plan::getPlans($class, $predmet, $syear);
        //echo $class. $predmet. $syear; exit;
        $data = [
            'title' => 'Категории',
            'description' => 'Перечень всех категорий',
            'classes' => Classes::all(),
            'uch_progs' => $uch_prog
        ];
        return view('uchProg', $data);
    }

    public function addShow(Request $request)
    {
        //if ($request->input('search')) $users = User::getUsers($request->input('search'));
        //else $users = User::getUsers('');
        $data = [
            'title' => 'Добавить учебную программу',
            'description' => 'Введите дисциплину,класс, колиество часов и учебный год, в котором будет проходиться данная программа',
            'classes' => Classes::all(),
        ];
        return view('uchProgAdd', $data);
    }

    public function insert(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'up_class' => 'required|integer',
            'up_hours' => 'required|integer',
            'up_predmet' => 'required|min:3',
            'up_year' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return redirect()->action('UchPlanController@addShow')->withErrors($validator->messages());
        } else {
            $uch_prog = new Uch_plan;
            $uch_prog->up_class = $request->input('up_class');
            $uch_prog->up_hours = $request->input('up_hours');
            $uch_prog->up_predmet = $request->input('up_predmet');
            $uch_prog->up_year = $request->input('up_year');
            $uch_prog->save();
            return redirect()->action('UchPlanController@index');
        }
    }

}
