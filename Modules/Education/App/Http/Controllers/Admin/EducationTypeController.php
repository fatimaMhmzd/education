<?php

namespace Modules\Education\App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Education\App\Models\EducationType;
use Yajra\DataTables\Facades\DataTables;

class EducationTypeController extends Controller
{
    public function add()
    {
        return view('education::admin.type.add');
    }


    public function store(Request $request)
    {
       $request->validate([
            'title' => 'required',
            'image' => 'required',
        ], [
            'title.required' => 'عنوان الزامی است',
            'image.required' => 'عکس الزامی است',
        ]);

        $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('EducationTypeImage'), $imageName);
        $imageAddres = url('/') . '/' . 'EducationTypeImage' . '/' . $imageName;


        EducationType::create([
            'title' => $request->title,
            'image' => $imageAddres,
            'seoDescription' => $request->seoDescription,
            'seoKeyboard' => $request->seoKeyboard,
        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }


    public function list()
    {
        return view('education::admin.type.list');
    }

    public function ajax()
    {

        $data = EducationType::all();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('admin_education_type_delete', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('admin_education_type_update', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        EducationType::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');

    }

    public function update($id)
    {
        $educationType = EducationType::find($id);
        return view('education::admin.type.update', compact('educationType'));


    }

    public function storeUpdate(Request $request)
    {

       $request->validate([
            'title' => 'required',
        ], [
            'title.required' => 'عنوان الزامی است',
        ]);

        $imageAddres = EducationType::find($request->id)->image;

        if ($request->image != null) {
            $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('EducationTypeImage'), $imageName);
            $imageAddres = url('/') . '/' . 'EducationTypeImage' . '/' . $imageName;
        }

        EducationType::where('id', $request->id)->update([
            'title' => $request->title,
            'image' => $imageAddres,
            'seoDescription' => $request->seoDescription,
            'seoKeyboard' => $request->seoKeyboard,
        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }
}
