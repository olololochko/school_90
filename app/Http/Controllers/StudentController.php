<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Classes;
use Validator;

class StudentController extends Controller
{
    public function index(Request $request){
        if ($request->input('search')) $students = Student::getStudents($request->input('search'));
        else $students = Student::getStudents('');
        $data = [
            'title' => 'Ученики',
            'description' => 'Перечень учеников',
            'students' => $students
        ];
        return view('students', $data);
    }

    public function addShow(Request $request){
        //if ($request->input('search')) $users = User::getUsers($request->input('search'));
        //else $users = User::getUsers('');
        $data = [
            'title' => 'Добавить ученика',
            'description' => 'Введите реквизиты для нового ученика (все поля обязательны к заполнению)',
            'classes' => Classes::all()
        ];
        return view('studentAdd', $data);
    }

    public function insert (Request $request){
        $validator = Validator::make($request->all(), [
            's_family' => 'required|min:3',
            's_name' => 'required|min:3',
            's_sname' => 'required|min:3',
            's_adress' => 'required|min:3',
            's_tel' => 'required|min:3',
            's_class' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return redirect()->action('StudentController@addShow')->withErrors($validator->messages());
        } else {
            $student = new Student;
            $student->s_family = $request->input('s_family');
            $student->s_name = $request->input('s_name');
            $student->s_sname = $request->input('s_sname');
            $student->s_adress = $request->input('s_adress');
            $student->s_tel = $request->input('s_tel');
            $student->s_class = $request->input('s_class');
            $student->save();
            return redirect()->action('StudentController@index');
        }
    }
}
