@extends("admin.master")

@section("mainContent")
	<h1>Product Details</h1>
	<img src ="{{ asset($product->productPicture) }}" width="300"/>

	<table>
		<tr>
			<td>Product Name</td><td>:</td><td class="text-primary">{{ $product->productName }}</td>
		</tr>
		<tr>
			<td>Category Name</td><td>:</td><td>{{ $product->categoryName }}</td>
		</tr>
		<tr>
			<td>Product Price</td><td>:</td><td>{{ $product->productPrice }}</td>
		</tr>
		<tr>
			<td>Product Quantity</td><td>:</td><td>{{ $product->productQuantity }}</td>
		</tr>
		<tr>
			<td>Product Description</td><td>:</td><td>{{ $product->productDescription}}</td>
		</tr>
		<tr>
			<td>Publication Status</td><td>:</td><td>{{ $product->productStatus ==1? "Published" : "Unpublished"}}</td>
		</tr>
	</table>
	<a href ="{{ url('/manage-product')}}">Back to Manage Product</a>
@endsection