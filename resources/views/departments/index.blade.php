<h1>Departments</h1>
<a href="{{ route('departments.create') }}">Add Department</a>
<ul>
    @foreach ($departments as $department)
        <li>{{ $department->name }}</li>
    @endforeach
</ul>
