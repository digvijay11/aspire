@extends('admin.layout')
@section('content')
	@include('admin.partials.property-sale')
<style type="text/css">
	.content_container .content-right{width: 90%;}
</style>	
<div class="content-right table-layout">

                        <!-- Column Center -->
                        <div class="chute" style="height: 490px;">

                            <div class="mw1000 center-block">

                                <!-- Settings -->
                                <div class="panel mb35">
                                    <div class="panel-heading">
                                        <span class="panel-title">Settings</span>
                                    </div>
                                    <div class="panel-body br-t">
                                        <div class="allcp-form theme-primary">

                                            <div class="section row mb10">
                                                <label class="field-label col-sm-2 ph10 text-center">Store
                                                    Timezone:</label>

                                                <div class="col-sm-10 ph10">
                                                    <label class="field select">
                                                        <select id="set-location" name="set-location" class="empty">
                                                            <option value="0" selected="selected">(EDT) -0400 UTC New York/USA
                                                            </option>
                                                            <option value="1">(EDT) -0400 UTC Washington D.C./USA</option>
                                                            <option value="2"> (PDT) -0700 UTC California/USA</option>
                                                        </select>
                                                        <i class="arrow double"></i>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="section row mb10">
                                                <label for="store-currency" class="field-label col-sm-2 ph10 text-center">Store
                                                    Currency:</label>

                                                <div class="col-sm-10 ph10">
                                                    <label for="store-currency" class="field prepend-icon">
                                                        <input type="text" name="store-currency" id="store-currency" class="gui-input" value="" placeholder="United States Dollar">
                                                        <span class="field-icon">
                                                            <i class="fa fa-usd"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="section row mb10">
                                                <label for="store-units" class="field-label col-sm-2 ph10 text-center">Store Unit
                                                    System:</label>

                                                <div class="col-sm-10 ph10">
                                                    <label for="store-units" class="field prepend-icon">
                                                        <input type="text" name="store-units" id="store-units" class="gui-input" value="" placeholder="Metric">
                                                        <span class="field-icon">
                                                            <i class="fa fa-barcode"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="section row mb10">
                                                <label for="store-weight" class="field-label col-sm-2 ph10 text-center">Store Weight
                                                    Unit:</label>

                                                <div class="col-sm-10 ph10">
                                                    <label for="store-weight" class="field prepend-icon">
                                                        <input type="text" name="store-weight" id="store-weight" class="gui-input" value="" placeholder="Pound(lb)">
                                                        <span class="field-icon">
                                                            <i class="fa fa-square"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="section row mb10">
                                                <label for="store-desc" class="field-label col-sm-2 ph10 text-center">Store
                                                    Description:</label>

                                                <div class="col-sm-10 ph10">
                                                    <label class="field prepend-icon">
                                                        <textarea class="gui-textarea" id="store-desc" name="store-desc" placeholder="Write a description"></textarea>
                                                        <span class="field-icon">
                                                            <i class="fa fa-file"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <!-- Policies -->
                                <div class="panel mbn">
                                    <div class="panel-heading">
                                        <span class="panel-title">Policies</span>
                                    </div>
                                    <div class="panel-body br-t">
                                        <div class="allcp-form theme-primary">


                                            <div class="section row mb25">
                                                <label for="refund-policy" class="field-label col-sm-2 ph10 text-center">Refund
                                                    Policy</label>

                                                <div class="col-sm-10 ph10">
                                                    <label class="field prepend-icon">
                                                        <textarea class="gui-textarea" id="refund-policy" name="refund-policy" placeholder="Refund policy terms and conditions..."></textarea>
                                                        <span class="field-icon">
                                                            <i class="fa fa-credit-card"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="section row mb25">
                                                <label for="privacy-policy" class="field-label col-sm-2 ph10 text-center">Privacy
                                                    Policy</label>

                                                <div class="col-sm-10 ph10">
                                                    <label class="field prepend-icon">
                                                        <textarea class="gui-textarea" id="privacy-policy" name="privacy-policy" placeholder="Privacy policy terms and conditions..."></textarea>
                                                        <span class="field-icon">
                                                            <i class="fa fa-crosshairs"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="section row mb15">
                                                <label for="store-tos" class="field-label col-sm-2 ph10 text-center">Terms of
                                                    Service</label>

                                                <div class="col-sm-10 ph10">
                                                    <label class="field prepend-icon">
                                                        <textarea class="gui-textarea" id="store-tos" name="store-tos" placeholder="Terms of service conditions..."></textarea>
                                                        <span class="field-icon">
                                                            <i class="fa fa-align-justify"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- /Column Center -->
                    </div>
@stop