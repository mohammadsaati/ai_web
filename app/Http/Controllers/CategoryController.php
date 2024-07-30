<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    const BASIC     =   'category.';
    const SHOW      =   self::BASIC.'show';

    public function __construct(public readonly CategoryService $service)
    {}

    public function show(Category $category)
    {
        $data['title']   =   $category->name;
        $data['category']  =   $category;

        return view(self::SHOW , compact('data'));
    }
}
