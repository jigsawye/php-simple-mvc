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
        $model = model();
        $model->sql = 'INSERT INTO contacts(name, email, message) VALUES(:name, :email, :message)';

        $model->params = [
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':message' => $_POST['message']
        ];

        $model->query();

        return redirect();
    }

    public function about()
    {
        return view('pages/about');
    }
}
