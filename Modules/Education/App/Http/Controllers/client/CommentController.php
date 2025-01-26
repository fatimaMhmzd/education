<?php

namespace Modules\Education\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Education\Entities\Comment;

class CommentController extends Controller
{
    public function index($productId)
    {

    }

    public function store(Request $request)
    {
        Comment::query()->create([
            'productId'=>$request->productId,
            'userId'=>Auth::id(),
            'body'=>$request->body,
        ]);
        return back()->with('success', true)->with('message', 'نظر شما با موفقیت ثبت شد');
    }
}
