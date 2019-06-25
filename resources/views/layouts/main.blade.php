<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    {{$title}}
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="{{url('/')}}" class="simple-text logo-normal">
          <img src ="{{ asset('img/logo.gif') }}" />
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{ url('Index')  }}">
              <i class="material-icons">dashboard</i>
              <p>Главная страница</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('Employee')  }}">
              <i class="material-icons">person</i>
              <p>Сотрудники</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('Classes')  }}">
              <i class="material-icons">content_paste</i>
              <p>Классы</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('Disciplines')  }}">
              <i class="material-icons">library_books</i>
              <p>Перечень дисциплин</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('UchProg')  }}">
              <i class="material-icons">bubble_chart</i>
              <p>Учебные программы</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('Students')  }}">
              <i class="material-icons">location_ons</i>
              <p>Ученики</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('User')  }}">
              <i class="material-icons">notifications</i>
              <p>Моя учетная запись</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('Exit')  }}">
              <i class="material-icons">language</i>
              <p>Выход</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
