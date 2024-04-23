@extends('layouts.app-master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="display: flex; margin-top: 20px; ">
            <div class="pull-left">
                <h2>Search Results</h2>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Singer</th>
            <th>Price</th>
            <th>Category</th>
            <th>Image</th>
            <th>Audio</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($searchMusic as $key => $product)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->singer }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category->name }}</td>
            <td><img src="{{ asset('image/product/'.$product->image) }}" alt="" border=3 height=150 width=200></td>
            <td><audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
                <source src="{{ asset('audio/product/'.$product->audio) }}" type="audio/mpeg">
                </audio>
                <script type="text/javascript">
                    function myAudio(event){
                        if(event.currentTime>60){
                            event.currentTime=0;
                            event.pause();
                            alert("Bạn phải trả phí để nghe cả bài")
                        }
                    }
                </script> </td>
            <td>{{ $product->description }}</td>
            <td>
                <form action="{{ route('product.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('product.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">Edit</a>
   
                    <a class="btn btn-primary" href="{{ route('product.destroy',$product->id) }}">Delete</a>
   
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endsection