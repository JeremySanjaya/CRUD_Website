<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with(['grade', 'department'])->get();
        // $students = DB::table('students')->get();
        return view('student', [
            'title' => "Student",
            'students' => $students
            // 'students' => [
            //     [
            //         'id' => 1,
            //         'name' => "Amanda (アマンダ)",
            //         'grade' => "10 PPLG 1",
            //         'email' => "amandapuspita@gmail.com",
            //         'address' => "Bandung",
            //     ],
            //     [
            //         'id' => 2,
            //         'name' => "Fritzy (フリッツィー)",
            //         'grade' => "12 PPLG 1",
            //         'email' => "fritzyrosmerian@gmail.com",
            //         'address' => "Jakarta",
            //     ],
            //     [
            //         'id' => 3,
            //         'name' => "Michie (ミチー)",
            //         'grade' => "11 PPLG 1",
            //         'email' => "michellealexandra@gmail.com",
            //         'address' => "Palembang",
            //     ],
            //     [
            //         'id' => 4,
            //         'name' => "Oline (オリヌ)",
            //         'grade' => "12 PPLG 1",
            //         'email' => "olinemanuel@gmail.com",
            //         'address' => "Jakarta",
            //     ],
            //     [
            //         'id' => 5,
            //         'name' => "Trisha (トリシャ)",
            //         'grade' => "12 PPLG 1",
            //         'email' => "jazzlyntrisha@gmail.com",
            //         'address' => "Jakarta",
            //     ],
            // ]
            // 'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_student');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
