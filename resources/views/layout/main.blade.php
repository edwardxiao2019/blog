
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{csrf_token()}}">


    <title>laravel for blog</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <link href="/css/bootstrap-wysihtml5.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">

</head>

<body>

@include("layout.nav")
<div class="container">

    <div class="blog-header">
    </div>

    <div class="row">
        @yield("content")

        @include("layout.sidebar")
    </div>    </div><!-- /.row -->
</div><!-- /.container -->

@include("layout.footer")
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/js/jquery-ui-1.10.2.custom.min.js"></script>
<script src="/js/wysihtml5-0.3.0.js"></script>
<script src="/js/bootstrap-wysihtml5-0.0.2.js"></script>
<script src="/js/blog.js"></script>

</body>
</html>
