<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

use App\Models\Tag;
use App\Models\Color;
use App\Models\Category;
use App\Models\Group;

class EditController extends BaseController
{
    public function __invoke(Product $product){
        $tags = Tag::all();
        $colors = Color::all();
        $categories = Category::all();
        $groups = Group::all();
        return view('product.edit', compact('product','tags', 'colors', 'categories', 'groups'));
    }
}
