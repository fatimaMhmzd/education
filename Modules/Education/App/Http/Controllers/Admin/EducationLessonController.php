<?php

namespace Modules\Education\App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Education\App\Models\EducationLesson;
use Yajra\DataTables\Facades\DataTables;

class EducationLessonController extends Controller
{
    public function add($seasonId)
    {
        return view('education::admin.lesson.add', compact("seasonId"));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subject' => 'required',
            'seasonId' => 'required',
        ], [
            'title.required' => 'عنوان الزامی است',
            'subject.required' => 'موضوع الزامی است',
        ]);

        EducationLesson::create([
            'title' => $request->title,
            'subject' => $request->subject,
            'seasonId' => $request->seasonId,
        ]);
        $seasonId = $request->seasonId;
        return view('education::admin.lesson.list', compact("seasonId"))->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }


    public function list($seasonId)
    {
        return view('education::admin.lesson.list', compact("seasonId"));
    }

    public function ajax($seasonId)
    {

        $data = EducationLesson::query()->where('seasonId', $seasonId)->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('admin_education_session_delete', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('admin_education_session_update', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>
<a href="' . route('admin_education_educationProduct_upload', $row->id) . '" class="btn btn-success">ایجاد محتوا</a>
<a href="' . route('admin_education_lesson_list', $row->id) . '" class="btn btn-success">لیست محتوا ها</a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        EducationLesson::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');

    }

    public function update($id)
    {
        $lesson = EducationLesson::find($id);
        return view('education::admin.lesson.update', compact('lesson'));


    }

    public function storeUpdate(Request $request)
    {

        $request->validate([
            'title' => 'required',
        ], [
            'title.required' => 'عنوان الزامی است',
        ]);

        $imageAddres = EducationLesson::find($request->id)->image;

        if ($request->image != null) {
            $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('EducationGroupImage'), $imageName);
            $imageAddres = url('/') . '/' . 'EducationGroupImage' . '/' . $imageName;
        }

        EducationLesson::where('id', $request->id)->update([
            'title' => $request->title,
            'image' => $imageAddres,
            'seoDescription' => $request->seoDescription,
            'seoKeyboard' => $request->seoKeyboard,
        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }

}
