<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | DikymonZ'
        ];

        return view('pages/home', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];

        return view('pages/contact', $data);
    }
}
