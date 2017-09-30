@extends('layouts.main')

@section('title', 'LRWebs | Contact us')

@section('content')

	<h1>Contact us</h1> <p>If you have any enquiries or suggestions, please fill out and submit the form below.</p>

	<div class="row">
		<div class="col-md-12 col-md-offset-2">
			<div class="container">
				<div class="col-md-8">
					<form action="#" method="POST">
						<input type="text" name="first" placeholder="Enter First Name">
						<input type="text" name="last" placeholder="Enter Last Name">
						<input type="text" name="email" placeholder="Enter Email Address">
						<textarea rows=5 name="body"></textarea>
						<input type="submit" class="btn btn-primary btn-lg" style="display:block;width:100%;">
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection