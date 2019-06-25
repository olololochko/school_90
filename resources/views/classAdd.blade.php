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
                            <form method="POST" enctype="multipart/form-data" action="{{ url('ClassInsert') }}">
                                @csrf
                                <div class="row form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Номер класса</label>
                                                <input type="text" name="c_num" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Буква класса</label>
                                                <input type="text" name="c_char" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Год набора</label>
                                            <input type="text" name="c_syear" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Классный руководитель</label>
                                            <select name="c_ruk" class="form-control" required>
                                                @foreach ($users as $user)
                                                <option value="{{$user->id}}">{{$user->family." ".$user->name." ".$user->sname}}</option>
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