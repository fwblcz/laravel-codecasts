<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $users = [
            '0' => [
                'first_name' => 'Renato',
                'last_name' => 'Hysa'
            ],
            '1' => [
                'first_name' => 'Jessica',
                'last_name' => 'Alba'
            ]
        ];
        return view('site/index',compact('users'));
    }
}
