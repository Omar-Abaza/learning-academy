<?php

namespace Database\Seeders;

use App\Models\SiteContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContents extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SiteContent::create([
        //     "name"=>"banner",
        //     "content"=>json_encode([
        //         "title"=>"EVERY CHILD YEARNS TO LEARN",
        //         "sub_title"=>"Making Your Child's World Better",
        //         "desc"=>"Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you'll male grass yielding yielding man",
        //     ]),
        // ]);

        // SiteContent::create([
        //     "name"=>"courses",
        //     "content"=>json_encode([
        //         "title"=>"POPULAR COURSES",
        //         "sub_title"=>"Special Courses",
        //     ]),
        // ]);

        SiteContent::create([
            "name"=>"test",
            "content"=>json_encode([
                "title"=>"TESTIMONIALS",
                "sub_title"=>"Happy Students",
            ]),
        ]);




    }
}
