@extends('layouts.app')

@section('content')<br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-2">
            <div class="card">
                <div class="card-heading" style="text-align: center">
                    <h3 style="font-weight: 900;color: #0f7864;margin-left: 10px;  float: left  ">Reset Password</h3>

                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-4 control-label">E-Mail Address</label>

                            <div class="col-sm-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6 sm-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/popper.min.js"></script>

<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.backstretch.min.js"></script>
<script src="/js/scripts.js"></script>
@endsection
