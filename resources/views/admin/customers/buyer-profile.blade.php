@extends('admin.layout')
@section('style')

@stop
@section('content')
	@include('admin.partials.customers')
<div class="content-right table-layout">
 {!! Form::open(array('url' => action('Admin\CustomersController@postSave'),'method'=>'POST')) !!}
{!! Form::hidden('redirect_to',$active,array('id'=>'redirect_to')) !!}
{!! Form::hidden('type','LANDLORD') !!}
                        <button type="submit"  class="btn btn-save btn-success pull-right  top-button"> <i class="fa fa-save"></i>  Save Buyer </button>
    <!-- Column Center -->
                        <div class="chute" style="height: auto;">
                            <div class="center-block">
                                <div class="panel col-md-12">
                                    <div class="panel-heading">
                                        <span class="panel-title ml20">Buyer Infomation </span>
                                    </div>
                                    <div class="panel-body">
                                        <div class="allcp-form theme-primary">
                                            <div class="section row mb10">
                                                <div class="col-md-6  ph10">
                                                  <h4 class="ml20">Personal Details</h4>
                                                  
                                                  <div class="col-sm-6 mt20">
                                                    <label for="full_name" class="field">
                         {!! Form::text('name', null, array('id'=>'full_name','class' => 'gui-input','placeholder'=>'Full Name')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt20">
                                                    <label for="email" class="field">
                         {!! Form::text('email', null, array('id'=>'email','class' => 'gui-input','placeholder'=>'Email')) !!}
                                                    </label>
                                                  </div>
                                          
                                                  <div class="col-sm-6 mt10">
                                                    <label for="password" class="field">
                         {!! Form::password('password',array('id'=>'password','class' => 'gui-input','placeholder'=>'Password')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt10">
                                                    <label for="confirm" class="field">
                         {!! Form::password('confirm_password',array('id'=>'confirm','class' => 'gui-input','placeholder'=>'Confirm Password')) !!}
                                                    </label>
                                                  </div>
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
                                                    <label for="address_1" class="field">
                         {!! Form::textarea('address_1', null, array('id'=>'address_1','class' => 'gui-input','placeholder'=>'Address','rows'=>3)) !!}
                                                    </label>
                                                  </div>                                                  
                                                   <div class="col-sm-12 mt10">
                                                    <label for="notes" class="field">
                         {!! Form::textarea('notes', null, array('id'=>'notes','class' => 'gui-input','placeholder'=>'Notes','rows'=>3)) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt10">
                                                    <label for="employment_status" class="field">
                         {!! Form::select('employment_status',['Employed','Self Employed'],null,array('id'=>'employment_status','class' => 'select2','placeholder'=>'Employement Status','style'=>'width:100%')) !!}                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt10">
                                                    <label for="mortgaged_status" class="field">
                         {!! Form::select('mortgaged_status',['Cash Buyer','Mortgage Ready','Looking For Mortgage'],null,array('id'=>'mortgaged_status','class' => 'select2','placeholder'=>'Mortgaged Status','style'=>'width:100%')) !!}                            </label>
                                                  </div>
                                                  <div class="col-sm-6 mt10">
                                                    <label for="buying_status" class="field">
                         {!! Form::select('buying_status',['First Time Buyer','Home Owner','Buy To Let','Let To Buy'],null,array('id'=>'buying_status','class' => 'select2','placeholder'=>'Buying Status','style'=>'width:100%')) !!}                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt10">
                                                    <label for="interest" class="field">
                         {!! Form::text('interest', null, array('id'=>'interest','class' => 'gui-input','placeholder'=>'Interest','rows'=>3)) !!}
                                                     </label>
                                                  </div>  

                                                </div>
                                                <div class="col-md-6  ph10">
                                                  <h4 class="ml10">Solicitor Details</h4>
<div class="col-sm-6 mt20">
                                                    <label for="solicitor_company" class="field">
                         {!! Form::text('solicitor_company', null, array('id'=>'solicitor_company','class' => 'gui-input','placeholder'=>'Company Name')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt20">
                                                    <label for="solicitor_email" class="field">
                         {!! Form::text('solicitor_email', null, array('id'=>'solicitor_email','class' => 'gui-input','placeholder'=>'Company Email')) !!}
                                                    </label>
                                                  </div>

                                                
                                                 
                                          <div class="col-sm-6 mt10">
                                                    <label for="solicitor_mobile1" class="field">
                         {!! Form::text('solicitor_mobile1', null, array('id'=>'mobile_1','class' => 'gui-input','placeholder'=>'Phone No')) !!}
                                                    </label>
                                                  </div>
                                                  <div class="col-sm-6 mt10">
                                                    <label for="solicitor_contact_person" class="field">
                         {!! Form::text('solicitor_contact_person', null, array('id'=>'solicitor_contact_person','class' => 'gui-input','placeholder'=>'Contact Person')) !!}
                                                    </label>
                                                  </div>
                                                   <div class="col-sm-12 mt10 mb20">
                                                    <label for="solicitor_address" class="field">
                         {!! Form::textarea('solicitor_address', null, array('id'=>'solicitor_address','class' => 'gui-input','placeholder'=>'Address','rows'=>6)) !!}
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
                                                    <label for="maximum_price" class="field">
                         {!! Form::text('maximum_price',null,array('id'=>'maximum_price','class' => 'gui-input','placeholder'=>'Maximum Price','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                            <div class="col-sm-6 mt20">
                                                    <label for="priority_area1" class="field">
                         {!! Form::select('priority_area1',['Area1','Area2'],null,array('id'=>'priority_area1','class' => 'select2','placeholder'=>'Priority Area 1','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                            <div class="col-sm-6 mt20">
                                                    <label for="priority_area2" class="field">
                         {!! Form::select('priority_area2',['Area1','Area2'],null,array('id'=>'priority_area2','class' => 'select2','placeholder'=>'Priority Area 2','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                            <div class="col-sm-6 mt20">
                                                    <label for="priority_area3" class="field">
                         {!! Form::select('priority_area3',['Area1','Area2'],null,array('id'=>'priority_area3','class' => 'select2','placeholder'=>'Priority Area 3','style'=>'width:100%')) !!}
                                                    </label>
                                                  </div>
                                                        <div class="col-sm-6 mt20">
                                                    <label for="managed_by" class="field">
                         {!! Form::select('managed_by',$staff_list,null,array('id'=>'managed_by','class' => 'select2','placeholder'=>'Managed By','style'=>'width:100%')) !!}
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