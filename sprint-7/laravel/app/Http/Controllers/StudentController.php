<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Santri = Student::all();
        return view('tools.Student', ["Murid" => $Santri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $student->Nama = $request->Nama;
        // $student->Divisi = $request->Divisi;
        // $student->Asal30 = $request->Asal;

        // Student::create([
// 
            // 'Nama' => $request->Nama,
            // 'Divisi' => $request->Divisi,
            // 'Asal30' => $request->Asal
// 
        // ]);

        $request->validate([

        'Nama' => 'required',
        'Divisi' => 'required',
        'Asal' => 'required'

        ]);

        Student::create($request->all());
        return redirect('/students')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('tools.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('tools.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([

            'Nama' => 'required',
            'Divisi' => 'required',
            'Asal' => 'required'
    
            ]);
        Student::where('id', $student->id)
        ->update([
            'Nama' => $request->Nama,
            'Divisi' => $request->Divisi,
            'Asal' => $request->Asal,
        ]);
        return redirect('/students')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data berhasil dihapus');
    }
}
