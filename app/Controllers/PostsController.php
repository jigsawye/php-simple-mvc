<?php

class PostsController
{
    /**
     * 顯示所有文章
     *
     * @return View [description]
     */
    public function index()
    {
        $Post = model('Post');

        $posts = $Post->all();

        return view('posts/index', compact('posts'));
    }

    /**
     * 顯示單一文章
     *
     * @return View [description]
     */
    public function show()
    {
        $isNumber = preg_match('/^[1-9][0-9]*$/', $_GET['id']);

        if ($isNumber) {
            $Post = model('Post');
            $post = $Post->find($_GET['id']);

            return view('posts/show', compact('post'));
        } else {
            return redirect('/posts');
        }
    }

    /**
     * 顯示建立文章的表單
     *
     * @return View [description]
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * 接收建立文章表單的資料並寫入資料庫
     *
     * @return Redirect [description]
     */
    public function store()
    {
        $Post = model('Post');
        $postId = $Post->create([
            ':title' => $_POST['title'],
            ':content' => $_POST['content']
        ]);

        return redirect('/posts');
    }

    /**
     * 顯示編輯文章的表單
     *
     * @return View [description]
     */
    public function edit()
    {
        $isNumber = preg_match('/^[1-9][0-9]*$/', $_GET['id']);

        if ($isNumber) {
            $Post = model('Post');
            $post = $Post->find($_GET['id']);

            return view('posts/edit', compact('post'));
        } else {
            return redirect('/posts');
        }
    }

    /**
     * 接收更新文章表單的資料並更新資料庫
     *
     * @return Redirect [description]
     */
    public function update()
    {

    }

    /**
     * 刪除單一文章
     *
     * @return Redirect [description]
     */
    public function delete()
    {

    }
}
