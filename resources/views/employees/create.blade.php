@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Companie</div>

                <div class="card-body">
                    <form action="/employee" method="post">
                    	{{ csrf_field() }}
                    	<div class="form-group">
							<label for="firstName">First name:</label>
							<input type="text" class="form-control" id="firstName">
						</div>
						<div class="form-group">
							<label for="lastName">Last name:</label>
							<input type="text" class="form-control" id="lastName">
						</div>
						<div class="form-group">
							<label for="company">Company name:</label>
							<input type="text" class="form-control" id="company">
						</div>
						<div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" id="email">
						</div>
						<div class="form-group">
    						<label for="phone">Phone:</label>
    						<input type="tel" class="form-control" id="phone">
						</div>
  						<button type="submit" class="btn btn-default">Submit</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection