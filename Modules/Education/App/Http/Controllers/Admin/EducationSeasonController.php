<?php

namespace Modules\Education\App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Education\App\Models\EducationSeason;
use Yajra\DataTables\Facades\DataTables;

class EducationSeasonController extends Controller
{
    public function add($productId)
    {
        return view('education::admin.season.add', compact("productId"));
    }


    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'subject' => 'required',
            'productId' => 'required',
        ], [
            'title.required' => 'عنوان الزامی است',
            'subject.required' => 'موضوع الزامی است',
        ]);

        EducationSeason::create([
            'title' => $request->title,
            'subject' => $request->subject,
            'productId' => $request->productId,
        ]);
$productId =$request->productId;
        return view('education::admin.season.list', compact("productId"))->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }


    public function list($productId)
    {
        return view('education::admin.season.list', compact("productId"));
    }

    public function ajax($productId)
    {

        $data = EducationSeason::query()->where('productId', $productId)->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('admin_education_session_delete', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('admin_education_session_update', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>
<a href="' . route('admin_education_lesson_add', $row->id) . '" class="btn btn-success">افزودن درس</a>
<a href="' . route('admin_education_lesson_list', $row->id) . '" class="btn btn-success">لیست درس ها</a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        EducationSeason::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');

    }

    public function update($id)
    {
        $season = EducationSeason::find($id);
        return view('education::admin.season.update', compact('season'));


    }

    public function storeUpdate(Request $request)
    {

        $request->validate([
            'title' => 'required',
        ], [
            'title.required' => 'عنوان الزامی است',
        ]);

        $season = EducationSeason::query()->find($request->id);
        if ($season) {
            $season->update([
                'title' => $request->title,
                'subject' => $request->subject ?? $season->subject,
            ]);
        }
        $productId = $season->productId;

        return view('education::admin.season.list', compact("productId"))->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }

}
