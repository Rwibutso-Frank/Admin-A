@extends('layouts.master')

@section('title')

View Category

@endsection

@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
	{{ session('status') }}
</div>
@endif

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a> <a href="#" class="current">View Category</a> </div>
		<h1> <b> All Categories</h1></b>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">

				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
						<h5>Category Table</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>Category ID</th>
									<th>Category Name</th>
									<th>Description</th>
									<th>Category URL</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($categories as $category)
								<tr class="gradeX">
									<td> {{ $category->id }}</td>
									<td>{{ $category->name }}</td>
									<td>{{ $category->description }}</td>
									<td>{{ $category->url }}</td>
									<td class="center">
										<a href="{{ url('edit_category/'.$category->id) }}" class="btn btn-primary btn-mini">Edit</a> 
										<a href="#" class="btn btn-danger btn-mini">Delete</a>
									</td>
								</tr>
									@endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection
