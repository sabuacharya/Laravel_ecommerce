<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>
            <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>

            <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding: 10px;">
              @csrf
              <input class="form-control" type="search" name="search" placeholder="search anything">
              <input type="submit" value="Search" class="btn btn-success">
            </form>
            
          </div>
        </div>
        @if(session()->has('message'))
       <div class="alert alert-success">
       <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
       </div>
         @endif
        
        @foreach($data as $product)
            
        
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img height="350" width="50" src="/productimage/{{$product->image}}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>{{$product->title}}</h4></a>
              <h6>${{$product->price}}</h6>
              <p>{{$product->description}}</p>
              <form action="{{url('addcart',$product->id)}}" method="post">
                @csrf
                <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">
                <br>
                <input class="btn btn-primary" type="submit" value="Add Cart">
              </form>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>Reviews (32)</span>
            </div>
          </div>
        </div>
        @endforeach

        @if(method_exists($data,'links'))
        <div class="d-flex justify-content-center">
          {!! $data->links() !!}

        </div>
      @endif
      
      </div>

    </div>
  </div>