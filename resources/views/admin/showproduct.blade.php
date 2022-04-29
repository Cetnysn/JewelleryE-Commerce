

<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>

   
      <!-- partial -->

      @include('admin.sidebar')


      @include('admin.navbar')
        <!-- partial -->
      
        <div style="padding-bottom:45px; margin-right:250px;" class="container-fluid page-body-wrapper">
        <div class="container" align="center">

         @if(session()->has('message'))

        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert"></button>
        {{session()->get('message')}}
        </div>
        @endif

        <table>
          <tr style="background-color:grey;">
            <td style="padding:20px;">Title</td>
            <td style="padding:20px;">Description</td>
            <td style="padding:20px;">Quantity</td>
            <td style="padding:20px;">Price</td>
            <td style="padding:20px;">Image</td>
            <td style="padding:20px;">Update</td>
            <td style="padding:20px;">Delete</td>
          </tr>

          @foreach($data as $product)

          <tr style="background-color:black; text-align:center;" >
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td>
              <img height="150px" width="150px" src="/productimage/{{$product->image}}">
            </td>
            <td>
              <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Güncelle</a>
            </td>
            <td>
              <a class="btn btn-danger" onclick="return confirm('Silmek İstediğine Emin Misiniz?')" href="{{url('deleteproduct',$product->id)}}">Sil</a>
            </td>
          </tr>
          @endforeach

        </table>

       </div>
       </div>

      
          <!-- partial -->
      

          @include('admin.script')

  </body>
</html>
