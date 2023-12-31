<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter');

        if ($filter) {
            $students = Student::where('name', 'like', "%$filter%")->get();
        } else {
            $students = Student::all();
        }

        return view('students.index', compact('students', 'filter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required|string',
                'surname' => 'required|string|',
            ],
            // errori
            [
                'name.required' => 'Name is required',
                'name.string' => 'Name is invalid',
                'surname.required' => 'Surame is required',
                'surname.string' => 'Surname is invalid',
            ]
        );

        $data = $request->all();
        $student = new Student();
        $student->fill($data);
        $student->save();


        return to_route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {

        $request->validate(
            [
                'name' => 'required|string',
                'surname' => 'required|string|',
            ],
            // errori
            [
                'name.required' => 'Name is required',
                'name.string' => 'Name is invalid',
                'surname.required' => 'Surame is required',
                'surname.string' => 'Surname is invalid',
            ]
        );
        $data = $request->all();


        $student->update($data);

        return redirect()->route('students.index', $student->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return to_route('students.index')->with('success', 'Task deleted successfully');
    }
}
