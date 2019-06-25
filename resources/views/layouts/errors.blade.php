@if(count($errors) > 0)
    <!-- класс фреймворка бутстрап -->
    <div class="container-fluid">
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                    <span>{{ $error }}</span>
            @endforeach
        </div>
    </div>
@endif