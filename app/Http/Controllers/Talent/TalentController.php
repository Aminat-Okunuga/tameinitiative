<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TalentController extends Controller
{
    public function index(){
        return view("pages.talent.talents");
    }

    public function singleTalent(){
        return view("pages.talent.talent-item");
    }
}
