@extends('client.layout.master')

@section('content')

<h2 class="list-product-title">New product</h2>
<div class="list-product-subtitle">
<p>List product description</p>
</div>
<div class="product-group">
<div class="row">
@foreach($products as $key => $product)
<div class="col-md-3 col-sm-6 col-12">
<div class="card card-product mb-3">
<img class="card-img-top" src="{{ asset('image/'.$product->image) }}" alt="Card image cap">
<div class="card-body">
<h5 class="card-title">{{ $product->name }}</h5>
<p class="card-text">{{ $product->price }}</p>
<a href="{{ route('page.detail',$product->id) }}" class="btn btn-primary">Details</a>
</div>
<audio controls controlsList="nodownload" style="width: 180px;" ontimeupdate="myAudio(this)">
<source src="{{ asset('audio/'.$product->audio) }}" type="audio/mpeg">
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
@endsection