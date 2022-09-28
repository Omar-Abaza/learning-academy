<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $data["contact"] = Setting::select("map","city","address","phone","work_hours","email","name")->first();
        return view("front.contacts.index")->with($data);
    }
}
