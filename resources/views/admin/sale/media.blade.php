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
</style>
<div class="panel-head">
	@include('admin.partials.property-let')
	<div class="col-xs-10">

		<div class="card  card-block property-card" >
			<br>
			<form role="form">	
				<button type="button"  class="btn btn-save btn-success pull-right">  Save Property </button>
                                <h5>Property Media <i class="fa fa-search pull-right search-icon"></i></h5><hr>
                                

                                <!--div class="row form-group">
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
                                </div-->
                                <div class="images-container">
                                        <div class="image-container">
                                            <div class="controls">
                                                <a href="" class="control-btn move"> <i class="fa fa-arrows"></i> </a>
                                                <!--
                                -->
                                                <a href="" class="control-btn star"> <i class="fa"></i> </a>
                                                <!--
                                -->
                                                <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o"></i> </a>
                                            </div>
                                            <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                        </div>
                                        <div class="image-container main">
                                            <div class="controls">
                                                <a href="" class="control-btn move"> <i class="fa fa-arrows"></i> </a>
                                                <!--
                                -->
                                                <a href="" class="control-btn star active"> <i class="fa"></i> </a>
                                                <!--
                                -->
                                                <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o"></i> </a>
                                            </div>
                                            <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                        </div>
                                        <div class="image-container">
                                            <div class="controls">
                                                <a href="" class="control-btn move"> <i class="fa fa-arrows"></i> </a>
                                                <!--
                                -->
                                                <a href="" class="control-btn star"> <i class="fa"></i> </a>
                                                <!--
                                -->
                                                <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o"></i> </a>
                                            </div>
                                            <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                        </div>
                                        <a href="#" class="add-image" data-toggle="modal" data-target="#modal-media">
                                            <div class="image-container new">
                                                <div class="image"> <i class="fa fa-plus"></i> </div>
                                            </div>
                                        </a>
                                    </div>
                                <hr>
                                <button type="button"  class="btn btn-secondary">  Save Property </button>
							</form>
		</div>	
	</div>
</div>

@stop