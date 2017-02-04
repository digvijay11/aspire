@extends('admin.layout')
@section('content')
	@include('admin.partials.property-sale')
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
}
.panel-body{padding:15px 0px;}
.content_container .nav-content > li.active, .content_container .nav-content > li:hover, .content_container .nav-content > li:focus{background-color: #fff;}
</style>	
<div class="content-right table-layout">
 {!! Form::open(array('url' => action('Admin\SalePropertyController@postStore'),'method'=>'POST')) !!}
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
                        {!! Form::text('postcode', null, array('id'=>'postcode','class' => 'gui-input','placeholder'=>'Postcode')) !!}
                         
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
                                            <div class="section row mb25">
                                                <div class="col-sm-12 ph10">
                        {!! Form::textarea('notes', null, array('id'=>'notes','class' => 'gui-textarea','placeholder'=>'Notes')) !!}
                         
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
                        {!! Form::textarea('description', null, array('id'=>'description','class' => 'gui-textarea','placeholder'=>'Description')) !!}
                                                </div>
                                            </div>
                                            <div class="section row mb25">
                                                <div class="col-sm-12 ph10">
                        {!! Form::textarea('summary', null, array('id'=>'summary','class' => 'gui-textarea','placeholder'=>'Summary')) !!}
                                                      
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                           
                            </div>

                        </div>
                        <!-- /Column Center -->
    {{!! Form::close()}}
    </div>
@stop