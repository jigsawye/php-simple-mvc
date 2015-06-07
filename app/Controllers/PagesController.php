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

    public function onContact()
    {
        // TODO: 新增Contact的資料至資料庫
        return redirect();
    }

    public function about()
    {
        return view('pages/about');
    }
}
