<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $active = 'home';
        return view('pages.index', ['active' => $active]);
    }

    public function about()
    {
        $active = 'info';
        return view('pages.info', ['active' => $active]);
    }


    public function faq()
    {
        $active = 'faq';
        return view('pages.faq', ['active' => $active]);
    }
}
