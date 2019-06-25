@include('layouts.main')
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="#">Учебные программы</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('UchProgAdd/')}}">
                            <i class="material-icons">add</i>
                            <p class="d-lg-none d-md-block">
                                Добавить УП
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    @include('layouts.errors')
    <div class="content">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header card-header-primary">
                    <h4 class="card-title mt-0"> {{$title}}</h4>
                    <p class="card-category"> {{$description}}</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <form class="navbar-form" name="sForm" id="sForm" action="UchProg" method="get">
                            <thead class="">
                            <th><input type="text" name="predmet" value="" class="form-control" placeholder="Предмет" form="sForm"></th>
                            <th><select name="class" class="form-control" placeholder="Класс" form="sForm">
                                    <option value="" placeholder="Класс"></option>
                                    @foreach ($classes as $class)
                                        <option value="{{$class->c_id}}">{{$class->c_num.$class->c_char}}</option>
                                    @endforeach
                                </select></th>
                            <th><input type="text" name="syear" value="" class="form-control" placeholder="Учебный год" form="sForm"></th>
                            <th>Количество часов</th>
                            <th><button type="submit" class="btn" form="sForm">
                                    Поиск!
                                    </button>
                            </th>
                            </thead>
                            </form>
                            <tbody>
                            @foreach($uch_progs as $uch_prog)
                                <tr>
                                    <td>{{$uch_prog->p_name}}</td>
                                    <td>{{$uch_prog->c_num.$uch_prog->c_char}}</td>
                                    <td>{{$uch_prog->up_year}}</td>
                                    <td>{{$uch_prog->up_hours}}</td>
                                    <td><button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')