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
        $contact = model('Contact');

        $contact->create([
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':message' => $_POST['message']
        ]);

        return redirect();
    }

    public function about()
    {
        return view('pages/about');
    }
}
