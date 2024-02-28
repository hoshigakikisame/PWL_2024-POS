<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function handle($category)
    {
        return view('product.category.category')->with([
            'category' => $category
        ]);
    }
}