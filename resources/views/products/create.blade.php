<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Product</title>
</head>
<body>
	<form action="{{url('products')}}" method="POST">
		{{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}
		{{csrf_field()}}
		<div class="form-group">
			<label for="txtName"> Name:</label>
			<input class="form-control" type="text" name="name" id="txtName">
		</div>
		<div class="form-group">
			<label for="txtDescription">Description :</label>
			<textarea class="form-control" name="description" id="txtDescription" cols="30" rows="10"></textarea>
		</div>
		<button type="submit" class="btn btn-success">
			Save
		</button>
		<button type="reset" class="btn btn-default">
			Cancel
		</button>
	</form>
</body>
</html>