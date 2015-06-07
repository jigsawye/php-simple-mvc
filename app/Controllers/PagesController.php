<?php

class PagesController
{
    public function index()
    {
        return view('pages/index');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function about()
    {
        return view('pages/about');
    }
}
