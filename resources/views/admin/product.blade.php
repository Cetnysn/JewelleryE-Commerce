

<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style type="text/css">

.title{
    color:white; 
    padding-top: 25px; 
    font-size:25px;
}
label{
    display: inline-block;
    width: 200px;
}

  </style>

  </head>
  <body>

   
      <!-- partial -->

      @include('admin.sidebar')


      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">
        <h1 class="title" >Ürün Ekleme</h1>

        @if(session()->has('message'))

        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert"></button>
        {{session()->get('message')}}
        </div>
        @endif
        

        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div style="padding:15px;">
            <label>Ürün Başlığı</label>
            <input style="color:black;" type="text" name="title" placeholder="Ürün başlığı" required>
        </div>

        <div style="padding:15px;">
            <label>Fiyat</label>
            <input style="color:black;" type="number" name="price" placeholder="Ürün fiyatı" required>
        </div>

        <div style="padding:15px;">
            <label>Açıklama</label>
            <input style="color:black;" type="text" name="des" placeholder="Ürün açıklama" required>
        </div>

        <div style="padding:15px;">
            <label>Miktar</label>
            <input style="color:black;" type="text" name="quantity" placeholder="Ürün miktarı" required>
        </div>

        <div style="padding:15px;">
            <input type="file" name="file">
        </div>

        <div style="padding:15px;">
            <input class="btn btn-success" type="submit">
        </div>

        </form>

        </div>

        </div>

       
          <!-- partial -->
      

          @include('admin.script')

  </body>
</html>
