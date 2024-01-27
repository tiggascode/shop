<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Color;
use App\Models\Category;
use App\Models\Group;
use App\Models\Product;

class CreateController extends BaseController
{
    public function __invoke(){
        $tags = Tag::all();
        $colors = Color::all();
        $categories = Category::all();
        $groups = Group::all();
        $products= Product::all();
        return view('product.create', compact('products','tags', 'colors', 'categories', 'groups'));
    }
}
