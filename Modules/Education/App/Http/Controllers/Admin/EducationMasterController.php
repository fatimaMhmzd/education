<?php

namespace Modules\Education\App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Education\App\Models\EducationMaster;
use Yajra\DataTables\Facades\DataTables;

class EducationMasterController extends Controller
{
    public function add()
    {
        return view('education::admin.master.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'mobile' => 'required',
            'description' => 'required',
            'rezome' => 'required',
            'image' => 'required',
        ]);


        $user = User::firstOrCreate(
            ['mobile' => $request->mobile]
        );;
        if ($user) {
            $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('educationMasterImage'), $imageName);
            $imageAddres = url('/') . '/' . 'educationMasterImage' . '/' . $imageName;

            EducationMaster::create([
                'userId' => $user->id,
                'title' => $request->title,
                'image' => $imageAddres,
                'description' => $request->description,
                'rezome' => $request->rezome,
                'seoDescription' => $request->seoDescription,
                'seoKeyboard' => $request->seoKeyboard,
            ]);

        }




        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }


    public function list()
    {
        return view('education::admin.master.list');
    }

    public function ajax()
    {

        $data = EducationMaster::all();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('admin_education_master_delete', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('admin_education_master_update', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        EducationMaster::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');

    }

    public function update($id)
    {
        $educationMaster = EducationMaster::find($id);
        return view('education::admin.master.update', compact('educationMaster'));


    }

    public function storeUpdate(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'rezome' => 'required',
        ],[
            'title.required' => 'عنوان الزامی است',
            'description.required' => 'توضیحات الزامی است',
            'rezome.required' => 'رزومه الزامی است',
        ]);


        $imageAddres = EducationMaster::find($request->id)->image;

        if ($request->image != null) {
            $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('educationMasterImage'), $imageName);
            $imageAddres = url('/') . '/' . 'educationMasterImage' . '/' . $imageName;
        }

        EducationMaster::where('id', $request->id)->update([
            'title' => $request->title,
            'image' => $imageAddres,
            'description' => $request->description,
            'rezome' => $request->rezome,
            'seoDescription' => $request->seoDescription,
            'seoKeyboard' => $request->seoKeyboard,
        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }

}
