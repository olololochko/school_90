<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\User;
use Validator;
use App\Student;

class ClassController extends Controller
{
    public function index(Request $request){
        if ($request->input('search')) $classes = Classes::getClasses($request->input('search'));
        else $classes = Classes::getClasses('');
        $data = [
            'title' => 'Классы',
            'description' => 'Перечень классов',
            'classes' => $classes
        ];
        return view('classes', $data);
    }

    public function addShow(Request $request){
        //if ($request->input('search')) $users = User::getUsers($request->input('search'));
        //else $users = User::getUsers('');
        $data = [
            'title' => 'Добавить класс',
            'description' => 'Введите реквизиты для нового класса (все поля обязательны к заполнению)',
            'users' => User::all()
        ];
        return view('classAdd', $data);
    }

    public function classViewShow($id){
        $data = [
            'title' => 'Просмотр списка класса',
            'description' => 'Пофамильный список учащихся класса',
            'students' => Student::getStudentsByClass($id)
        ];
        return view('classView', $data);
    }

    public function insert (Request $request){
        $validator = Validator::make($request->all(), [
            'c_num' => 'required|integer',
            'c_char' => 'required|min:1',
            'c_ruk' => 'required|integer',
            'c_syear' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return redirect()->action('ClassController@addShow')->withErrors($validator->messages());
        } else {
            $class = new Classes;
            $class->c_num = $request->input('c_num');
            $class->c_char = $request->input('c_char');
            $class->c_ruk = $request->input('c_ruk');
            $class->c_syear = $request->input('c_syear');
            $class->save();
            return redirect()->action('ClassController@index');
        }
    }
}
