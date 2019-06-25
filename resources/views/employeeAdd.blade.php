@include('layouts.main')
<div class="main-panel">
    @include('layouts.errors')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{$title}}</h4>
                            <p class="card-category">{{$description}}</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data" action="{{ url('EmployeeInsert') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Фамилия</label>
                                            <input type="text" name="family" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Имя</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Отчество</label>
                                            <input type="text" name="sname" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                            <label class="bmd-label-floating">Фотография</label>
                                            <input type="file" name="photo" class="form-control-file" accept="image/*,image/jpeg" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Должность</label>
                                            <select name="u_doljn" class="form-control" required>
                                                @foreach ($doljns as $doljn)
                                                <option value="{{$doljn->d_id}}">{{$doljn->d_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">E-mail</label>
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Пароль(для входа на портал)</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">{{$title}}</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('layouts.footer')