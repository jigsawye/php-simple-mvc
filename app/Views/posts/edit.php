<!DOCTYPE html>
<html>
<head>
    <title>Post@Fake-Blog</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
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

        <form class="form-horizontal" method="post" action="/posts/delete?id=<?=$_GET['id']?>">
            <div class="form-group">
                <button type="submit" class="btn btn-danger navbar-right">Delete the post</button>
            </div>
        </form>
        <form class="form-horizontal" method="post" action="/posts/update?id=<?=$_GET['id']?>">
            <legend>Edit a post</legend>
            <div class="form-group">
                <label for="titleField" class="col-lg-2 control-label">Title</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="titleField" name="title" placeholder="Title">
                </div>
            </div>

            <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">Post content</label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="textArea" name="content"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Reste</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>