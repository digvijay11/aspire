@extends('admin.layout') @section('style')
<style type="text/css">
    .content_container .content-right {
        width: 90%;
        background-color: #fff !important;
        -webkit-box-shadow: none;
    }
    
    #content {
        padding: 135px 30px 50px 31px !important;
    }
    
    #content .panel {
        border-radius: 0px;
        -webkit-box-shadow: none;
        box-shadow: 0 0px 0 #e5eaee;
        margin-bottom: 0px !important;
        padding: 0px 15px !important;
    }
    
    .panel-body {
        padding: 15px 0px;
    }
    
    .content_container .nav-content > li.active,
    .content_container .nav-content > li:hover,
    .content_container .nav-content > li:focus {
        background-color: #fff;
    }
</style>

@stop @section('content') @include('admin.partials.property-let')
<div class="content-right table-layout">
    {!! Form::open(array('url' => action('Admin\LetPropertyController@postStore'),'method'=>'POST')) !!} {!! Form::hidden('redirect_to',$active,array('id'=>'redirect_to')) !!}
    <!--button type="submit"  class="btn btn-save btn-success pull-right  absolute"> <i class="fa fa-save"></i>  Save Property </button-->
    <!-- Column Center -->
    <div class="chute" style="height: auto;">
        <div class="center-block">
            <!-- Settings -->
            <div class="panel col-md-12">
                <div class="panel-heading">
                    <span class="panel-title">Deals</span>
                </div>
                <div class="panel-body br-t">
                    <div class="allcp-form theme-primary">
                        <div class="section row mb10">
                            <div class="col-sm-12 ph10">
                                <h5 class="ml20">81 Old Bedford Road, Luton, Bedfordshire, LU2 7PF</h5>
                            </div>
                        </div>
                        <div class="section row mt30  mb10">
                            <div class="col-sm-6 ph10">
                                <h5 class="ml20">Applicant Tenant</h5>

                                <label for="address_1" class="field col-sm-12 mt20">
                                    {!! Form::text('tenant_name', null, array('id'=>'tenant_name','class' => 'gui-input','placeholder'=>'Tenant Name')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-7 mt10">
                                    {!! Form::text('tenant_email', null, array('id'=>'tenant_email','class' => 'gui-input','placeholder'=>'Tenant Email')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-5 mt10">
                                    {!! Form::text('tenant_phone', null, array('id'=>'tenant_phone','class' => 'gui-input','placeholder'=>'Tenant Phone')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-7 mt10">
                                    {!! Form::text('existing_landlord', null, array('id'=>'existing_landlord','class' => 'gui-input','placeholder'=>'Existing Landlord')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-5 mt10">
                                    {!! Form::text('duration', null, array('id'=>'duration','class' => 'gui-input','placeholder'=>'Duration')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-7 mt10">
                                    {!! Form::text('employer', null, array('id'=>'employer','class' => 'gui-input','placeholder'=>'Employer')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-5 mt10">
                                    {!! Form::text('emplyed_since', null, array('id'=>'emplyed_since','class' => 'gui-input','placeholder'=>'Employed Since')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-7 mt10">
                                    {!! Form::text('job_title', null, array('id'=>'job_title','class' => 'gui-input','placeholder'=>'Job Title')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-5 mt10">
                                    {!! Form::text('ni_number', null, array('id'=>'ni_number','class' => 'gui-input','placeholder'=>'NI Number')) !!}
                                </label>

                            </div>
                            <div class="col-sm-6 ph10">
                                <h5 class="ml20">Additonal Tenant</h5>
                                <label for="address_1" class="field col-sm-5  mt20">
                                    {!! Form::text('name', null, array('id'=>'job_title','class' => 'gui-input','placeholder'=>'Tenant Name or Email')) !!}
                                </label>
                                <div class="col-sm-3 ph10  mt20">
                                    {!! Form::submit('Search',['class'=>'btn btn-save btn-success']) !!}
                                </div>
                                <div class="col-sm-1 ph10  mt30">
                                    <span class="text-center"><b>OR</b></span>
                                </div>
                                <div class="col-sm-2 ph10  mt20">
                                    {!! Form::submit('Add New',['class'=>'btn btn-save btn-success']) !!}
                                </div>

                                <div class="col-sm-12" id="users-well">
                                    <div class="well mt10">
                                        <address class="mb10">
	    	<strong>Tenant 1</strong><br>
	    	<a href="mailto:#">mail@site.com</a><br>
	    	<abbr title="Mobile">Contact :</abbr>123-456-7890 / 123 456-7890 / 123 456-7890
		</address>
                                    </div>
                                    <div class="well mt10">
                                        <address class="mb10">
	    	<strong>Tenant 1</strong><br>
	    	<a href="mailto:#">mail@site.com</a><br>
	    	<abbr title="Mobile">Contact :</abbr>123-456-7890 / 123 456-7890 / 123 456-7890
		</address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section row mt30  mb10">
                            <div class="col-sm-6 ph10">
                                <h5 class="ml20">Guarantor(s)</h5>

                        		<label for="address_1" class="field col-sm-12 mt20">
                                    {!! Form::text('guarantor_name', null, array('id'=>'guarantor_name','class' => 'gui-input','placeholder'=>'Guarantor Name')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-6 mt10">
                                    {!! Form::text('guarantor_address', null, array('id'=>'guarantor_address','class' => 'gui-input','placeholder'=>'Address')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-6 mt10">
                                    {!! Form::text('guarantor_email', null, array('id'=>'guarantor_email','class' => 'gui-input','placeholder'=>'Guarantor Email')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-6 mt10">
                                    {!! Form::text('employer_landlord', null, array('id'=>'employer_landlord','class' => 'gui-input','placeholder'=>'Employer')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-6 mt10">
                                    {!! Form::text('guarantor_phone', null, array('id'=>'guarantor_phone','class' => 'gui-input','placeholder'=>'Guarantor Phone')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-6 mt10">
                                    {!! Form::text('emplyed_since', null, array('id'=>'emplyed_since','class' => 'gui-input','placeholder'=>'Employed Since')) !!}
                                </label>
                                <label for="address_1" class="field col-sm-6 mt10">
                                    {!! Form::text('job_title', null, array('id'=>'job_title','class' => 'gui-input','placeholder'=>'Job Title')) !!}
                                </label>
                            </div>
                            <div class="col-sm-6 ph10">
                                <h5 class="ml20">Payment(s)</h5>
                                <table class="ml20 payments table mt10">
                                	<tr>
                                		<th>Payment</th>
                                		<th>Total Dues</th>
                                		<th>Total Paid</th>
                                	</tr>
                                	<tr class="odd">
                                		<td>Advance Rent <sub>(Agreed)</sub></td>
                                		<td>{!! Form::text('job_title', null, array('id'=>'job_title','class' => 'gui-input')) !!}</td>
                                		<td>{!! Form::text('job_title', null, array('id'=>'job_title','class' => 'gui-input')) !!}</td>
                                	</tr>

                                	<tr class="even">
                                		<td>Deposit</td>
                                		<td>{!! Form::text('job_title', null, array('id'=>'job_title','class' => 'gui-input')) !!}</td>
                                		<td>{!! Form::text('job_title', null, array('id'=>'job_title','class' => 'gui-input')) !!}</td>
                                	</tr>

                                	<tr class="odd">
                                		<td>Admin/Reference Fee <sub>(incuding VAT)</sub></td>
                                		<td>{!! Form::text('job_title', null, array('id'=>'job_title','class' => 'gui-input')) !!}</td>
                                		<td>{!! Form::text('job_title', null, array('id'=>'job_title','class' => 'gui-input')) !!}</td>
                                	</tr>

                                	<tr  class="even">
                                		<td>Checkout Fee</td>
                                		<td>{!! Form::text('job_title', null, array('id'=>'job_title','class' => 'gui-input')) !!}</td>
                                		<td>{!! Form::text('job_title', null, array('id'=>'job_title','class' => 'gui-input')) !!}</td>
                                	</tr>
                                	<tr class="total">
                                		<td>Total</td>
                                		<td>{!! Form::text('job_title', '200.00', array('id'=>'job_title','class' => 'gui-input','readonly'=>'true')) !!}</td>
                                		<td>{!! Form::text('job_title', '200.00', array('id'=>'job_title','class' => 'gui-input','readonly'=>'true')) !!}</td>
                                	</tr>
                                </table>
							</div>
							<div class="col-sm-6 ph10 mt40">
                                <h5 class="ml20">Other Detail(s)</h5>
								<label for="address_1" class="field col-sm-6 mt10">
                                    {!! Form::text('guarantor_name', null, array('id'=>'guarantor_name','class' => 'gui-input','placeholder'=>'Outstanding Amount')) !!}
                                </label>
                               <div class="col-sm-6 mt10"> 
                                <label for="address_1" class="field append-icon">
                                    {!! Form::text('guarantor_address', null, array('id'=>'agreed_date','class' => 'gui-input','class'=>'gui-input datepicker','placeholder'=>'Agreed Date')) !!}
                                     <span class="field-icon">
                                    	<i class="fa fa-calendar"></i>
                                    </span>
                                </label>
								</div>	
								<label for="address_1" class="field col-sm-6 mt10">
                                    {!! Form::text('guarantor_name', null, array('id'=>'guarantor_name','class' => 'gui-input','placeholder'=>'Recipent Name')) !!}
                                </label>
                               <div class="col-sm-6 mt10"> 
                                <label for="tenancy_start_date" class="field append-icon">
                                    {!! Form::text('tenancy_start_date', null, array('id'=>'tenancy_start_date','class' => 'gui-input','class'=>'gui-input datepicker','placeholder'=>'Tenancy Start Date')) !!}
                                    <span class="field-icon">
                                    	<i class="fa fa-calendar"></i>
                                    </span>
                                </label>
                               </div> 
                            </div>
                            <div class="col-sm-6 ph10 mt30">
                            	<h5 class="ml20">Required Documents for Referencing Detail</h5>
								<div class="option-group field ml20 mt20">
			                        <?php
			                        $options=['Passport','Driving License','Employer Ref.','Landlord Ref','Payslip x 3','U/Bills','Bank Statements'];
			                        foreach ($options as $key => $value) {
			                        echo '<label for="input-'.$key.'" class="option mb10" style="width:32%;">';
			                        echo Form::checkbox('required_docs[]',$value,false,['id'=>"input-".$key]);
			                        echo '<span class="checkbox"></span>'.$value;
			                        echo '</label>';
			                    	}
			                    	echo '<label for="input-txt" class="txt-date">Docs required by or before</label>';
			                    	echo Form::text('documnent_date',null,['style'=>'width:100px;padding:5px 10px;margin-left:10px;','class'=>'gui-input datepicker','id'=>'input-txt']);
			                        echo '</label>';
			                         ?>                 
	                        	</div>
                            </div>
                            <div class="col-sm-6 ph10 mt30">
                            	<h5 class="ml20">Other Notes</h5>
                            	<label for="address_1" class="field col-sm-12 mt10">
                                    {!! Form::textarea('notes', null, array('id'=>'notes','rows'=>3,'class' => 'gui-input','placeholder'=>'Notes')) !!}
                                </label>
                            </div>
                            <div class="col-sm-6 ph10 mt30">
                            <button type="submit"  class="btn btn-save btn-success pull-right mt70"> <i class="fa fa-save"></i>  Save Property </button>
                            </div>  
                        </div>
                    </div>
                    <!-- /Column Center -->
                    {{Form::close()}}
                </div>
                @stop