<!DOCTYPE html>
<html>
<head>
    <title>Post@Fake-Blog</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Fake-Blog</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li class="active"><a href="/posts">Post</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php
        foreach ($posts as $post) :
        ?>
            <section>
                <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="/posts/show?id=<?=$post['id']?>"><?=$post['title']?></a>
                    <a href="/posts/edit?id=<?=$post['id']?>" class="btn btn-primary navbar-right">Edit</a>
                </div>
                    <div class="panel-body">
                        <?=nl2br($post['content'])?>
                    </div>
                </div>
            </section>
        <?php
        endforeach;
        ?>
    </div>

</body>
</html>