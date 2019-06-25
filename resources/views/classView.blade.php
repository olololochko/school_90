@include('layouts.main')
<div class="main-panel">
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
                        <thead class="">
                        <th>Класс</th>
                        <th>ФИО</th>
                        <th>Номер телефона</th>
                        <th>Адрес</th>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{$student->c_class}}</td>
                            <td>{{$student->s_family." ".$student->s_name." ".$student->s_sname}}</td>
                            <td>{{$student->s_tel}}</td>
                            <td>{{$student->s_adress}}</td>
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