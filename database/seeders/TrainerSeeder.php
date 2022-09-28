<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            "name"=>"habiba",
            "phone"=>"01116380060",
            "spec"=>"Web developer",
            "image"=>"1.png"
        ]);

        Trainer::create([
            "name"=>"youssef",
            "phone"=>"0111638250",
            "spec"=>"dentist",
            "image"=>"2.png"
        ]);

        Trainer::create([
            "name"=>"omar",
            "phone"=>"01062862556",
            "spec"=>"history",
            "image"=>"3.png"
        ]);

        Trainer::create([
            "name"=>"dina",
            "phone"=>"01555052365",
            "spec"=>"web developer",
            "image"=>"4.png"
        ]);

        Trainer::create([
            "name"=>"ammar",
            "phone"=>"01026256498",
            "spec"=>"dentist",
            "image"=>"5.png"
        ]);
    }
}
