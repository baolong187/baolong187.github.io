<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Products</title>
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
   					<div class = "card-header">
   						<form method="get" action="{{route('searchItem')}}">
   							<input type="text" name="name" class="form-control" placeholder="Search by name">
   						</form>

   					</div>
   					<div class = "card-body">
   						<table class="table table-bordered">
    						<thead>
						        <tr>
						        	<th scope="col">No</th>
						          	<th scope="col">Name</th>
						          	<th scope="col">Type</th>
						          	<th scope="col">Quantity</th>
						          	<th scope="col">Edit</th>
						          	<th scope="col">Delete</th>
						        </tr>
    						</thead>
      						<tbody>
      							@php($i=1)
      							@foreach($allItems as $item)
      							<tr>
      								<th scope="row">{{$i++}}</th>
							        <td>{{$item->name}}</td>
							        <td>{{$item->type}}</td>
							        <td>{{$item->qty}}</td>
							        <td><a class="btn btn-primary" href="{{route('editItem',['id'=>$item->id])}}" role="button">Edit</a></td>
							        <td><a class="btn btn-danger" href="{{route('deleteItem',['id'=>$item->id])}}" role="button" onclick="return confirm('Are you sure to delete ?')">Delete</a></td>
							    </tr>
							   	@endforeach
      						</tbody>
						</table>
						{{$allItems->links()}}
						<div class="text-right">
	   						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add</button>
	   					</div>
   					</div>
   				</div>
   			</div>
   		</div>
    </div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	      			<h5 class="modal-title" id="exampleModalLabel">Create new item</h5>
	      			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	      				<span aria-hidden="true">&times;</span>
	        		</button>
	      		</div>
	    		<div class="modal-body">
	    			<form method="POST" action="{{route('saveItem')}}">
	    				@csrf
	    				<div class="form-group">
	    					<label for="exampleInputName">Name</label>
	    					<input type="text" name="name" class="form-control" placeholder="Enter name">
	    				</div>
	    				<div class="form-group">
	    					<label for="exampleInputType">Type</label>
	    					<input type="text" name="type" class="form-control" placeholder="Type">
	    				</div>
	    				<div class="form-group">
	    					<label for="exampleInputQuantity">Quantity</label>
	    					<input type="number" name="qty" class="form-control" placeholder="Quantity">
	    				</div>
					  	<button type="submit" class="btn btn-primary">Save</button>
					</form>
	    		</div>
	    	</div>
	  	</div>
	</div>

  </body>
  
</html>