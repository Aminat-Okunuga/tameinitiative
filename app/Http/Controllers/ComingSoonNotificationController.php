<?php

namespace App\Http\Controllers;

use App\Models\ComingSoonNotificationEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class ComingSoonNotificationController extends Controller
{
    public function notifyMe(Request $request){
        $this->comingSoonNotificationEmail()->add([
            "email"=>Arr::get($request->all(),"email")
        ]);

        return response()->json([
            "status"=>true,"message"=>"Successfully added"
        ]);
    }

    protected function comingSoonNotificationEmail(){
        return new ComingSoonNotificationEmail();
    }
}
