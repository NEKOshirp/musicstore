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
      <img class="d-block w-100" src="https://www.liveabout.com/thmb/DNPhPFtAm2PDIFbcexbdNY2XG-g=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/pop-music-57bce3863df78c87634ea806.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2015/05/07/11/02/guitar-756326__340.jpg" alt="Second slide">
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
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">Popular genres</h2>
		<div class="list-product-subtitle">
			<p>List product description</p>
		</div>
		<div class="product-group">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://via.placeholder.com/280x280" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Rock</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="http://127.0.0.1:8000/category/show/2" class="btn btn-primary">see</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://via.placeholder.com/280x280" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Hiphop</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">See</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://via.placeholder.com/280x280" alt="Card image cap">
					    <a href="http://127.0.0.1:8000/category/show/4" class="btn btn-primary"></a>

					  <div class="card-body">
					    <h5 class="card-title">Elictronic music</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">see</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://via.placeholder.com/280x280" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Folk music</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="http://127.0.0.1:8000/category/show/4" class="btn btn-primary">see</a>
					  </div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</div>
<!-- end list product -->

<!-- Load jquery trước khi load bootstrap js -->
<script src="/layout/jquery-3.3.1.min.js"></script>
<script src="/layout/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>