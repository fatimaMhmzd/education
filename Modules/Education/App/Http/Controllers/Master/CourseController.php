<?php

namespace Modules\Education\App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Modules\Education\App\Models\EducationGroup;
use Modules\Education\App\Models\EducationProduct;
use Modules\Education\App\Models\EducationSeason;
use Modules\Education\App\Models\EducationType;

class CourseController extends Controller
{
    public function index()
    {
        //$courses = EducationProduct::where('creatorId',Auth::id())->get();
        $courses = EducationProduct::all();
        return view('education::master.courses.myCourses',compact('courses'));
    }
    public function test()
    {
        return view('education::master.courses.makeNewCourse.thirdBakup');
    }

    public function create(Request $request)
    {
        $types = EducationType::all();
        $groups = EducationGroup::all();
        return view('education::master.courses.makeNewCourse.start', compact('types', 'groups'));
    }

    public function storeCreate(Request $request)
    {
        return view('education::master.courses.makeNewCourse.start');
    }

    public function firstStep(Request $request, $id)
    {
        $types = EducationType::all();
        $groups = EducationGroup::all();
        $data = EducationProduct::with('groups')->find($id);
        Session::put('courseId', $id);
        return view('education::master.courses.makeNewCourse.firstPlan',compact('data','groups','types'));
    }
    public function secondStep(Request $request, $id)
    {
        $data = EducationProduct::/*with('qas')->*/find($id);
        return view('education::master.courses.makeNewCourse.seccondPlan',compact('data'));
    }
    public function thirdStep(Request $request, $id)
    {
        $data = EducationProduct::find($id);
        $seosens = EducationSeason::with('lessons')->where('productId',$id)->get();
        return view('education::master.courses.makeNewCourse.newThirdPlan',compact('data','seosens'));
    }
    public function firstStepStore(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'length' => 'required',
        ], [
            'title.required' => 'عنوان الزامی است',
            'length.required' => 'مدت زمان دوره الزامی است'
        ]);

        $startDate = $request->start ? Verta::parse($request->start)->datetime()->format('Y-m-d H:i:s') : null;
        $endDate = $request->end ? Verta::parse($request->end)->datetime()->format('Y-m-d H:i:s') : null;


        if ($request->id == 0) {

            $productId = EducationProduct::create([
                'creatorId' => Auth::id(),
                'title' => $request->title,
                'length' => $request->length,
                'start' => $startDate,
                'end' => $endDate,
                'price' => str_replace(',', '', $request->price),
                'offPercent' => $request->offPercent,
            ])->id;
        }else{
            EducationProduct::where('id',$request->id)->update([
                'creatorId' => Auth::id(),
                'title' => $request->title,
                'length' => $request->length,
                'start' => $startDate,
                'end' => $endDate,
                'price' => str_replace(',', '', $request->price),
                'offPercent' => $request->offPercent,
            ]);
            $productId = $request->id;
        }

      /*  if ($request->groupId) {
            EducationGroupProduct::where('productId',$productId)->delete();
            foreach ($request->groupId as $item) {
                EducationGroupProduct::create([
                    "groupId" => $item,
                    "productId" => $productId,
                ]);
            }
        }

        if ($request->userType) {
            EducationProductUserType::where('productId',$productId)->delete();
            foreach ($request->userType as $item) {
                EducationProductUserType::create([
                    "productId" => $productId,
                    "typeId" => $item,
                ]);
            }
        }

        if ($request->permission) {
            EducationProductUserPermission::where('productId',$productId)->delete();
            foreach ($request->permission as $item) {
                EducationProductUserPermission::create([
                    "productId" => $productId,
                    "permissionId" => $item,
                ]);
            }
        }*/

        Session::put('courseId', $productId);

        return Redirect::route('education_master_course_update_secondStep', Session::get('courseId'));

    }
    public function secondStepStore(Request $request)
    {
        $id = Session::get('courseId');
        $product = EducationProduct::find($id);
        $imageAddres = $product->image;
        if ($request->firstImage and count($request->firstImage)>0){
            $imageName = rand(11111, 99999) . time() . '.' . request()->firstImage[0]->getClientOriginalExtension();
            request()->firstImage[0]->move(public_path('educationProductImage'), $imageName);
            $imageAddres = url('/') . '/' . 'educationProductImage' . '/' . $imageName;
        }

        $videoImage = $product->videoCover;

        if ($request->mainImage and count($request->mainImage)>0){
            $imageName = rand(11111, 99999) . time() . '.' . request()->mainImage[0]->getClientOriginalExtension();
            request()->mainImage[0]->move(public_path('educationProductImage'), $imageName);
            $videoImage = url('/') . '/' . 'educationProductImage' . '/' . $imageName;
        }
        EducationProduct::where('id',$id)->update([
            'videoCover' => $videoImage,
            'image' => $imageAddres,
            'video' => $request->video,
            'description' => $request->description,
            'appropriate' => $request->appropriate,
            'properties' => $request->properties,
        ]);
        if ($request->qaId) {
            EducationQa::whereNotIn('id', $request->qaId)->delete();
        }
        if ($request->qaTitle) {
            $titles =$request->qaTitle;
            $descriptions =$request->qaDescription;
            foreach ($request->qaTitle as $key=>$item) {
                if ($request->qaId and $key < count($request->qaId)){
                    EducationQa::where('id',$request->qaId[$key])->update([
                        "title" => $titles[$key],
                        "description" => $descriptions[$key],
                    ]);
                }else{
                    EducationQa::create([
                        "productId" => $id,
                        "title" => $titles[$key],
                        "description" => $descriptions[$key],
                    ]);
                }
            }
        }
        return Redirect::route('education_master_course_update_thirdStep', Session::get('courseId'));
    }
    public function thirdStepStore(Request $request)
    {


    }
    public function textUpload(Request $request)
    {
        EducationProductItem::create([
            'product_id' => $request->productId,
            'text' => $request->text,
            'titlee' => $request->titlee,
            'description' => $request->description,
            'netType' => $request->netType,
            'preview' => '0',
        ]);
        return "ok";
    }
    public function linkUpload(Request $request)
    {
        EducationProductItem::create([
            'product_id' => $request->productId,
            'url' => $request->url,
            'titlee' => $request->titlee,
            'description' => $request->description,
            'netType' => $request->netType,
            'preview' => '0',
        ]);
        return "ok";
    }

}
