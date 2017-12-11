@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-3">
                                <a href="{{ url('/customerRegister') }}" class="btn btn-outline-info">
                                    Supplier register
                                </a>
                            </div>
                            <div class="col-6">
                                <h3 style="font-family:  'Adobe Caslon Pro Bold'; font-weight: 900;color: #0f7864">Supplier Registration</h3>
                            </div>
                            <div class="col-3"></div>

                        </div>


                    </div>

                    <br>

                    <div class="card-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-2">
                                    <label for="name" class="col-form-label">Your name</label>
                                </div>
                                <div class="col-2">
                                    <select class="form-control" name="credential" id="">
                                        <option value="Mr.">Mr</option>
                                        <option value="Mr.">Ms</option>

                                    </select>
                                </div>
                                <div class="col-4">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                        <input id="name" type="text" placeholder="First Name" class="form-control"
                                               name="name" value="{{ old('name') }}" autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                </div>
                                <div class="col-4">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                        <input id="lastName" type="text" placeholder="Last Name" class="form-control"
                                               name="lastName" value="{{ old('LastName') }}" autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                </div>
                                <div class="col-3"></div>

                            </div>
                            <div class="form-group row">
                                <div class="col-2">
                                    <label for="company" class="col-form-label">Company</label>

                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">


                                        <input placeholder="Name of the company" id="company" type="text"
                                               class="form-control" name="company"
                                               value="{{ old('company') }}" required>

                                        @if ($errors->has('company'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                        @endif

                                    </div>

                                </div>
                                <div class="col-4"></div>

                            </div>

                            <div class="form-group row">
                                <div class="col-2">
                                    <label for="mobile" class="col-form-label">Mobile</label>

                                </div>
                                <div class="col-4">
                                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">


                                        <input id="email" type="tel" class="form-control" name="mobile"
                                               value="{{ old('mobile') }}" required>

                                        @if ($errors->has('mobile'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                        @endif

                                    </div>

                                </div>
                                <div class="col-2">
                                    <label for="telephone" class="col-form-label">Telephone</label>

                                </div>
                                <div class="col-4">
                                    <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">


                                        <input id="telephone" type="tel" class="form-control" name="telephone"
                                               value="{{ old('telephone') }}" required>

                                        @if ($errors->has('telephone'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                        @endif

                                    </div>

                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-2">
                                    <label for="address" class="col-form-label">Address</label>

                                </div>
                                <div class="col-3">
                                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">


                                        <input placeholder="Country " id="country" type="text" class="form-control"
                                               name="country"
                                               value="{{ old('country') }}" required>

                                        @if ($errors->has('country'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                        @endif

                                    </div>

                                </div>
                                <div class="col-4">
                                    <div class="form-group{{ $errors->has('province') ? ' has-error' : '' }}">


                                        <input placeholder="Province/State " id="province" type="text"
                                               class="form-control" name="province"
                                               value="{{ old('province') }}" required>

                                        @if ($errors->has('province'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">


                                        <input placeholder="City" id="city" type="text" class="form-control" name="city"
                                               value="{{ old('city') }}" required>

                                        @if ($errors->has('city'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                </div>

                            </div>


                            <div class="form-group row">
                                <div class="col-2">
                                    <label for="email" class="col-form-label">E-mail</label>

                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                                        <input placeholder="Your e-mail " id="email" type="email" class="form-control"
                                               name="email"
                                               value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif

                                    </div>

                                </div>
                                <div class="col-4"></div>

                            </div>


                            <div class="form-group row">
                                <div class="col-2"><label for="password" class="col-form-label">Password</label></div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                        <input placeholder="Enter password" id="password" type="password"
                                               class="form-control" name="password"
                                               required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-4"></div>

                            </div>

                            <div class="form-group row">
                                <div class="col-2"><label for="password-confirm" class="col-form-label">Retype
                                        Pass.</label></div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                                        <input placeholder="Confirm Password" id="password-confirm" type="password"
                                               class="form-control"
                                               name="password"
                                               required>

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-4"></div>

                            </div>

                            <div class="form-group row">
                                <div class="col-2">

                                </div>
                                <div class="col-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                   id="supplierCheck1" value="option1">
                                            I am gonna sell products
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                   id="supplierCheck2" value="option2">
                                            I am gonna rent products
                                        </label>
                                    </div>
                                </div>
                                <div class="col-2">

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-2">

                                </div>
                                <div class="col-4">
                                    <div class="form-check ">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                   id="supplierCheck3" value="option3">
                                            I am looking for the works
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check ">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                   id="supplierCheck4" value="option3">
                                            I am looking for hire
                                        </label>
                                    </div>
                                </div>
                                <div class="col-2">

                                </div>
                            </div>


                            <div class="form-group row">

                                <div style="text-align: center" class="col-4 offset-4">
                                    <button type="submit" class="btn btn-outline-success btn-lg">
                                        Register
                                    </button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/jquery-2.2.3.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery.backstretch.min.js"></script>
    <script src="/js/scripts.js"></script>

@endsection