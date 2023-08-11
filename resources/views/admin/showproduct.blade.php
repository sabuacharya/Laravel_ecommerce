<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    
    
      
      @include('admin.sidebar')
      @include('admin.navbar')

      <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">

        <div class="container" align="center">
            @if(session()->has('message'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
             {{session()->get('message')}}
            </div>
              @endif
            <table>
                <tr style="background-color: grey;">
                    <td style="padding:20px;">Title</td>
                    <td style="padding:20px;">Description</td>
                    <td style="padding:20px;">Quantity</td>
                    <td style="padding:20px;">Price</td>
                    <td style="padding:20px;">Image</td>
                    <td style="padding:20px;">Update</td>
                    <td style="padding:20px;">Delete</td>
                </tr>

                @foreach($data as $product)
                <tr align="center" style="background-color: black;">
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                    <img height="100" width="100" src="/productimage/{{$product->image}}">
                    </td>
                    <td>
                        <a class="btn btn-primary"
                        href="{{url('updateproduct',$product->id)}}">Update</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('are you sure')"
                        href="{{url('deleteproduct',$product->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        
        </div>
        <div>
           
     
     

    @include('admin.script')
        
  </body>
</html>
