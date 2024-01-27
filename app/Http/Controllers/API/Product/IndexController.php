<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Product\IndexRequest;
use App\Http\Resources\Product\IndexProductResource;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Filters\ProductFilter;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request){
        $data = $request->validated();
        $filter = app()->make(ProductFilter::class, ['queryParams'=> array_filter($data)]);

        $products = Product::filter($filter)->paginate(3, ['*'], 'page', $data['page']);
        return IndexProductResource::collection($products);
    }
}
