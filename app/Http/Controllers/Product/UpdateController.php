<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\ColorProduct;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\Product\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Product $product){
        $data = $request->validated();
        


        $this->service->update($data, $product);

        return view('product.show', compact('product'));
    }
}
