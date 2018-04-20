@extends("admin.master")

@section("mainContent")
	<h1>Edit Category</h1>
	<hr>

	{!! Form::open(['url' => '/update-category', 'method'=>'POST', 'class'=>'form-horizontal', "name"=>"editForm"]) !!}
	  <div class="form-group">
	    <label for="category">Category Name:</label>
	    <input type="text" class="form-control" id="categoryName" name="categoryName" value="{{ $categoryById->categoryName }}">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Category Description:</label>
	    <textarea name="categoryDescription" class="form-control" id="categoryDescription">
	    	{{ $categoryById->categoryDescription}}
	    </textarea>
	  </div>
	  <div class="form-group">
	    <label for="publicationStatus">Publication Status:</label>
	    <select class ="form-control" name="publicationStatus">
	    	{{ $categoryById->publicationStatus}}
	    	<option>Select Publication Status</option>
	    	<option value="1">Published</option>
	    	<option value="0">Unpublished</option>
	    </select>
	  </div>
	  <input type="hidden" name="categoryId" value="{{ $categoryById->id }}">

	  <button type="submit" class="btn btn-default btn-success">Submit</button>
	{!! Form::close() !!}
	<script>
		document.forms["editForm"].elements["publicationStatus"].value={{ $categoryById->publicationStatus }}
	</script>
@endsection