<?php

namespace App\Http\Controllers\api;

class IndexController
{
    /**
     * @OA\Get   (
     *     path="/api",
     *     tags={"تست"},
     *     summary="تست",
     *     description="تست",
     *     @OA\Response(response=200, description="Success", @OA\JsonContent()),
     *     @OA\Response(response=500, description="Internal Server Error", @OA\JsonContent()),
     * )
     */
    public function index(){
        return "hi";
    }
}
