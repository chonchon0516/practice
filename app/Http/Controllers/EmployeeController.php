<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee(){
        $data = [
            '小泉 治虫' => '1996年入社',
            '矢野 心結' =>'2000年入社',
            '浜本 松太郎' =>'2015年入社',
            '小山 英樹' => '2018年入社',
            '森脇 洋司' => '2019年入社',
            '高田 祐介' => '2010年入社',

        ];
        return  view('home',['data' => $data]);
    }
}
