<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use Intervention\Image\Facades\Image;

class AdminAkademiController extends Controller
{
    public function index()
    {
        $akademiks = Course::all();
        $akademiks->load('course_category');
        return view('backpage.admin.akademi.index', compact('akademiks'));
    }
    public function create()
    {
        $category = CourseCategory::all();
        return view('backpage.admin.akademi.index', compact('category'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|numeric',
            'judul' => 'required|string|min:1',
            'speaker' => 'required|string|min:1',
            'telepon' => 'required|string|max:15',
            'foto_speaker' => 'required|image|mimes:jpg,jpeg,png|max:3050'
        ]);
        $filename = $request->file('foto_speaker')->hashName();
        $course = new Course();
        $course->course_category_id = $request->kategori;
        $course->title = $request->judul;
        $course->speaker = $request->speaker;
        $course->telepon_speaker = $request->telepon;
        $course->foto_speaker = $filename;
        $course->sistem = 'Online';
        $course->price = 350000;
        $course->save();
        if ($request->file('foto_speaker') && $request->file('foto_speaker')->isValid()) {
            $path = storage_path('app/public/uploads/kursus/');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            Image::make($request->file('foto_speaker'))->resize(300, 200, function ($cons) {
                $cons->upsize();
                $cons->aspectRatio();
            })->save($path . $filename);
        }
        return redirect()->back();
    }
    public function show($id)
    {
        $kursus = Course::findOrFail($id);
        return view('backpage.admin.akademi.index', compact('kursus'));
    }
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $path = storage_path('app/public/uploads/kursus/');
        if ($course->foto_speaker != null && file_exists($path . $course->foto_speaker)) {
            unlink($path . $course->foto_speaker);
        }
        $course->delete();
        return redirect()->back();
    }
}
