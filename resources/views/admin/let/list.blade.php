@extends('admin.layout')
@section('style')

@stop
@section('content')
<div class="table-layout">
        <div class="chute" style="height: auto;">
            <div class="center-block">
                <div class="panel col-md-12">
                    <div class="panel-heading">
                        <span class="panel-title ml20">Property List</span>
                        <a href="{{url('admin/property-let/info')}}" class="btn btn-save btn-success pull-right mt10"><i class="fa fa-plus"></i> &nbsp;&nbsp;&nbsp;Add New Property</a>

                    </div>
                    <div class="panel-body">
                                <table class="table" cellpadding="5">
                                  <tr>
                                    <th>#</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>PostalCode</th>
                                    <th>Action</th>
                                  </tr>
                           <tbody>       
                              @foreach($properties as $property)
                            <tr>
                              <td>{{ $property->id }}</td>
                              <td>{{ $property->door_no.', '.$property->road.', '.$property->address_1.' '.$property->address_2 }}</td>
                              <td>{{ $property->city }}</td>
                              <td>{{ $property->postal_code }}</td>
                              <td>     
                               <a class="btn btn-primary" href="{{ URL::to('admin/property-let/info/'.$property->id) }}">Edit</a>
      {!! Form::open(array('url' => action('Admin\LetPropertyController@postDelete',$property->id),'method'=>'POST')) !!}
          {!! Form::hidden('id') !!} 
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}                           
     
                              </td>
                            </tr>

                              @endforeach
</tbody>
                                </table>
                                {{ $properties->links() }}
                              
                          

                      </div>
  
                    </div>
                </div>
          </div>                          
</div>
@stop