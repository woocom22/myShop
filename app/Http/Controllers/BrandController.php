<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\JsonResponse;
use App\Helper\ResponseHelper;

class BrandController extends Controller
{
    public function ByBrandPage()
    {
        return view('pages.product-by-brand');
    }
    public function BrandList():JsonResponse
    {
        $data= Brand::all();
        return ResponseHelper::Out('success',$data,200);
    }


}
