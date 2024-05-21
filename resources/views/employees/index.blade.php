<h1>Employees</h1>
<a href="{{ route('employees.create') }}">Add Employee</a>
<ul>
    @foreach ($employees as $employee)
        <li>{{ $employee->name }} - {{ $employee->department->name }}</li>
    @endforeach
</ul>
<h1>Departments</h1>
<a href="{{ route('departments.index') }}">See Departments</a>
<h1>Working Hours</h1>
<a href="http://127.0.0.1:8000/work-schedule">See Working Hours</a>