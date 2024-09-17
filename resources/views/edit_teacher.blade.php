<h4>Edit Teacher</h4>

<form action="{{ route('update-teacher', $teacher->id) }}" method="post">
    @csrf
    @method('PUT')

    <div>
        <label for="">Teacher Id</label>
        <input type="text" name="teacher_id" value=" {{ $teacher->teacher_id }} ">
    </div>

    <div>
        <label for="">Teacher Name</label>
        <input type="text" name="teacher_name" value=" {{ $teacher->teacher_name }} ">
    </div>

    <div>
        <label for="">Teacher Email</label>
        <input type="email" name="email" value=" {{ $teacher->email }} ">
    </div>

    <div>
        <label for="">Phone</label>
        <input type="text" name="phone" id="" value=" {{ $teacher->phone }} ">
    </div>

    <div>
        <label for="">Department</label>
        <input type="text" name="department" id="" value=" {{ $teacher->department }} ">
    </div>


    <button type="submit">Update</button>




</form>