<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use App\Models\Test;
use App\Models\Trainer;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $data["courses"] = Course::select("id", "name", "small_desc", "category_id", "trainer_id", "price", "image")
            ->orderBy("id", "desc")->take(3)->get();

        $data["tests"] = Test::select("spec", "name", "desc", "image")->get();

        $data["courses_count"] = Course::count();
        $data["trainers_count"] = Trainer::count();
        $data["students_count"] = Student::count();


        return view("front.index")->with($data);
    }
}
