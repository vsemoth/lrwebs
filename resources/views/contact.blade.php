@extends('layouts.app')

@section('title', 'LRWebs | Contact us')

@section('content')

	<div class="row">
		<div class="col-md-12 col-md-offset-2">
			<div class="container">
				<div class="col-md-8">

				<h1 clasa="title dark">Contact us:</h1> <p>If you have any enquiries or suggestions, please fill out and submit the form below.</p>
					<hr>
					<form action="#" method="POST">

						<div class="row">
							<div class="container">

								<div class="form-group col-md-4">
									<input class="form-control" type="text" name="first" placeholder="Enter First Name">
								</div>

								<div class="form-group col-md-4">
									<input class="form-control" type="text" name="last" placeholder="Enter Last Name">
								</div>

								<div class="form-group col-md-8">
									<input class="form-control" type="text" name="email" placeholder="Enter Email Address">
								</div>

								<div class="form-group col-md-8">
									<textarea class="form-control" rows=5 name="body"></textarea>
									<hr>
								<input type="submit" class="btn btn-primary btn-lg" style="display:block;width:100%;">

								</div>

							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection