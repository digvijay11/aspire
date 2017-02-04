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
 {!! Form::open(array('url' => action('Admin\LetPropertyController@postStore'),'method'=>'POST')) !!}
 {!! Form::hidden('redirect_to',$active,array('id'=>'redirect_to')) !!}
                        <button type="submit"  class="btn btn-save btn-success pull-right"> <i class="fa fa-save"></i>  Save Property </button>
                        <!-- Column Center -->
                        <div class="chute" style="height: auto;">
                            <div class="center-block">
                                <!-- Settings -->
                                <div class="panel mt40 col-md-7">
                                    <div class="panel-heading">
                                        <span class="panel-title">Landlord </span>
                                    </div>
                                    <div class="panel-body br-t">
                                        <div class="allcp-form theme-primary">
                                            <div class="section row mb10">
                                                <div class="col-sm-12 ph10">
                                                  
                                                  <div class="well">
<address class="mb10">
    <strong>Full Name</strong><br>
    <a href="mailto:#">mail@site.com</a><br><br>
    <strong>Your Coompany</strong>
    <br>123 Some str, Nth drive
    <br>New York, 12345 NY
    <br>
    <abbr title="Mobile">Contact :</abbr>123-456-7890 / 123 456-7890 / 123 456-7890
</address>
</div>
<div class="well">
<address>
    <strong>Full Name</strong><br>
    <a href="mailto:#">mail@site.com</a><br><br>
    <strong>Your Coompany</strong>
    <br>123 Some str, Nth drive
    <br>New York, 12345 NY
    <br>
    <abbr title="Mobile">Contact :</abbr>123-456-7890 / 123 456-7890 / 123 456-7890
</address>

</div> 
                                                </div>
                                             </div>
                                           </div>     
                                        
                                    </div>
                                </div>
                                <!-- Policies -->
                                <div class="panel col-md-5">
                                    <div class="panel-heading">
                                        <span class="panel-title">Search or Add Landlord</span>
                                    </div>
                                    <div class="panel-body br-t">
                                        <div class="allcp-form theme-primary">
                                            <div class="section row mb10">
                                                <div class="col-sm-9 ph10">
                                                    <label for="door_no" class="field">
                                                        {!! Form::text('done_by', null, array('id'=>'instuction_date','class' => 'gui-input mb10','placeholder'=>'Type Landlord Name or Email ')) !!}
                                                    </label>  
                                                </div>
                                                <div class="col-sm-2 ph10">
                                                    
                        {!! Form::submit('Search',['class'=>'btn btn-save btn-success']) !!}
                                                </div>  
                                             </div>
                                             <div class="section row">
                                                 <div class="col-sm-12 ph10">
                                                       <p class="text-center"><b>OR</b></p> 
  {!! Form::submit('Add New Landlord',['class'=>'btn btn-save btn-block btn-success']) !!}
                      
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