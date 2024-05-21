<h1>Add Employee</h1>
<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name">
    <label>Email:</label>
    <input type="email" name="email">
    <label>CPF:</label>
    <input type="text" name="cpf">
    <label>Age:</label>
    <input type="number" name="age">
    <label>Department:</label>
    <select name="department_id">
        @foreach ($departments as $department)
            <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
    </select>
    <button type="submit">Add</button>
</form>
