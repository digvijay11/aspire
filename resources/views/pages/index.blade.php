@extends('admin.layout')
@section('content')
<div class="card card-block">
	<div class="row">
	    <div class="col-lg-12 margin-tb ">
	    	<div class="panel">
                  <header class="panel-heading">
                     	<h3>Page Management</h3>
				        	@permission('role-create')
				        	<div class="pull-right">
	            				<a class="btn btn-success" href="{{ route('admin.pages.create') }}"> Create New Page</a>
	        				</div>
				            @endpermission
				  </header>
                  <div class="panel-body">


	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Slug</th>
			<th>Published</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($pages as $key => $page)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $page->title }}</td>
		<td>{{ $page->slug }}</td>
		<td>{{ $page->published }}</td>
		<td>{{ $page->created_at }}</td>
		<td>{{ $page->updated_at }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.roles.show',$page->id) }}">Show</a>
			@permission('role-edit')
			<a class="btn btn-primary" href="{{ route('admin.roles.edit',$page->id) }}">Edit</a>
			@endpermission
			@permission('role-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['admin.roles.destroy', $page->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $pages->render() !!}
</div>
</div>
@endsection