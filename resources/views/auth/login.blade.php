@extends('layouts.app')

@section('content')
<div class="allcp-form theme-primary mw400" id="login">
                <div class="bg-primary mw600 text-center mb20 br3 pt15 pb10">
                    <img src="{{ URL::asset('public/img/logo.png')}}" alt=""/>
                </div>
                <div class="panel mw400">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                     {{ csrf_field() }}
                        <div class="panel-body pn mv10">
                            <div class="section">
                                <label for="username" class="field prepend-icon">
                                <input id="email" type="email" class="gui-input"
                                           placeholder="Username" name="email" value="{{ old('email') }}">
                                <span class="field-icon">
                                        <i class="fa fa-user"></i>
                                </span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong  class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" class="gui-input"
                                           placeholder="Password">
                                    <span class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section">
                                <div class="bs-component pull-left pt5">
                                    <div class="radio-custom radio-primary mb5 lh25">
                                        <input type="radio" id="remember" name="remember">
                                        <label for="remember">Remember me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-bordered btn-primary pull-right">Log in</button>
                            </div>
                            <!-- /section -->

                        </div>
                        <!-- /Form -->
                    </form>
                </div>
                <!-- /Panel -->
            </div>
@endsection
