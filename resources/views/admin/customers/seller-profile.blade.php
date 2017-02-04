@extends('admin.layout')
@section('style')

@stop
@section('content')
	@include('admin.partials.customers')
<div class="content-right table-layout">
 @if(!$customer)
  {!! Form::model($customer,array('url' => action('Admin\CustomersController@postSave'),'method'=>'POST')) !!}
 @else
   {!! Form::model($customer,array('url' => action('Admin\CustomersController@postUpdate'),'method'=>'POST'))!!}
   {!! Form::hidden('id') !!} 
 @endif
{!! Form::hidden('type','SELLER') !!}
{!! Form::hidden('redirect_to',$page['active'],array('id'=>'redirect_to')) !!}
<button type="submit"  class="btn btn-save btn-success pull-right  top-button"> <i class="fa fa-save"></i>  Save Seller </button>
                        <div class="chute" style="height: auto;">
                            <div class="center-block">
                                <div class="panel col-md-12">
                                    <div class="panel-heading">
                                        <span class="panel-title ml20">Seller Infomation </span>
                                    </div>
                                    <div class="panel-body">
                                        <div class="allcp-form theme-primary">
                                            <div class="section row mb10">
                                                <div class="col-md-6  ph10">
                                                  <h4 class="ml20">Personal Details</h4>
                                                  
                                                  <div class="col-sm-6 mt20">
                                                    <label for="name" class="field {{Helper::hasError($errors, 'name') }}">
                         {!! Form::text('name', null, array('id'=>'name','class' => 'gui-input','placeholder'=>'Name')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt20">
                                                    <label for="email" class="field {{Helper::hasError($errors, 'email') }}">
                         {!! Form::text('email', null, array('id'=>'email','class' => 'gui-input','placeholder'=>'Email')) !!}
                                                    </label>
                                                  </div>
                                          
                                                   @if(!$customer)
                                                  <div class="col-sm-6 mt10">
                                                    <label for="password" class="field {{Helper::hasError($errors, 'password') }}">
                         {!! Form::password('password',array('id'=>'password','class' => 'gui-input','placeholder'=>'Password')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt10">
                                                    <label for="confirm" class="field">
                         {!! Form::password('confirm_password',array('id'=>'confirm','class' => 'gui-input','placeholder'=>'Confirm Password')) !!}
                                                    </label>
                                                  </div>
                                          @endif       
                                          <div class="col-sm-6 mt10">
                                                    <label for="mobile1" class="field">
                         {!! Form::text('mobile1', null, array('id'=>'mobile1','class' => 'gui-input','placeholder'=>'Mobile 1')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt10">
                                                    <label for="mobile2" class="field">
                         {!! Form::text('mobile2', null, array('id'=>'mobile2','class' => 'gui-input','placeholder'=>'Mobile 2')) !!}
                                                    </label>
                                                  </div>
                                                   <div class="col-sm-12 mt10">
                                                    <label for="address_1" class="field {{Helper::hasError($errors, 'address_1') }}">
                         {!! Form::textarea('address_1', null, array('id'=>'address_1','class' => 'gui-input','placeholder'=>'Address','rows'=>3)) !!}
                                                    </label>
                                                  </div>
                                                 <div class="col-sm-12 mt10">
                                                    <label for="address_2" class="field">
                         {!! Form::textarea('address_2', null, array('id'=>'address_2','class' => 'gui-input','placeholder'=>'Property Address ','rows'=>3)) !!}
                                                    </label>
                                                  </div>
                                                 <div class="col-sm-12 mt10">
                                                    <label for="address_3" class="field">
                         {!! Form::textarea('address_3', null, array('id'=>'address_3','class' => 'gui-input','placeholder'=>'Correspondance Address (If Different) ','rows'=>3)) !!}
                                                    </label>
                                                  </div>
                                                     <div class="col-sm-12 mt10">
                                                    <label for="notes" class="field">
                         {!! Form::textarea('notes', null, array('id'=>'notes','class' => 'gui-input','placeholder'=>'Notes','rows'=>3)) !!}
                                                    </label>
                                                  </div>  

                                                </div>
                                                <div class="col-md-6  ph10">
                                                  <h4 class="ml10">Solicitor Details</h4>
<div class="col-sm-6 mt20">
                                                    <label for="full_name" class="field">
                         {!! Form::text('company_name', null, array('id'=>'company_name','class' => 'gui-input','placeholder'=>'Company Name')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt20">
                                                    <label for="email" class="field">
                         {!! Form::text('company_email', null, array('id'=>'email','class' => 'gui-input','placeholder'=>'Company Email')) !!}
                                                    </label>
                                                  </div>

                                                
                                                 
                                          <div class="col-sm-6 mt10">
                                                    <label for="mobile_1" class="field">
                         {!! Form::text('mobile_1', null, array('id'=>'mobile_1','class' => 'gui-input','placeholder'=>'Phone No')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt10">
                                                    <label for="mobile_2" class="field">
                         {!! Form::text('mobile_2', null, array('id'=>'mobile_2','class' => 'gui-input','placeholder'=>'Contact Person')) !!}
                                                    </label>
                                                  </div>
                                                   <div class="col-sm-12 mt10 mb20">
                                                    <label for="address" class="field">
                         {!! Form::textarea('address', null, array('id'=>'address','class' => 'gui-input','placeholder'=>'Address','rows'=>6)) !!}
                                                    </label>
                                                  </div>
                                                
                                            <h4 class="ml10 mt20">Other Details</h4>
                                                <div class="col-sm-6 mt20">
                                                    <label for="property_type" class="field">
                         {!! Form::select('property_type',['Studio','Flat','Bungalow','Shop','Warehouse'],null,array('id'=>'property_type','class' => 'select2','placeholder'=>'Property Type','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt20">
                                                    <label for="email" class="field">
                         {!! Form::select('total_bedrooms',['1','2','3','4','5','6','7','8'],null,array('id'=>'total_bedrooms','class' => 'select2','placeholder'=>'No of Bedrooms','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                              <div class="col-sm-6 mt20">
                                                    <label for="source_of_call" class="field">
                         {!! Form::select('source_of_call',['Friend','Board','Newspaper','Website','Social Media','Leaflet','TV/Radio','Billboard','Walk In','Other Agent'],null,array('id'=>'source_of_call','class' => 'select2','placeholder'=>'Source of Call','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt20">
                                                    <label for="is_market_house" class="field">
                         {!! Form::select('is_market_house',['Yes','No'],null,array('id'=>'is_market_house','class' => 'select2','placeholder'=>'Is the House on Market','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                              <div class="col-sm-6 mt20">
                                                    <label for="how_soon_market" class="field">
                         {!! Form::text('how_soon_market',null,array('id'=>'source_of_call','class' => 'gui-input','placeholder'=>'How Soon to Put on Market','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt20">
                                                    <label for="valuation_date" class="field">
                         {!! Form::text('valuation_date',null,array('id'=>'valuation_date','class' => 'datepicker gui-input','placeholder'=>'Valuation Date','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                                    <div class="col-sm-6 mt20">
                                                    <label for="follow_up1" class="field">
                         {!! Form::text('follow_up1',null,array('id'=>'follow_up1','class' => 'datepicker gui-input','placeholder'=>'Follow Up 1','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt20">
                                                    <label for="follow_up2" class="field">
                         {!! Form::text('follow_up2',null,array('id'=>'follow_up2','class' => 'datepicker gui-input','placeholder'=>'Follow Up 2','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt20">
                                                    <label for="follow_up3" class="field">
                         {!! Form::text('follow_up3',null,array('id'=>'follow_up3','class' => 'datepicker gui-input','placeholder'=>'Follow Up 3','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt20">
                                                    <label for="managed_by" class="field">
                         {!! Form::select('managed_by',$page['staff_list'],null,array('id'=>'managed_by','class' => 'select2','placeholder'=>'Managed By','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                                
                                              
                                          

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