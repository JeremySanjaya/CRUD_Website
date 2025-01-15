<?php

namespace App\Http\Controllers\Admin;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_students = Student::with(['grade', 'department'])->get();
        $admin_students = Student::all();

        return view('admin.admin-student', [
            'title' => 'AdminStudent',
            'students' => $admin_students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all();
        $departments = Department::all();

        return view('admin.student.create-student', [
            'title' => 'Add Student',
            'grades' => $grades,
            'departments' => $departments,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'address' => 'required|string',
            'grade_id' => 'required|exists:grades,id',
            'department_id' => 'required|exists:departments,id',
        ]);

        Student::create($request->all());

        return redirect()->route('admin.students.index')->with('success', 'Student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        $grades = Grade::all();
        $departments = Department::all();

        return view('admin.student.edit-student', compact('student', 'grades', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
            'address' => 'required|string',
            'grade_id' => 'required|exists:grades,id',
            'department_id' => 'required|exists:departments,id',
        ]);

        $student = Student::findOrFail($id);

        $student->update($request->all());

        return redirect()->route('admin.students.index')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Temukan siswa berdasarkan ID dan hapus
        $student = Student::findOrFail($id);

        // Hapus siswa dari database
        $student->delete();

        // Redirect ke halaman daftar siswa dengan pesan sukses
        return redirect()->route('admin.students.index')->with('success', 'Student deleted successfully');
    }
}
