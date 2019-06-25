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
                            <form method="POST" enctype="multipart/form-data" action="{{ url('StudentInsert') }}">
                                @csrf

                                <div class="row form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Фамилия</label>
                                                <input type="text" name="s_family" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Имя</label>
                                                <input type="text" name="s_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Отчество</label>
                                                <input type="text" name="s_sname" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Адрес проживания</label>
                                            <input type="text" name="s_adress" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Номер телефона</label>
                                            <input type="text" name="s_tel" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Класс</label>
                                            <select name="s_class" class="form-control" required>
                                                @foreach ($classes as $class)
                                                <option value="{{$class->c_id}}">{{$class->c_num.$class->c_char}}</option>
                                                @endforeach
                                            </select>
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