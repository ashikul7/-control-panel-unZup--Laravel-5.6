@extends("admin.master");

@section("mainContent")
	<h1>Manage Product</h1>
	<hr>
	{{ Session::get("msg") }}

	 <table class="table">
	    <thead>
	      <tr>
	        <th>Sl</th>
	        <th>Product Name</th>
	        <th>Category Name</th>
	        <th>Price</th>
	        <th>Quantity</th>
	        <th>Picture</th>
	        <th>Publication Status</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php
	    		$i = 0;
	    	?>
	    	@foreach( $products as $product)
	      <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $product->productName }}</td>
	        <td>{{ $product->categoryName }}</td>
	        <td>{{ $product->productPrice }}</td>
	        <td>{{ $product->productQuantity }}</td>
	        <td><img src="{{ asset($product->productPicture) }}" width="100"/>{{ $product->productPicture }}</td>
	        <td>{{ $product->productStatus == 1? "Published" : "Unpublished" }}</td>
	        <td><a href="{{ url('/view-product/'.$product->id) }}">View</a> | <a href ="{{ url('/edit-product/' .$product->id) }}">Edit</a> | <a href="{{ url('/delete-product/' .$product->id) }}" onclick="return confirm('Are you sure to delete the product')">Delete</a></td>
	      </tr>
	      @endforeach
	    </tbody>
	  </table>
@endsection