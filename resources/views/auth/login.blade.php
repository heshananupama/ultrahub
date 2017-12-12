@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <br>
            <div class="card">
                <div class="card-heading" style="text-align: center">
                    <h3 style="font-weight: 900;color: #0f7864;margin-left: 10px;  float: left  ">Login</h3>
 
                </div>
                <br>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-8 offset-2">

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="  control-label">E-Mail Address</label>

                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 offset-2">
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class=" control-label">Password</label>


                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif

                                        </div>
                                    </div>

                                </div>



                                <div class="form-group">
                                    <div class="col-8 offset-2">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-6 offset-3">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="divider"></div>
                        <div class="col-6">
                            <form class="form-horizontal" method="POST" action=" ">
                                {{ csrf_field() }}
                                <br>
                                <div class="row">
                                    <div class="col-10 offset-1">
                                        <div class="form-group">

                                            <a style="background-color: #3b5998" id="facebook" type="button" class="btn btn-lg  btn-block" name="facebook" ><i class="fa fa-facebook"></i>&nbsp;&nbsp;<span style="font-size: medium"> Sign in with facebook</span> </a>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10 offset-1">
                                        <div class="form-group">

                                            <a style="background-color: #0084b4" id="twitter" type="button" class="btn btn-lg  btn-block" name="twitter" ><i class="fa fa-twitter"></i>&nbsp;&nbsp;<span style="font-size: medium"> Sign in with twitter</span></a>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10 offset-1">
                                        <div class="form-group">

                                            <a style="background-color: #d34836" id="google" type="button" class="btn btn-lg  btn-block" name="google" ><i class="fa fa-google-plus"></i>&nbsp;&nbsp;<span style="font-size: medium"> Sign in with google</span></a>

                                        </div>

                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/jquery.backstretch.min.js"></script>
<script src="/js/scripts.js"></script>
@endsection
