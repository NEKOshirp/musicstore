@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>lIST OF SONGS</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="http://127.0.0.1:8000/product/index" role="button">See</a>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
    
    <!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/layout/style.css">
	<link rel="stylesheet" type="text/css" href="/layout/bootstrap/css/bootstrap.min.css">

</head>
<body>

<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://norwichlanes.co.uk/wp-content/uploads/2018/12/47202190_1882427201873656_6077240644936400896_n-862x485.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://i0.wp.com/www.donkey-show.com/wp-content/uploads/2018/08/cream-862x485.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://live-production.wcms.abc-cdn.net.au/a362273509f7eccdcf362bb73b3b006d?impolicy=wcms_crop_resize&cropH=788&cropW=1400&xPos=0&yPos=0&width=862&height=485" alt="Third slide">
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
<!-- end slide -->
<!-- list product -->
<h2 class="list-product-title">New product</h2>
<div class="list-product-subtitle">
<p>List product description</p>
</div>
<div class="product-group">
<div class="row">
@foreach($top_product as $key => $product)
<div class="col-md-3 col-sm-6 col-12">
<div class="card card-product mb-3">
<img class="card-img-top" src="{{ 'image/product/'.$product->image }}" alt="Card image cap">
<div class="card-body">
<h5 class="card-title">{{ $product->name }}</h5>
<p class="card-text">{{ $product->price }}$</p>
<p class="card-text">Singer: {{ $product->singer }}</p>
<a href="{{ route('product.show',$product->id) }}" class="btn btn-primary">Details</a>
</div>
<audio controls controlsList="nodownload" style="width: 180px;" ontimeupdate="myAudio(this)">
<source src="{{ 'audio/product/'.$product->audio }}" type="audio/mpeg">
</audio>
<script type="text/javascript">
function myAudio(event){
if(event.currentTime>10){
event.currentTime=0;
event.pause();
alert("Bạn phải trả phí để nghe cả bài")
}
}
</script> 
</div>
</div>
@endforeach
</div>
</div>

<!-- end list product -->

<!-- Load jquery trước khi load bootstrap js -->
<script src="/layout/jquery-3.3.1.min.js"></script>
<script src="/layout/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
@endsection

