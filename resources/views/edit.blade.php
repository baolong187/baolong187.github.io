<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit Products</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class = "container">
   		<div class = "row justify-content-center">
   			<div class = "col-md-8">
   				<div class ="card">
   					<div class = "card-header">Edit Item</div>
   					<div class = "card-body">
   						<form method="POST" action="{{route('updateItem')}}">
	    					@csrf
	    					<div class="form-group">
	    						<label for="exampleInputName">Name</label>
	    						<input type="text" name="name" class="form-control" value="{{$item->name}}">
	    						<input type="hidden" name="id" class="form-control" value="{{$item->id}}">
	    					</div>
	    					<div class="form-group">
	    						<label for="exampleInputType">Type</label>
	    						<input type="text" name="type" class="form-control" value="{{$item->type}}">
	    					</div>
	    					<div class="form-group">
	    						<label for="exampleInputQuantity">Quantity</label>
	    						<input type="number" name="qty" class="form-control" value="{{$item->qty}}">
	    					</div>
					  		<button type="submit" class="btn btn-primary">Save</button>
						</form>
					</div>
   				</div>
   			</div>
   		</div>
    </div>

  </body>
  
</html>