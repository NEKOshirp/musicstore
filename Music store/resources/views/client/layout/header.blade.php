<!DOCTYPE html>

<html>

<head>

<base href="{{asset('')}}">

<title></title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>

<body>

2. File slide.blade.php

<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">

<ol class="carousel-indicators">

<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

</ol>

<div class="carousel-inner">

<div class="carousel-item active">

<img class="d-block w-100" src="http://via.placeholder.com/1920x530" alt="First slide">

</div>

<div class="carousel-item">

<img class="d-block w-100" src="http://via.placeholder.com/1920x530" alt="Second slide">

</div>

<div class="carousel-item">

<img class="d-block w-100" src="http://via.placeholder.com/1920x530" alt="Third slide">

</div>

</div>

<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

<span class="carousel-control-prev-icon" aria-hidden="true"></span>

<span class="sr-only">Previous</span>

</a>

<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

<span class="carousel-control-next-icon" aria-hidden="true"></span>

<span class="sr-only">Next</span>

</a>

</div>