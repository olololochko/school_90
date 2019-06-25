<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predmet;
use Validator;

class PredmetController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Категории',
            'description' => 'Перечень всех категорий',
            'predmets' => Predmet::all()
        ];
        return view('disciplines', $data);
    }

    public function addShow(Request $request)
    {
        //if ($request->input('search')) $users = User::getUsers($request->input('search'));
        //else $users = User::getUsers('');
        $data = [
            'title' => 'Добавить дисциплину',
            'description' => 'Введите наименование новой учебной дисциплины'
        ];
        return view('disciplineAdd', $data);
    }

    public function insert(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'p_name' => 'required|min:3',
        ]);
        if ($validator->fails()) {
            return redirect()->action('PredmetController@addShow')->withErrors($validator->messages());
        } else {
            $predmet = new Predmet;
            $predmet->p_name = $request->input('p_name');
            $predmet->save();
            return redirect()->action('PredmetController@index');
        }
    }
}
