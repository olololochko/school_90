<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Doljn;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\User_descrs;

class UserController extends Controller
{
    public function index(Request $request){
        if ($request->input('search')) $users = User::getUsers($request->input('search'));
            else $users = User::getUsers('');
        $data = [
                'title' => 'Сотрудники',
                'description' => 'Перечень сотрудников',
                'users' => $users
            ];
        return view('employee', $data);
    }

    public function addShow(Request $request){
        //if ($request->input('search')) $users = User::getUsers($request->input('search'));
        //else $users = User::getUsers('');
        $data = [
            'title' => 'Добавить сотрудника',
            'description' => 'Введите реквизиты для нового сотрудника (все поля обязательны к заполнению)',
            'doljns' => Doljn::all()
        ];
        return view('employeeAdd', $data);
    }

    public function userViewShow($id){
        $data = [
            'title' => 'Просмотр информации о сотруднике',
            'description' => 'Просмотр информации о сотруднике',
            'user' => User::getUserById($id),
            'actions' => User_descrs::getDescrs($id)
        ];
        return view('employeeView', $data);
    }

    public function actionInsert (Request $request){
        $validator = Validator::make($request->all(), [
            'ud_name' => 'required|min:3',
            'ud_user' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
        } else {
            $user_descr = new User_descrs;
            $user_descr->ud_description = $request->input('ud_name');
            $user_descr->ud_user = $request->input('ud_user');
            $user_descr->save();
            return redirect()->back();
        }
    }

    public function insert (Request $request){
        $validator = Validator::make($request->all(), [
            'family' => 'required|min:3',
            'name' => 'required|min:3',
            'sname' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'photo' => 'required|image',
            'u_doljn' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return redirect()->action('UserController@addShow')->withErrors($validator->messages());
        } else {
            $user = new User;
            $user->family = $request->input('family');
            $user->name = $request->input('name');
            $user->sname = $request->input('sname');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $filename = time().'.'.$request->file('photo')->getClientOriginalName();
            $request->photo->move(public_path('img/photo'), $filename);
            $user->photo = $filename;
            $user->u_doljn = $request->input('u_doljn');
            $user->save();
            return redirect()->action('UserController@index');
        }
    }

    /*public function userSearch($search){
        $data = [
            'title' => 'Сотрудники',
            'description' => 'Перечень сотрудников',
            'users' => User::getUsers($search)
        ];
        return view('employee', $data);
    }*/
}
