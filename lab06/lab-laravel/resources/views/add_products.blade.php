@extends('layout')
@section('title', 'addProducts')
@section('content')

<form action="/add_products" method="post">
	@csrf
	<div>
		<p><strong>Name:</strong>
			<input name="name" type="text" placeholder="enter a name" id="name" class="form-control" required></p>
		<p><strong>Description: </strong>
			<textarea name="description" placeholder="enter a description" id="description" class="form-control" required></textarea></p>
		<p><strong>Photo: </strong>
			<input name="photo" type="text" placeholder="enter a photo url" id="photo" class="form-control" required></p>
		<p><strong>Price: </strong>
			<input name="price" type="text" placeholder="enter a price" id="price" class="form-control" required></p>
		<button type="submit" class="btn btn-warning btn-block text-center">Add product</button>
	</div>
</form>
@endsection