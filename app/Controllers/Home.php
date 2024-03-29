<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $templates = [
            'menu'      => view('templates/include/side_menu'),
            'header'    => view('templates/include/top_bar'),
            'page'      => view('pages/dashboard/dashboard')
        ];
        return view('templates/index', $templates);
    }
}