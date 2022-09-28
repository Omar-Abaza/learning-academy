<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table("courses_students")->insert([
                "course_id" => rand(1, 18),
                "student_id" => rand(1, 20),
                "created_at" => now(),
                "updated_at" => now()
            ]);
        }
    }
}
