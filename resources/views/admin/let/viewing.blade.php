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
                        <!--button type="submit"  class="btn btn-save btn-success pull-right"> <i class="fa fa-save"></i>  Save Property </button->
                        <!-- Column Center -->
                        <div class="chute" style="height: auto;">
                            <div class="center-block">
                                <!-- Settings -->
                                <div class="panel col-md-7">
                                    <div class="panel-heading">
                                        <span class="panel-title">Viewing's </span>
                                    </div>
                                    <div class="panel-body br-t">
                                        <div class="allcp-form theme-primary">
                                            <div class="section row mb10">
                                                <div class="col-sm-12 ph10" data-panel-remove="false" data-panel-color="false" data-panel-fullscreen="false" data-panel-title="false" data-panel-collapse="false">
<div class="panel-body panel-scroller scroller-sm pn" >
    <blockquote class="blockquote-warning viewing">
       <div class="action absolute">
            <small>27/02/2017 @ 04:00 PM</small>
            <a href="#" class="btn btn-save btn-xs btn-success pull-right">Delele</a>
            <a href="#" class="btn btn-save btn-xs btn-success pull-right ">Edit</a>
       </div> 
        <b>John Doe</b><br/><br/>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
       <div class="action absolute">
            <a href="#" class="btn btn-save btn-xs btn-alert pull-right ">Confirmed</a>
            <a href="#" class="btn btn-save btn-xs btn-primary pull-right">Accepted</a>
       </div> 
    </blockquote>
     <blockquote class="blockquote-warning viewing">
       <div class="action absolute">
            <small>27/02/2017 @ 04:00 PM</small>
            <a href="#" class="btn btn-save btn-xs btn-success pull-right">Delele</a>
            <a href="#" class="btn btn-save btn-xs btn-success pull-right ">Edit</a>
       </div> 
        <b>John Doe</b><br/><br/>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
       <div class="action absolute">
            <a href="#" class="btn btn-save btn-xs btn-alert pull-right ">Confirmed</a>
            <a href="#" class="btn btn-save btn-xs btn-primary pull-right">Accepted</a>
       </div> 
    </blockquote>
        <blockquote class="blockquote-warning viewing">
       <div class="action absolute">
            <small>27/02/2017 @ 04:00 PM</small>
            <a href="#" class="btn btn-save btn-xs btn-success pull-right">Delele</a>
            <a href="#" class="btn btn-save btn-xs btn-success pull-right ">Edit</a>
       </div> 
        <b>John Doe</b><br/><br/>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
       <div class="action absolute">
            <a href="#" class="btn btn-save btn-xs btn-alert pull-right ">Confirmed</a>
            <a href="#" class="btn btn-save btn-xs btn-primary pull-right">Accepted</a>
       </div> 
    </blockquote>
   
       <blockquote class="blockquote-warning viewing">
       <div class="action absolute">
            <small>27/02/2017 @ 04:00 PM</small>
            <a href="#" class="btn btn-save btn-xs btn-success pull-right">Delele</a>
            <a href="#" class="btn btn-save btn-xs btn-success pull-right ">Edit</a>
       </div> 
        <b>John Doe</b><br/><br/>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
       <div class="action absolute">
            <a href="#" class="btn btn-save btn-xs btn-alert pull-right ">Confirmed</a>
            <a href="#" class="btn btn-save btn-xs btn-primary pull-right">Accepted</a>
       </div> 
    </blockquote>
   

</div>                    
                                                </div>
                                             </div>
                                           </div>     
                                        
                                    </div>
                                </div>
                                <!-- Policies -->
                                <div class="panel col-md-5">
                                    <div class="panel-heading">
                                        <span class="panel-title">Add/Modify Viewings</span>
                                    </div>
                                    <div class="panel-body br-t">
                                        <div class="allcp-form theme-primary">
                                            <div class="section row mb10">
                                                <div class="col-sm-12 ph10">
                                                    <label for="door_no" class="field">
                                                        {!! Form::text('done_by', null, array('id'=>'instuction_date','class' => 'gui-input mb10','placeholder'=>'Tenant Name')) !!}
                                                    </label>  
                                                </div>
                                                <div class="col-sm-6 ph10">
                                                    <label for="date" class="field">
                                                        {!! Form::text('viewing_date', null, array('id'=>'viewing_data','class' => 'gui-input mb10','placeholder'=>'Date')) !!}
                                                    </label>  
                                                </div>
                                                <div class="col-sm-6 ph10">
                                                    <label for="date" class="field">
                                                        {!! Form::text('viewing_time', null, array('id'=>'viewing_time','class' => 'gui-input mb10','placeholder'=>'Time')) !!}
                                                    </label>  
                                                </div>
                                                <div class="col-sm-6 ph10">
                                                    <div class="option-group field">
                                                        <?php
                                                        echo '<label class="option mb10">';
                                                        echo Form::checkbox('name', 'value');
                                                        echo '<span class="checkbox"></span>Viewing Accepted';
                                                        echo '</label>';
                                                         ?>                 
                                                    </div> 
                                                </div>
                                                <div class="col-sm-6 ph10">
                                                    <div class="option-group field">
                                                        <?php
                                                        echo '<label class="option mb10">';
                                                        echo Form::radio('name', 'value');
                                                        echo '<span class="checkbox"></span>Confirmed Viewing';
                                                        echo '</label>';
                                                         ?>                 
                                                    </div> 
                                                </div>
                                                
                                                <div class="col-sm-12 ph10">
                                                    <label for="date" class="field">
                                                        {!! Form::textarea('offer', null, array('id'=>'viewing_time','class' => 'gui-input mb10','rows'=>3,'placeholder'=>'Offer')) !!}
                                                    </label>  
                                                </div>
                                                <div class="col-sm-12 ph10">
                                                    <label for="date" class="field">
                                                        {!! Form::textarea('notes', null, array('id'=>'viewing_time','rows'=>3,'class' => 'gui-input mb10','placeholder'=>'Notes')) !!}
                                                    </label>  
                                                </div>
                                                <div class="col-sm-4 ph10">
                                                    
                        {!! Form::submit('Add Viewing',['class'=>'btn btn-save btn-success']) !!}
                                                </div> 
                                                <div class="col-sm-6 ph10">
                                                    
                        {!! Form::reset('Reset Viewing',['class'=>'btn btn-save btn-primary']) !!}
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