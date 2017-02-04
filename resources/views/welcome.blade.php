@extends('layouts.app')

@section('content')
<div class="allcp-form theme-primary" id="login1" style="margin-top: 6%;">
                <div class="bg-primary text-center mb20 br3 pt15 pb10">
                    <img src="{{ URL::asset('public/img/logo.png')}}" alt=""/>
                </div>
                <div class="panel">

                    <p>Stay notified about coming updates. Sign up now and get notified for free!</p>
                    <!-- /Panel Heading -->
                    <form method="post" action="/" id="contact">

                        <div class="row">
                            <div class="col-sm-12 ph10 mb5">
                                <div class="smart-widget sm-right smr-95">
                                    <label for="password" class="field prepend-icon">
                                        <input type="text" name="password" id="password" class="gui-input"
                                               placeholder="Your Email Address">
                                        <span class="field-icon">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                    </label>
                                    <button type="submit" class="button btn-primary">Notify</button>
                                </div>
                            </div>
                        </div>

                        <!-- /Form -->

                    </form>
                </div>
            </div>
@endsection
