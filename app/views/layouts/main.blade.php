<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="laravel project">
    <meta name="author" content="Alexandre">
    {{ HTML::style('assets/bootstrap-3.1.1-dist/css/bootstrap.min.css') }}

    <title>Starter Template for Bootstrap</title>
    <style>
        body {
            padding-top: 50px;
        }
        .form-signin {
            width: 300px;

            margin: 0 auto;
            margin-top: 50px;
        }
        .form-signin input {
           margin:0 0 15px 0;
        }
    </style>


</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">

 @if(Session::has('message'))
    <p class="alert">{{ Session::get('message') }}</p>
 @endif

    {{ $content }}
    
</div>

<!--Javaascript Files-->
{{ HTML::script('assets/js/jquery-1.11.0.js') }}
{{ HTML::script('assets/bootstrap-3.1.1-dist/js/bootstrap.min.js') }}
<!--Javaascript Files-->

</body>
</html>