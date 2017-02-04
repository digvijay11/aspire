@extends('admin.layout')
@section('style')

@stop
@section('content')
<div class="table-layout">
        <div class="chute" style="height: auto;">
            <div class="center-block">
                <div class="panel col-md-12">
                    <div class="panel-heading">
                        <span class="panel-title ml20">{{ucwords($type)}} List</span>
                        <a href="{{url('admin/customers/'.$type)}}" class="btn btn-save btn-success pull-right mt10"><i class="fa fa-plus"></i> &nbsp;&nbsp;&nbsp;Add New {{$type}}</a>

                    </div>
                    <div class="panel-body">
                                <table class="table" cellpadding="5">
                                  <tr>
                                    <th>#</th>
                                    <th><!--a href="{{url('admin/customers/list/'.$type.'?sort=name')}}"-->Name<!--/a--></th>
                                    <th>Email</th>
                                    <th>Mobile1</th>
                                    <th>Mobile2</th>
                                    <th>Action</th>
                                  </tr>
                           <tbody>       
                              @foreach($customers as $customer)
                            <tr>
                              <td>{{ $customer->id }}</td>
                              <td>{{ $customer->name }}</td>
                              <td>{{ $customer->email }}</td>
                              <td>{{ $customer->mobile1 }}</td>
                              <td>{{ $customer->mobile2 }}</td>
                              <td>
                                
      <a class="btn btn-primary" href="{{ URL::to('admin/customers/'.$type.'/profile/'.$customer->id) }}">Edit</a>
      {!! Form::open(array('url' => action('Admin\CustomersController@postDelete',$customer->id),'method'=>'POST')) !!}
          {!! Form::hidden('id') !!} 
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
                              </td>
                            </tr>

                              @endforeach
</tbody>
                                </table>
                                {{ $customers->links() }}
                              
                          

                      </div>
  
                    </div>
                </div>
          </div>                          
</div>
@stop