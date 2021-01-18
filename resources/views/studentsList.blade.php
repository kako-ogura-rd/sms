<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">firstname</th>
        <th scope="col">lastname</th>
        <th scope="col">age</th>
        <th scope="col">major</th>
        <th scope="col">operations</th>
    </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
    <tr>
        <td>{{ $student->firstname }}</td>
        <td>{{ $student->lastname }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->major }}</td>
        <td>
            <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

