<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Student Management System</title>
</head>

<body>
@include('navbar')


@if($layout == 'index')
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-7">@include('studentsList')</section>
            <section class="col-md-5"></section>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-7">@include('studentsList')</section>
            <section class="col-md-5">
                <form action="{{ url('/store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>FirstName</label>
                        <input name="firstname" type="text" class="form-control" placeholder="firstname">
                    </div>
                    <div class="form-group">
                        <label>LastName</label>
                        <input name="lastname" type="text" class="form-control" placeholder="lastname">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input name="age" type="text" class="form-control" placeholder="age">
                    </div>
                    <div class="form-group">
                        <label>Major</label>
                        <input name="major" type="text" class="form-control" placeholder="major">
                    </div>
                    <input type="submit" class="btn btn-info" value="Save">
                    <input type="reset" class="btn btn-warning" value="Reset">
                </form>
            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <<div class="container-fluid">
        <div class="row">
            <section class="col">@include('studentsList')</section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid">
        <div class="row">
            <section class="col">@include('studentsList')</section>
            <section class="col">
                <form action="{{ url('/update/'.$student->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>FirstName</label>
                        <input value="{{ $student->firstname }}" name="firstname" type="text" class="form-control" placeholder="firstname">
                    </div>
                    <div class="form-group">
                        <label>LastName</label>
                        <input value="{{ $student->lastname }}"name="lastname" type="text" class="form-control" placeholder="lastname">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input value="{{ $student->age }}"name="age" type="text" class="form-control" placeholder="age">
                    </div>
                    <div class="form-group">
                        <label>Major</label>
                        <input value="{{ $student->major }}"name="major" type="text" class="form-control" placeholder="major">
                    </div>
                    <input type="submit" class="btn btn-info" value="Update">
                </form>
            </section>
        </div>
    </div>
@endif
</body>
</html>
