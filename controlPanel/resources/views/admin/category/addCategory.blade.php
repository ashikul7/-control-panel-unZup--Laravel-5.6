@extends("admin.master");

@section("mainContent");
	<h1> Add Category</h1>
	<hr>
	{{ Session::get("msg") }}

	{!! Form::open(['url' => '/save-category', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="categoryName">Category Name:</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="categoryName" placeholder="Category Name" name="categoryName">

	    </div>
	  </div>

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="categoryDescription">Category Description:</label>
	    <div class="col-sm-10"> 
	      <textarea class="form-control" id="categoryDescription" placeholder="Enter Description" name="categoryDescription"></textarea>

	    </div>
	  </div>

	  <div class="form-group"> 
	    	<label class="control-label col-sm-2" for="pubStatusDes">Publication Status Description</label>
		    <div class="col-sm-10"> 
		      <select class="form-control" id="publicationStatus" name="pub">
		      	<option>Select Publication Status</option>
		      	<option value="1">Published</option>
		      	<option value="0">Unpublished</option>
		      </select>
		    </div>
	  </div>

	  <div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default btn-success">Submit</button>
	    </div>
	  </div>
	{!! Form::close() !!}
	
	@include("admin.error.errors");
	      

@endsection;