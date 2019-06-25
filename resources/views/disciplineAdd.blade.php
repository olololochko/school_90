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
                            <form method="POST" enctype="multipart/form-data" action="{{ url('DisciplineInsert') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Наименование дисциплины</label>
                                            <input type="text" name="p_name" class="form-control">
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