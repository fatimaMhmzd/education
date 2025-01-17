<?php

namespace Modules\Education\App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Education\App\Models\EducationGroup;
use Yajra\DataTables\Facades\DataTables;

class EducationGroupController extends Controller
{

    public function add()
    {
        return view('education::admin.group.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);


        $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('EducationGroupImage'), $imageName);
        $imageAddres = url('/') . '/' . 'EducationGroupImage' . '/' . $imageName;


        EducationGroup::create([
            'title' => $request->title,
            'image' => $imageAddres,
        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }


    public function list()
    {
        return view('education::admin.group.list');
    }

    public function ajax()
    {

        $data = EducationGroup::all();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('admin_education_group_delete', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('admin_education_group_update', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        EducationGroup::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');

    }

    public function update($id)
    {
        $educationGroup = EducationGroup::find($id);
        return view('education::admin.group.update', compact('educationGroup'));


    }

    public function storeUpdate(Request $request)
    {

        $request->validate([
            'title' => 'required',
        ]);

        $imageAddres = EducationGroup::find($request->id)->image;

        if ($request->image != null) {
            $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('EducationGroupImage'), $imageName);
            $imageAddres = url('/') . '/' . 'EducationGroupImage' . '/' . $imageName;
        }

        EducationGroup::where('id', $request->id)->update([
            'title' => $request->title,
            'image' => $imageAddres,
        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }
}
