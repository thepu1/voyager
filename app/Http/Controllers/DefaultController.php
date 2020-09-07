<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class DefaultController extends Controller
{
    public function index(){
        $categories = Category::all();
        return $categories;
    }
}
