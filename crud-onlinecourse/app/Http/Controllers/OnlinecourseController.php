<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Onlinecourse;

class OnlinecourseController extends Controller
{
    public function index()
    {
        $courses = Onlinecourse::all();
        return view('Onlinecourse.index', compact('courses'));
    }

    public function create()
    {
        return view('Onlinecourse.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Course_Id' => 'required|unique:course_categories,Course_Id',
            'Course_Name' => 'required',
            'Descriptions' => 'nullable',
            'Category' => 'required',
            'Start_Date' => 'required|date',
        ]);

        Onlinecourse::create($request->all());

        return redirect()->route('onlinecourse.index')->with('success', 'Kursus berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $course = Onlinecourse::findOrFail($id);
        return view('Onlinecourse.show', compact('course'));
    }

    public function edit(string $id)
    {
        $course = Onlinecourse::findOrFail($id);
        return view('Onlinecourse.edit', compact('course'));
    }

    public function update(Request $request, string $id)
    {
        $course = Onlinecourse::findOrFail($id);

        $request->validate([
            'Course_Name' => 'required',
            'Descriptions' => 'required',
            'Category' => 'required',
            'Start_Date' => 'required|date',
        ]);

        $course->update($request->all());

        return redirect()->route('onlinecourse.index')->with('success', 'Kursus berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $course = Onlinecourse::findOrFail($id);
        $course->delete();

        return redirect()->route('onlinecourse.index')->with('success', 'Kursus berhasil dihapus');
    }
}
