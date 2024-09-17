<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h4>Add Teacher</h4>

    <form action="{{ route('store-teacher') }}" method="post">
        @csrf


        <div>
            <label for="">Teacher Id</label>
            <input type="number" name="teacher_id">
        </div>

        <div>
            <label for="">Teacher Name</label>
            <input type="text" name="teacher_name">
        </div>

        <div>
            <label for="">Teacher Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="">Phone</label>
            <input type="number" name="phone" id="">
        </div>

        <div>
            <label for="">Department</label>
            <input type="text" name="department" id="">
        </div>


        <button type="submit">Submit</button>




    </form>



    
</body>
</html>