<div class="card mb-3">
    <img src="https://www.campusq.com.au/media/0lgfb3hb/undraw_group_chat_v059.svg" class="card-img-top" alt="" height="250">
    <div class="card-body">
        <h5 class="card-title">Lists of Student</h5>
        <p class="card-text">You can find about all the information about students in the system.</p>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">lastname</th>
                <th scope="col">firstname</th>
                <th scope="col">age</th>
                <th scope="col">operations</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->lastname }}</td>
                    <td>{{ $student->firstname }}</td>
                    <td>{{ $student->age }}</td>
                    <td>
                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a id="detail" href="{{ url('/detail/'.$student->id) }}" class="btn btn-sm btn-info">Detail</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
