<h1>Edit Student</h1>
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Name:</label>
    <input type="text" name="name" value="{{ $student->name }}">
    <label>Surname:</label>
    <input type="text" name="surname" value="{{ $student->surname }}">
    <label>Grade:</label>
    <input type="number" name="grade" value="{{ $student->grade }}">
    <button type="submit">Update</button>
</form>
