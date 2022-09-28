<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function cat($id)
    {
        $data["category"] = Category::FindOrFail($id);
        $data["courses"] = Course::where("category_id", "=", $id)->get();
        return view("front.courses.cat")->with($data);
    }

    public function show($id, $c_id)
    {
        $data["course"] = Course::FindOrFail($c_id);
        // $data["category"] = Category::FindOrFail($id);
        return view("front.courses.show")->with($data);



    }
}
