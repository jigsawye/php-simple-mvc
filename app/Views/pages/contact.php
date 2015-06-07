<!DOCTYPE html>
<html>
<head>
    <title>Contact@Fake-Blog</title>
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
                    <li><a href="/about">About</a></li>
                    <li class="active"><a href="/contact">Contact</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header text-center">
                <h3>Contact Us</h3>
            </div>
            <form class="form-horizontal" role="form" method="POST" action="">

                <div class="form-group">
                    <label class="col-md-4 control-label">Your Name</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="name" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail Address</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="message" rows="4"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Send
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>