<?php

namespace App\Http\Controllers;

class TestController extends Controller{


    public function index(){

        $app_id = config('app.ding.app_id');

        return view('test');
        return url("https://oapi.dingtalk.com/connect/qrconnect?appid=
$app_id
&response_type=code&scope=snsapi_login&state=STATE&redirect_uri=REDIRECT_URI");
    }

    public function redirect(){

        dd(request()->all());
    }
}
