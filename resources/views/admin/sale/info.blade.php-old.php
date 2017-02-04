@extends('admin.layout')
@section('content')
<style type="text/css">
 .btn-150{  width: 156px;
    text-align: left;
}
.btn-save{
    position: absolute;
    margin-top: -82px;
    right: 0;
    text-transform: uppercase;
}
.search-icon{cursor: pointer;}
.searchAddress{
    position: absolute;
    right: 18px;
    margin-top: -9px;}

</style>
<div class="card card card-block">
    <div class="row">
        

<div class="panel-head">
	@include('admin.partials.property-sale')
	<div class="col-xs-10">
		<div class="card  card-block property-card" >
			<br>
            {!! Form::open(array('url' => action('Admin\SalePropertyController@postStore'),'method'=>'POST')) !!}
				<button type="button"  class="btn btn-save btn-success pull-right">  Save Property </button>
                <a href="javascript:Bootpop('{{ URL::to('/address')}}',{title:'Find Address'})" class=" btn btn-oval btn-warning searchAddress"> <i class="fa fa-search"></i>  Find Address</a>
                                    <h5>Address Infomation </h5><hr>
                                    <div class="row form-group">
                                        <div class="col-xs-6"> 
                                        	<label for="">Address 1</label>
                                            {!! Form::text('address_1', null, array('id'=>'address_1','class' => 'form-control form-control-sm')) !!}
                                        </div>
                                        <div class="col-xs-6"> 
                                        	<label for="">Address 2</label>
                                            {!! Form::text('address_2', null, array('id'=>'address_2','class' => 'form-control form-control-sm')) !!}
                                        </div>
                                    </div>
           
                                
    
                                <div class="row form-group">
                                    <div class="col-xs-4"> 
                                    	<label for="">City</label>
                                        {!! Form::text('city', null, array('id'=>'city','class' => 'form-control form-control-sm')) !!}
                                    </div>
                                    <div class="col-xs-4"> 
                                    	<label for="">Postal Code</label>
                                        {!! Form::text('postal_code', null, array('id'=>'postal_code','class' => 'form-control form-control-sm')) !!}
                                    </div>
                                    <div class="col-xs-4"> 
                                    	<label for="">County</label>
                                        {!! Form::text('county', null, array('id'=>'county','class' => 'form-control form-control-sm')) !!}
                                        {!! Form::hidden('latitude', null, array('id'=>'latitude','class' => 'form-control form-control-sm')) !!}
                                        {!! Form::hidden('longitude', null, array('id'=>'longitude','class' => 'form-control form-control-sm')) !!}
                                    </div>
                                </div><br>
                                
                                <h5>Property  Infomation</h5><hr>
								<div class="row form-group">
                                    <div class="col-xs-4"> 
                                    	<label for="">Property Type</label>
                                    	<select name="" id="" class="form-control">
                                    		
                                    	</select>
                                    </div>
                                    <div class="col-xs-4"> 
                                    	<label for="">Detached</label>
                                    	<input type="text" class="form-control form-control-sm" > 
                                    </div>
                                    <div class="col-xs-4"> 
                                    	<label for="">Floor</label>
                                    	<input type="text" class="form-control form-control-sm" > 
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-4"> 
                                    	<label for="">Bedrooms</label>
                                    	<select name="" id="" class="form-control">
                                    	</select>
                                    </div>
                                    
                                    <div class="col-xs-4"> 
                                    	<label for="">Bathrooms</label>
                                    	<select name="" id="" class="form-control">
                                    	</select>
                                    </div>
                                    <div class="col-xs-4"> 
                                    	<label for="">Showers</label>
                                    	<select name="" id="" class="form-control">
                                    	</select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-4"> 
                                    	<label for="">Bedrooms</label>
                                    	<select name="" id="" class="form-control">
                                    	</select>
                                    </div>
                                    
                                    <div class="col-xs-4"> 
                                    	<label for="">Bathrooms</label>
                                    	<select name="" id="" class="form-control">
                                    	</select>
                                    </div>
                                    <div class="col-xs-4"> 
                                    	<label for="">Showers</label>
                                    	<select name="" id="" class="form-control">
                                    	</select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-4"> 
                                    	<label for="">Bedrooms</label>
                                    	<select name="" id="" class="form-control">
                                    	</select>
                                    </div>
                                    
                                    <div class="col-xs-4"> 
                                    	<label for="">Bathrooms</label>
                                    	<select name="" id="" class="form-control">
                                    	</select>
                                    </div>
                                    <div class="col-xs-4"> 
                                    	<label for="">Showers</label>
                                    	<select name="" id="" class="form-control">
                                    	</select>
                                    </div>
                                </div>
                                <br>
                                <h5>Property  Description</h5><hr>
                                <div class="form-group">
                                	<label for="">Description</label>
                                	<textarea name="" class="form-control form-control-sm" id="" cols="30" rows="4"></textarea>
                                </div>	
                                <div class="form-group">
                                	<label for="">Summary</label>
                                	<textarea name="" class="form-control form-control-sm" id="" cols="30" rows="4"></textarea>
                                </div>
                                <hr>
                                <button type="submit"  class="btn btn-secondary">  Save Property </button>
			{{ !! Form::close()}}
		</div>	
	</div>
</div>
    </div>
</div>

@stop