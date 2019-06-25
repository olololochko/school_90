<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Classes;

class IndexController extends Controller
{
    public function index(){
        $data=([
           'title' => 'Главная страница',
            'description' => 'Добро пожаловать с систему управления Лицеем №90 г.Ульяновск',
            'cs' => Student::all()->count(),
            'cu' => User::all()->count(),
            'cc' => Classes::all()->count()
        ]);
        return view('index', $data);
    }
}
