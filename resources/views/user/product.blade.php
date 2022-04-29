@if(session()->has('message'))

<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert"></button>
{{session()->get('message')}}
</div>
@endif
<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Ürünler</h2>
					
					<p>Ürünlerimiz göz kamaştırmak için sizleri bekliyor.</p>


					<form action="{{url('/search')}}" method="get" class="form-inline"  style="float: right; padding: 10px;" >
                      @csrf
                      <input class="form-control" type="search" name="search" placeholder="ara">

                      <input type="submit" value="search" class="btn btn-success">

					</form>

				</div>
			</div>

			
 
			@foreach($data as $product)

            <div class="col-md-4">
             <div class="product-item">
	          <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt="" /></a>
	          <div class="down-content">
	           <a href="#"><h4>{{$product->title}}</h4></a>
	           <h6>{{$product->price}}</h6>
	           <p>
		       {{$product->description}}
	           </p>
              
	          <form action="{{url('addcart',$product->id)}}" method="POST">
	          @csrf
	          <hr>
	          <input type="number" style="width:120px" value="1" min="1" class="form-control" name="quantity">
	          <br>
	          <input class="btn btn-warning" style="width:120px" type="submit" value="Sepete Ekle">

	          </form>

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
