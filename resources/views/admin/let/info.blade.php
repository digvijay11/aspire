@extends('admin.layout')
@section('style')
<style type="text/css">
.content_container .content-right{
	width: 90%; 
	background-color: #fff !important;
	-webkit-box-shadow:none;
}
#content {
	padding: 135px 30px 50px 31px !important;
}
#content .panel{ 
	border-radius: 0px;    
	-webkit-box-shadow:none;
    box-shadow:0 0px 0 #e5eaee;
    margin-bottom: 0px !important;
    padding: 0px 15px !important; 
}
.panel-body{padding:15px 0px;}
.content_container .nav-content > li.active, .content_container .nav-content > li:hover, .content_container .nav-content > li:focus{background-color: #fff;}
</style>	

@stop
@section('content')
	@include('admin.partials.property-let')
<div class="content-right table-layout">
  {!! Form::model($property,array('url' => action('Admin\LetPropertyController@postStore'),'method'=>'POST')) !!}
@if($property)
{!! Form::hidden('id') !!} 
 @endif
 {!! Form::hidden('redirect_to',$active,array('id'=>'redirect_to')) !!}

        <button type="submit"  class="btn btn-save btn-success pull-right"> <i class="fa fa-save"></i>  Save Property </button>
                        <!-- Column Center -->
                        <div class="chute" style="height: auto;">
                            <div class="center-block">
                                <!-- Settings -->
                                <div class="panel mt40 col-md-6">
                                    <div class="panel-heading">
                                        <span class="panel-title">Address Infomation </span>
                                    </div>
                                    <div class="panel-body br-t">
                                        <div class="allcp-form theme-primary">
                                            <div class="section row mb10">
                                                <div class="col-sm-4 ph10">
                                                    <label for="door_no" class="field">
                         {!! Form::text('door_no', null, array('id'=>'door_no','class' => 'gui-input','placeholder'=>'Door Number')) !!}
                                        		</label>
                                                </div>
                                                <div class="col-sm-8 ph10">
                                                    <label for="road" class="field">
                        {!! Form::text('road', null, array('id'=>'road','class' => 'gui-input','placeholder'=>'Road')) !!}
                                                     </label>
                                                </div>
                                            </div>
                                            <div class="section row mb10">
                                                <div class="col-sm-6 ph10">
                                                    <label for="address_1" class="field">
                         {!! Form::text('address_1', null, array('id'=>'address_1','class' => 'gui-input','placeholder'=>'Address Line 1')) !!}
                                        		</label>
                                                </div>
                                                <div class="col-sm-6 ph10">
                                                    <label for="address_2" class="field">
                        {!! Form::text('address_2', null, array('id'=>'address_2','class' => 'gui-input','placeholder'=>'Address Line 2')) !!}
                                                     </label>
                                                </div>
                                            </div>
										<div class="section row mb10">
                                                <div class="col-sm-4 ph10">
                                                    <label for="city" class="field">
                        {!! Form::text('city', null, array('id'=>'city','class' => 'gui-input','placeholder'=>'City')) !!}
                               </label>
                                                </div>
                                                <div class="col-sm-4 ph10">
                                                    <label for="postcode" class="field">
                        {!! Form::text('postal_code', null, array('id'=>'postcode','class' => 'gui-input','placeholder'=>'Postcode')) !!}
                         
                                                     </label>
                                                </div>

                                                <div class="col-sm-4 ph10">
                                                    <label for="county" class="field">
                        {!! Form::text('county', null, array('id'=>'county','class' => 'gui-input','placeholder'=>'County')) !!}
                        {!! Form::hidden('latitude', null,array('id'=>'latitude')) !!}
                        {!! Form::hidden('longitude',null,array('id'=>'longitude')) !!}
                                      				</label>
                                                </div>
 						                    </div>
										<div class="section row mb10">
                         <div class="col-sm-4 ph10">
	                         <label for="county" class="field">
	                        {!! Form::text('metadata[asking_rent]', null, array('id'=>'asking_rent','class' => 'gui-input mt20','placeholder'=>'Asking Rent')) !!}
	                         </label>
	                     </div>

                        
                                            </div>
                                         </div>
                                    </div>
                                </div>
                                <!-- Policies -->
                                <div class="panel mbn  col-md-6">
                                    <div class="panel-heading">
                                        <span class="panel-title">Details</span>
                                    </div>
                                    <div class="panel-body br-t">
                                        <div class="allcp-form theme-primary">
                                            <div class="section row mb10">
                                                <div class="col-sm-12 ph10">
                        {!! Form::textarea('metadata[description]', null, array('id'=>'summary','class' => 'gui-textarea mb10','placeholder'=>'Description')) !!}
                                                      
                      
                        {!! Form::textarea('metadata[summary]', null, array('id'=>'summary','class' => 'gui-textarea','placeholder'=>'Summary')) !!}
                                                      
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                       <div class="clearfix border"></div> 
                       <div class="col-md-3">
                                	<div class="section row mb10">
	                                    <div class="col-sm-12 ph10 allcp-form theme-primary">
	                                    {!! Form::text('metadata[features][0]', null, array('id'=>'features0','class' => 'gui-input mb10 mt25','placeholder'=>'Features')) !!}	
	                                    {!! Form::text('metadata[features][1]', null, array('id'=>'features1','class' => 'gui-input mb10','placeholder'=>'Features')) !!}	
	                                    {!! Form::text('metadata[features][2]', null, array('id'=>'features2','class' => 'gui-input mb10','placeholder'=>'Features')) !!}	
	                                    {!! Form::text('metadata[features][3]', null, array('id'=>'features3','class' => 'gui-input mb10','placeholder'=>'Features')) !!}	
	                                    {!! Form::text('metadata[features][4]', null, array('id'=>'features4','class' => 'gui-input mb10','placeholder'=>'Features')) !!}	
	                                    {!! Form::text('metadata[features][5]', null, array('id'=>'features5','class' => 'gui-input mb10','placeholder'=>'Features')) !!}	
	                                    {!! Form::text('metadata[features][6]', null, array('id'=>'features6','class' => 'gui-input mb10','placeholder'=>'Features')) !!}	
	                                    {!! Form::text('metadata[features][7]', null, array('id'=>'features7','class' => 'gui-input mb10','placeholder'=>'Features')) !!}	
	                                    </div>
                                    </div>        
                                </div>       
                       <div class="panel mbn  col-md-9">
                                    <div class="panel-body mt10">
                                        <div class="allcp-form theme-primary">
                                            <div class="section row mb10">
                                                <div class="col-sm-3 ph10">
                        {!! Form::select('metadata[property_types]', ['House','Flat','Studio','Bungalow','Shop','Residential Plot','Warehouse','New Item'],null, array('id'=>'property_types','class' => 'select2 mb10','placeholder'=>'Property Types','style'=>'width: 100%')) !!}
                       <br><br>                        
                        {!! Form::select('metadata[bedrooms]', [0,1,2,3,4,5,6],null, array('id'=>'bedrooms','class' => 'select2 mb10','placeholder'=>'Bedrooms','style'=>'width: 100%')) !!}
                       <br><br>
                       
                       {!! Form::select('metadata[how_detached]', ['Detached','Semi-Detached','Mid Terraced','End of Terraced'],null, array('id'=>'how_detached','class' => 'select2 mb10','placeholder'=>'How Detached','style'=>'width: 100%')) !!}
                       <br><br>
                       {!! Form::select('metadata[bathrooms]', [0,1,2,3,4,5,6],null, array('id'=>'bathrooms','class' => 'select2 mb10','placeholder'=>'Bathrooms','style'=>'width: 100%')) !!}
                       <br><br>
                       {!! Form::select('metadata[showers]', [0,1,2,3,4,5,6],null, array('id'=>'showers','class' => 'select2 mb10','placeholder'=>'Showers','style'=>'width: 100%')) !!}
                       <br><br>
                       {!! Form::select('metadata[receptions]', [0,1,2,3,4,5,6],null, array('id'=>'receptions','class' => 'select2 mb10','placeholder'=>'Receptions','style'=>'width: 100%')) !!}
                       <br><br>
                        {!! Form::select('metadata[furnished]', ['Furnished','Unfurnished',''],null, array('id'=>'instuction_date','class' => 'select2 mb10','placeholder'=>'Furnished','style'=>'width: 100%')) !!}
                                                </div>
                                                <div class="col-sm-3 ph10">
                                                </div>
                                               <div class="col-sm-6 ph10">
                                               	<div class="option-group field">
                                               	<?php 
                                               	$checkboxs=['Double Glazed','Central Heating','Communal Heating','High Ceilings','TV','Washing Machine','Wooden Floors','Cable','Satelite','Video Player','Lift','Garden','Front Garden','Back Garden','Roof Garden','Dishwasher','Fridge/Freezer','Off-Street Parking','Parking','Swimming Pool','Shower','Pets Allowed'];
                                               	foreach($checkboxs as $checkbox):	
                                                  $name='metadata['.strtolower(str_replace(' ', '_', $checkbox)).']';
                                               	echo '<label class="option mb10" style="width:45%;">';
                                              	echo Form::checkbox($name, 'YES');
                                              	echo '<span class="checkbox"></span>'.$checkbox;
                                              	echo '</label>';
                                               endforeach;
                                               ?>
												</div>

                                               </div> 
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                

                           
                            </div>

                        </div>
                        <!-- /Column Center -->
    {{Form::close()}}
    </div>
@stop