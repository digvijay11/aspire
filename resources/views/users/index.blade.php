@extends('admin.layout')
 
@section('content')
<div class="card card-block">
	<div class="row">
	    <div class="col-lg-12 margin-tb ">
	    	<div class="panel">
                  <header class="panel-heading">
                     	<h3>Users Management</h3>
                     	<div class="pull-right">
	            				<a class="btn btn-success" href="{{ route('admin.user.create') }}"> Create New User</a>
	        			</div>
				  </header>
                  <div class="panel-body">
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Roles</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($data as $key => $user)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $user->name }}</td>
		<td>{{ $user->email }}</td>
		<td>
			@if(!empty($user->roles))
				@foreach($user->roles as $v)
					<label class="label label-success">{{ $v->display_name }}</label>
				@endforeach
			@endif
		</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.user.show',$user->id) }}">Show</a>
			<a class="btn btn-primary" href="{{ route('admin.user.edit',$user->id) }}">Edit</a>
			{!! Form::open(['method' => 'DELETE','route' => ['admin.user.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
	</table>
	{!! $data->render() !!}
</div>
</div>
@endsection