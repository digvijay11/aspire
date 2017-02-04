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
                                <div class="panel mt40 col-md-12">
                                    <div class="panel-heading">
                                        <span class="panel-title">Media Infomation </span>
                                    </div>
                                    <div class="panel-body br-t">
                                        <div class="allcp-form theme-primary">
                                            <div class="section row mb10">
                                                <div class="col-sm-3 ph10">
                                                    <label for="door_no" class="field">
                         {!! Form::file('file', null, array('id'=>'door_no','class' => 'gui-input','placeholder'=>'Door Number')) !!}
                                                </label>
                                                </div>
                                                <div class="col-sm-2 ph10">
                                                    <label for="door_no" class="field">
                        {!! Form::select('file_type', ['Image','Floor Plan','EPC','Other'],null, array('id'=>'file_type','class' => 'select2 mb10','placeholder'=>'Media Type','style'=>'width: 100%')) !!}
                                                </label>
                                                </div>
                                                <div class="col-sm-2 ph10">
                                                    <label for="door_no" class="field">
                                                        {!! Form::text('done_by', null, array('id'=>'instuction_date','class' => 'gui-input mb10','placeholder'=>'Features')) !!}
                                                    </label>  
                                                </div>
                                                <div class="col-sm-2 ph10">
                                                    <label for="door_no" class="field">
                                                        {!! Form::text('done_by', null, array('id'=>'instuction_date','class' => 'gui-input mb10','placeholder'=>'Features')) !!}
                                                    </label>  
                                                </div>
                                                <div class="col-sm-2 ph10">
                                                    <label for="door_no" class="field">
                                                        {!! Form::text('done_by', null, array('id'=>'instuction_date','class' => 'gui-input mb10','placeholder'=>'Features')) !!}
                                                    </label>  
                                                </div>
                                                <div class="col-sm-1 ph10">
                                                    <label for="door_no" class="field">
                        {!! Form::submit('Upload',['class'=>'btn btn-save btn-success']) !!}
                                                </label>
                                                </div>  
                                             </div>
                                             <div class="section row basic-gallery">
        <div id="mixitup-container">
            <div class="filter-error-message">
            <span>No items were found matching the selected filters</span>
            </div>
            @for($i=0;$i<=10;$i++)
               <div class="mix label1 folder1" style="display: inline-block;" data-bound="">
                <div class=" p6 pbn">
                    <div class="of-h">
                        <img src="{{ URL::asset('public/img/pages/1.jpg')}}" class="img-responsive" alt="" title="img_1.jpg">
                        <div class="row table-layout">
                            <div class="col-xs-12 va-m pln">
                              <h6>img_1.jpg</h6>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
             @endfor; 
            <div class="gap"></div>
            <div class="gap"></div>
            <div class="gap"></div>
            <div class="gap"></div>
        </div>
                                                    
                                             </div>
                                           </div>     
                                        
                                    </div>
                                </div>
                                <!-- Policies -->
                                
                       

                           
                            </div>

                        </div>
                        <!-- /Column Center -->
    {{Form::close()}}
    </div>
@stop