<?php

namespace Modules\Education\App\Http\Controllers\client;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;
use Modules\Education\App\Models\EducationGroup;
use Modules\Education\App\Models\EducationProduct;

class ProductController extends Controller
{
    public function index(){
        $groups = EducationGroup::all();
        $products = EducationProduct::where('status',2)->orderBy('id', 'desc')->take(7)->get();
        $blogs = [];
        return view('education::client.education',compact('groups','products','blogs'));
    }

    public function course(Request $request){

        $groups = EducationGroup::all();
        $allEducation = EducationProduct::query();
        if ($request->groupId){
            $allEducation->where('groupId',$request->groupId);
        }
        if ($request->search){
            $allEducation->where('title', 'like', '%' . $request->search . '%');
        }
        $allEducation = $allEducation->get();

        return view('education::client.list',compact('groups','allEducation','request'));
    }

    public function freeCourse(Request $request){


        $allEducation = EducationProduct::query()->publishProduct()->whereNull('price')->orWhere('price',0)->get();

        return view('education::client.freeCourse',compact('allEducation'));
    }
    public function allCourse(Request $request){
        $allEducation = EducationProduct::query()->publishProduct()->get();
        return view('education::client.allCourse',compact('allEducation'));
    }

    public function desk(){
        return view('education::client.educationDesk.educationDesk');

    }
    public function courses(){
        return view('education::client.educationCourses.specialCourses');

    }
    public function edufavorite(){
        return view('education::client.favorite.favorite');
    }
    public function allTests(){
        return view('education::client.educationTest.allTests');
    }
    public function myTests(){
        return view('education::client.educationTest.myTests');
    }
    public function eduDetail($id){
        $porduct = EducationProduct::with('season','qas','master')->find($id);
        $studentNumber = EducationStudentProduct::where('productId',$id)->count();
        $levels = ['مقدماتی','متوسط','پیشرفته'];
        $level = $levels[$porduct->level];
        return view('education::client.educationDetail.educationDetail',compact('porduct','studentNumber','level'));
    }

    public function registered(){
        return view('education::client.registeredCourses.registeredCourses');
    }

    public function history(){
        return view('education::client.registeredHistory.registeredHistory');
    }

    public function results(){
        return view('education::client.testsResult.testsResult');
    }

    public function requset(){
        return view('education::client.requestCourse.requestCourse');
    }

    public function place(){
        return view('education::client.educationPlace.educationPlace');
    }

    public function cart(){
        return view('education::client.shoppingCart.shoppingCart');
    }

    public function blog(){
        return view('client.newThem.pages.newBlogTheme.blogDetail');
    }
    public function list(){
        $towns = Town::all();
        $socialComm = SocialCommitment::all();
        $allEducation=EducationProduct::all();
        return view('education::client.list',compact('towns','socialComm','allEducation'));
    }

    public function storeLike($id, $type)
    {

        $likeProject = EducationLikeProduct::where('userId', Auth::id())->where('productId', $id)->first();

        $likes = EducationProduct::find($id)->likes;
        $disLikes = EducationProduct::find($id)->disLikes;

        if ($likeProject) {
            $likeUser = EducationLikeProduct::find($likeProject->id)->type;

            if ($type and $likeUser) {
                EducationLikeProduct::where('id', $likeProject->id)->delete();
                EducationProduct::where('id', $id)->Update([
                    'likes' => $likes - 1,
                ]);

            } else if (!$type and !$likeUser) {
                EducationLikeProduct::where('id', $likeProject->id)->delete();
                EducationProduct::where('id', $id)->Update([
                    'disLikes' => $disLikes - 1,
                ]);

            } else if (!$type and $likeUser) {
                EducationLikeProduct::where('id', $likeProject->id)->Update([
                    'type' => $type,
                ]);
                EducationProduct::where('id', $id)->Update([
                    'likes' => $likes - 1,
                    'disLikes' => $disLikes + 1,
                ]);
            } else if ($type and !$likeUser) {
                EducationLikeProduct::where('id', $likeProject->id)->Update([
                    'type' => $type,
                ]);
                EducationProduct::where('id', $id)->Update([
                    'likes' => $likes + 1,
                    'disLikes' => $disLikes - 1,
                ]);
            }


        } else {

            EducationLikeProduct::create([
                'userId' => Auth::id(),
                'productId' => $id,
                'type' => $type,

            ]);

            if ($type) {
                EducationProduct::where('id', $id)->Update([
                    'likes' => $likes + 1,

                ]);

            } else {
                EducationProduct::where('id', $id)->Update([
                    'disLikes' => $disLikes + 1,
                ]);
            }

        }


        return back();

    }

    public function storeSave($id, $type)
    {

        $saveProject = EducationSaveProduct::where('userId', Auth::id())->where('productId', $id)->first();


        if (!$saveProject) {

            EducationSaveProduct::create([
                'userId' => Auth::id(),
                'productId' => $id,
                'type' => $type,

            ]);
        } else {
            EducationSaveProduct::where('id', $saveProject->id)->Update([
                'type' => $type,
            ]);


        }

        return $type;

    }
}
