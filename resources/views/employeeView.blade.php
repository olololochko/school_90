@include('layouts.main')
<div class="main-panel">
    <div class="card-body">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Просмотр сотрудника</a>
            </div>
@include('layouts.errors')
    <!-- Navbar -->
    <div class="content row">
            <div class="col-md-4">
                <div class="container-fluid">
                    <div>
                        <a href="{{ URL::to('/img/photo').'/'.$user->photo }}">
                            <img class="img" src="{{ URL::to('/img/photo').'/'.$user->photo }}" height="150" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><b>Фамилия: </b>{{$user->family}}</h4>
                        <h4 class="card-title"><b>Имя: </b>{{$user->name}}</h4>
                        <h4 class="card-title"><b>Отчество: </b>{{$user->sname }}</h4>
                        <h4 class="card-title"><b>Должность: </b>{{ $user->d_name  }}</h4>
                        <h4 class="card-title"><b>Оклад: </b>{{$user->d_oklad}}</h4>
                    </div>
                </div>
            </div>
    </div>
    <div class="navbar-wrapper">
        <a class="navbar-brand" href="#">Действия над сотрудником</a>
    </div>
    <div class="row form-group">
        <form action="{{url('EmployeeDescrInsert')}}" method="post" class="form-row">
            @csrf
            <input type="hidden" name="ud_user" value="{{$user->id}}">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Наименование действия</label>
                        <input type="text" name="ud_name" value="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn">Добавить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="">
            <th>Дата</th>
            <th>Наименование действия</th>
            </thead>
            <tbody>
            @foreach($actions as $action)
                <tr>
                    <td>{{$action->created_at}}</td>
                    <td>{{$action->ud_description}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
@include('layouts.footer')