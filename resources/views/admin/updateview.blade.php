

<!DOCTYPE html>
<html lang="en">
  <head>

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

    <base href="/public">
  @include('admin.css')
  </head>
  <body>

   
      <!-- partial -->

      @include('admin.sidebar')


      @include('admin.navbar')
        <!-- partial -->
       
        <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">
        <h1 class="title" >Ürün Düzenleme</h1>

        @if(session()->has('message'))

        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert"></button>
        {{session()->get('message')}}
        </div>
        @endif
        

        <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">

        @csrf

        <div style="padding:15px;">
            <label>Ürün Başlığı</label>
            <input style="color:black;" type="text" name="title" value="{{$data->title}}" required>
        </div>

        <div style="padding:15px;">
            <label>Fiyat</label>
            <input style="color:black;" type="number" name="price" value="{{$data->price}}" required>
        </div>

        <div style="padding:15px;">
            <label>Açıklama</label>
            <input style="color:black;" type="text" name="des" value="{{$data->description}}" required>
        </div>

        <div style="padding:15px;">
            <label>Miktar</label>
            <input style="color:black;" type="text" name="quantity" value="{{$data->quantity}}" required>
        </div>

        <div style="padding:15px;">
            <label style="margin-left:65px; padding-bottom:15px;" >Eski Fotoğraf</label>
            <img style="height:300px; weight:150px; margin-left:75px;" src="/productimage/{{$data->image}}">
        </div>
        
        


        <div style="padding:15px;">
        <label style="margin-left:150px;">Fotoğrafı Değiştir!</label>
            <input type="file" name="file">
        </div>

        <div style="padding:15px; margin-left:65px;">
            <input class="btn btn-success" type="submit">
        </div>

        </form>

        </div>

        </div>


          <!-- partial -->
      

          @include('admin.script')

  </body>
</html>
