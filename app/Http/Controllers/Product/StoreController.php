<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\ColorProduct;
use App\Models\ProductImage;

use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        $productImages = $data['product_images'];
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);


        $tagsIds = $data['tags'];
        $colorsIds = $data['colors'];
        unset($data['tags'],$data['colors'], $data['product_images']);

        $product = Product::firstOrCreate([
            'title' => $data['title'],
        ],$data);

        foreach($tagsIds as $tagsId){
            ProductTag::firstOrCreate([
                'product_id' => $product->id,
                'tag_id' => $tagsId,
            ]);
        }
        foreach($colorsIds as $colorsId){
            ColorProduct::firstOrCreate([
                'product_id' => $product->id,
                'color_id' => $colorsId,
            ]);
        }

        foreach($productImages as $productImage){
            $currentImagesCount = ProductImage::where('product_id', $product->id)->count();
            
            if( $currentImagesCount > 3) continue;

            $filePath = Storage::disk('public')->put('/images',$productImage);
            ProductImage::create([
                'product_id' => $product->id,
                'file_path' => $filePath,
            ]);
        }

        
        return redirect()->route('product.index');
    }
}
