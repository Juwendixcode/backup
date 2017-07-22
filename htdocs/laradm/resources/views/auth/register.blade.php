@extends('admin.layouts.admin')

@section('content')
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title"> Register </h1>
                    </header>
                    <div class="auth-content">
                        <form id="signup-form" action="{{ route('register') }}" method="POST" novalidate="">
                        {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}"> 
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="firstname">Firstname</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lastname">Lastname</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"> 
                                        <input type="text" class="form-control underlined" name="firstname" id="firstname" placeholder="Enter firstname" value="{{ old('firstname') }}" required autofocus> 
                                    
                                        @if ($errors->has('firstname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                    <div class="col-sm-6"> 
                                        <input type="text" class="form-control underlined" name="lastname" id="lastname" placeholder="Enter lastname" value="{{ old('lastname') }}" required autofocus>

                                        @if ($errors->has('lastname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}"> 
                                <label for="email">Email</label> 
                                <input type="email" class="form-control underlined" name="email" id="email" placeholder="Enter email address" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}"> 
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="confirm">Confirm</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"> 
                                        <input type="password" class="form-control underlined" name="password" id="password" placeholder="Enter password" required autofocus> 
                                
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                    </div>
                                    <div class="col-sm-6"> 
                                        <input type="password" class="form-control underlined" name="password_confirmation" id="retype_password" placeholder="Re-type password" required autofocus> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}"> 
                                <label for="status">Status</label>
                                <select name="status" class="form-control" style="min-height: 2.5em">
                                    <option value="ADMIN">ADMIN</option>
                                    <option value="MEMBER">MEMBER</option>
                                </select>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group"> 
                                <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-xs-center">Already have an account? <a href="{{ route('login') }}">Login!</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-xs-center">
                    <a href="{{ url('/') }}" class="btn btn-secondary rounded btn-sm">
                        <i class="fa fa-arrow-left"></i> Back to homepage
                    </a> 
                </div>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
@endsection
