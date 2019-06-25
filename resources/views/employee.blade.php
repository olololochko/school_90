@include('layouts.main')
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="#pablo">Перечень сотрудников</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form" action="Employee" method="get">
                    <div class="input-group no-border">
                        <input type="text" name="search" value="" class="form-control" placeholder="Фамилия...">
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('EmployeeAdd/')}}">
                            <i class="material-icons">add</i>
                            <p class="d-lg-none d-md-block">
                                Добавить сотрудника
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@include('layouts.errors')
    <!-- Navbar -->
    <div class=" content row">
        @foreach($users as $user)
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="{{ url('viewUser').'/'.$user->id  }}">
                            <img class="img" src="{{ URL::to('/img/photo').'/'.$user->photo }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">{{ $user->d_name  }}</h6>
                        <h4 class="card-title">{{$user->family." ".$user->name." ".$user->sname }}</h4>
                        <p class="card-description">
                            Оклад: {{$user->d_oklad}}
                        </p>
                        <a href="{{ url('EmployeeView').'/'.$user->id  }}" class="btn btn-primary btn-round">Просмотр</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('layouts.footer')