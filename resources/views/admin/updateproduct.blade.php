<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

   <style type="text/css">
    .title
    {
        color: white; 
        padding-top: 25px;
         font-size: 25px;
    }

    label
    {
        display: inline-block;
        width: 200px;
    }
   </style>
  </head>
  <body>
    
    
      
     
      @include('admin.sidebar')
      @include('admin.navbar')

      
      <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">
       <h1 class="title">Add products </h1>

       @if(session()->has('message'))
       <div class="alert alert-success">
       <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
       </div>
         @endif


    <form action="{{url('productupdate',$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div style="padding:15px;">
    <label> Product Title </label>
    <input type="text" name="title" value="{{$data->title}}" required="">
    </div>

    <div style="padding:15px;">
    <label> Price </label>
    <input type="number" name="price" value="{{$data->price}}"  required="">
    </div>

    <div style="padding:15px;">
    <label> Description </label>
    <input type="text" name="des" value="{{$data->description}}" required="">
    </div>

    <div style="padding:15px;">
    <label> Quantity </label>
    <input type="number" name="quantity" value="{{$data->quantity}}" required="">
    </div>

    <div style="padding:15px;">
    <label> Old Image </label>
    <img height="100" width="100" src="/productimage/{{$data->image}}" > 
    </div>

    <label>Change the image</label>


    <div style="padding:15px;">
    <input type="file" name="file">
    </div>

    <div style="padding:15px;">
    <input class="btn btn-success" type="submit">
    </div>
    </form>







    </div>

    </div>
     
        

      
      
      

    @include('admin.script')
        
  </body>
</html>