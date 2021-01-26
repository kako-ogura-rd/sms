@include('layout.header')
<style>
    .error
    {
        color: #ff643d;
    }

</style>
<body>
@include('layout.navbar')

<div class="row header-container justify-content-center mt-4">
    <div class="header">
        <h1>Student Management System</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">@include('studentsList')</section>
            <section class="col-md-5"></section>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">@include('studentsList')</section>
            <section class="col-md-5">
                <form action="{{ url('/store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>FirstName</label>
                        <input name="firstname" type="text" class="form-control" placeholder="firstname">
                        @if($errors->has('firstname'))
                        <span class="error">{{ $errors->first('firstname') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>LastName</label>
                        <input name="lastname" type="text" class="form-control" placeholder="lastname">
                        @if($errors->has('lastname'))
                            <span class="error">{{ $errors->first('lastname') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input name="age" type="text" class="form-control" placeholder="age">
                        @if($errors->has('age'))
                            <span class="error">{{ $errors->first('age') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Major</label><br>
                        <select class="form-control form-control-sm" name="major" id="majorOptions" onchange="random()"></select>
                        @if($errors->has('major'))
                            <span class="error">{{ $errors->first('major') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Subject</label><br>
                        <select class="form-control form-control-sm" id="subject" name="subject"></select>
                    </div>
                    <div class="form-group">
                        <label>Credit</label>
                        <select class="form-control form-control-sm" name="credit" id="creditOptions"></select>
                    </div>
                    <input type="submit" class="btn btn-info" value="Save">
                    <input type="reset" class="btn btn-warning" value="Reset">
                </form>
            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">@include('studentsList')</section>
            <section class="col-md-5">
                name: {{ $student->lastname . $student->firstname }}<br>
                student_ID:{{$student->id}}<br>
                quarter: {{ $student->created_at }}<br>
                major: {{$student->major}}<br>
                age:{{$student->age}}<br>

            </section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">@include('studentsList')</section>
            <section class="col-md-5">
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
@include('layout.footer')

<script>
    var majorOptions = [
        'Select your major',
        'computer science',
        'information technology',
        'physics',
        'business',
        'art',
        'dance',
        'design',
        'digital arts',
        'drama',
        'music',
        'film studies',
        'applied math',
        'agriculture science',
        'chemistry',
        'geology',
        'genetics',
        'animal science',
        'biology',
        'psychology',
        'physiology'
    ];
    majorOptions.forEach(function (value){
        var option = document.createElement('option');
        option.textContent = value;
        document.getElementById('majorOptions').appendChild(option);
    });
    function random()
    {
        var a=document.getElementById("majorOptions").value;
        if(a==="computer science")
        {
            var arr=[
                "Programming Fundamentals",
                "Computer Systems",
                "Software Engineering"
            ];
        }
        else if(a==="information technology")
        {
            var arr=[
                "Web Application Development",
                "Enterprise Information Systems",
                "E-Commerce Technologies"
            ];
        }
        else if(a==="physics")
        {
            var arr=[
                "Introduction to Relativity and Quantum Physics",
                "Astronomy",
                "Advanced Classical Mechanics"
            ];
        }
        else if(a==="business")
        {
            var arr=[
                "Entrepreneurship Studies",
                "General Business",
                "Operation Management"
            ];
        }
        else if(a==="art")
        {
            var arr=[
                "English",
                "Economics",
                "Political Arts"
            ];
        }
        else if(a==="dance")
        {
            var arr=[
                "Ballets, modern, and jazz technique",
                "Body conditioning",
                "Choreography"
            ];
        }
        else if(a==="design")
        {
            var arr=[
                "Fashion Designing",
                "Graphic Design",
                "Interior and Furniture Design"
            ];
        }
        else if(a==="digital arts")
        {
            var arr=[
                "3D Graphics",
                "Animation",
                "Graphic Design"
            ];
        }
        else if(a==="drama")
        {
            var arr=[
                "Theatre History",
                "Acting Course",
                "Dramaturgy"
            ];
        }
        else if(a==="music")
        {
            var arr=[
                "Pop Music",
                "Digital Music",
                "Electronic Music"
            ];
        }
        else if(a==="film studies")
        {
            var arr=[
                "Film Dimension and Packaging",
                "Processing and Printing",
                "Films for Motion Picture"
            ];
        }
        else if(a==="applied math")
        {
            var arr=[
                "Calculus",
                "Differential equations",
                "Discrete Mathematics"
            ];
        }
        else if(a==="agriculture science")
        {
            var arr=[
                "Horticulture",
                "Animal Science",
                "Ecology"
            ];
        }
        else if(a==="chemistry")
        {
            var arr=[
                "General Chemistry",
                "Organic Chemistry",
                "Inorganic Chemistry"
            ];
        }
        else if(a==="geology")
        {
            var arr=[
                "Environmental Geoscience",
                "Computing for earth scientists",
                "Sedimentology"
            ];
        }
        else if(a==="genetics")
        {
            var arr=[
                "Graph Algorithms in Genome Sequencing",
                "DNA",
                "Evaluating Animal Breeding"
            ];
        }
        else if(a==="animal science")
        {
            var arr=[
                "Animal Nutrition",
                "Animal Anatomy",
                "Veterinary Parasitology"
            ];
        }
        else if(a==="biology")
        {
            var arr=[
                "Molecular Biology",
                "Computational Biology",
                "Ecology"
            ];
        }
        else if(a==="psychology")
        {
            var arr=[
                "General Psychology",
                "History of Psychology",
                "Statistics"
            ];
        }
        else if(a==="physiology")
        {
            var arr=[
                "Biochemistry",
                "Pharmacology",
                "Molecular Biology"
            ];
        }else
        {
            var arr = [];
        }

        var string="";

        for(i=0;i<arr.length;i++)
        {
            string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
        }
        document.getElementById("subject").innerHTML=string;

        var creditOptions = ['Select Credit',1,2,3,4,5];
        creditOptions.forEach(function (value){
            var option = document.createElement('option');
            option.textContent = value;
            document.getElementById('creditOptions').appendChild(option);
        });
    }
</script>
