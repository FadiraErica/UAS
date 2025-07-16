<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Onlinecourse;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Menampilkan daftar mahasiswa
    public function index(Request $request)
    {
        $search = $request->query('search');

        $students = Student::with('course')
            ->when($search, function ($query) use ($search) {
                $query->where('Name', 'like', "%$search%")
                      ->orWhere('Email', 'like', "%$search%");
            })
            ->orderBy('Name')
            ->paginate(10);

        return view('students.index', compact('students'));
    }

    // Form tambah mahasiswa
    public function create()
    {
        $courses = Onlinecourse::all();
        return view('students.create', compact('courses'));
    }

    // Simpan data mahasiswa baru
    public function store(Request $request)
    {
        $request->validate([
            'Name'         => 'required',
            'Email'        => 'required|email|unique:students,Email',
            'Phone_Number' => 'required',
            'Course_Id'    => 'required|exists:course_categories,Course_Id',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    // Form edit mahasiswa
    public function edit(Student $student)
    {
        $courses = Onlinecourse::all();
        return view('students.edit', compact('student', 'courses'));
    }

    // Simpan perubahan data mahasiswa
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'Name'         => 'required',
            'Email'        => 'required|Email',
            'Phone_Number' => 'required',
            'Course_Id'    => 'required|exists:course_categories,Course_Id',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui');
    }

    // Hapus data mahasiswa
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
