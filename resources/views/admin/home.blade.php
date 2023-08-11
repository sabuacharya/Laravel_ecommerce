<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    
      <!-- partial -->
      
      @include('admin.sidebar')
      @include('admin.navbar')
     
        <!-- partial:partials/_navbar.html -->
       
     @include('admin.body')
        <!-- partial -->

          <!-- partial -->

    @include('admin.script')
        
  </body>
</html>