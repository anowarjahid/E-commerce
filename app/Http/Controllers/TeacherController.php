<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class TeacherController extends Controller
{



    public function viewTeacher()
    {

        $teachers = Teacher::all();
        return view('view_teacher', compact('teachers'));
    }
    

    public function addTeacher()
    {
        return view('add_teacher');
    }



    public function storeTeacher(Request $request)
    {


        $teacher = Teacher::create([
            'teacher_id' => $request->input('teacher_id'),
            'teacher_name' => $request->input('teacher_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'department' => $request->input('department'),

        ]);


        
        return redirect()->route('view-teacher');

    }


    public function editTeacher($id)
    {


        $teacher = Teacher::findorFail($id);

        return view('edit_teacher', compact('teacher'));
    }


    public function updateTeacher(Request $request, $id)
    {

        $teacher = Teacher::findOrFail($id);


        $teacher->update([
            'teacher_id' => $request->input('teacher_id'),
            'teacher_name' => $request->input('teacher_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'department' => $request->input('department'),
        ]);


        return redirect()->route('view-teacher');

    }


    public function deleteTeacher($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('view-teacher');
    }


}
