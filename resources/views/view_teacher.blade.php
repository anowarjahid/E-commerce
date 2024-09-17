<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<h4>View Teacher List</h4>

<a href="{{ route('add-teacher') }}">
    <button>Add Teacher</button>
</a>



<table>

    <thead>
   
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Department</td>
        <td>Action</td>

    </thead>

    @foreach ($teachers as $teacher)
        <tr>
            <td> {{ $teacher->teacher_id }} </td>
            <td> {{ $teacher->teacher_name }} </td>
            <td> {{ $teacher->email }} </td>
            <td> {{ $teacher->phone }} </td>
            <td> {{ $teacher->department }} </td>
            <td> 
                <button>
                    <a href="{{ route('edit-teacher', $teacher->id) }}">Edit Teacher</a>
                </button> 

                <form action="{{ route('delete-teacher', $teacher->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <BUtton>Delete</BUtton>

                </form>
            
            
            </td>

        </tr>
    @endforeach


    <tbody>




    </tbody>


</table>
