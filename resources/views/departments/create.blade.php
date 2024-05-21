<h1>Add Department</h1>
<form action="{{ route('departments.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name">
    <button type="submit">Add</button>
</form>
