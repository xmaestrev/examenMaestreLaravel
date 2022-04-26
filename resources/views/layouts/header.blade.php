<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/mystyles.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        
        <nav class="nav">
            <div class="nav-1">
                <a href="/"><i class="fa fa-home"></i></a>
            </div>
            <div class="nav-2">
                <a class="active" href="/">Inici</a>
                <a href="{{route("anadir")}}">Añadir</a>
            </div>
        </nav>
        
    </header>