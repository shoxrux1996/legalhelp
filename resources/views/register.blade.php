@extends('layouts.app')
@section('styles')
    <link href="{{asset('dist/css/login-regis.css')}}" rel="stylesheet">
@endsection

@section('content')

    <!-- Login Form -->
    <div class="container">
        <div class="row" id="register-bg">
            <div class="col-md-7 col-sm-10 col-xs-12">
                <h1>Sign in to LegalHelp</h1>
                <ul class="nav nav-tabs">
                    <li class="{{$activeuser==='client' ? 'active' : ''}}"><a data-toggle="tab"
                                                                              href="#client">Client</a></li>
                    <li class="{{$activeuser==='lawyer' ? 'active' : ''}}"><a data-toggle="tab"
                                                                              href="#lawyer">Lawyer</a></li>
                </ul>

                <div class="tab-content">
                    <div id="lawyer" class="tab-pane fade in {{$activeuser==='lawyer' ? 'active' : ''}}">
                        <span class="green-text">For specialists in the field of law. You will be able to provide clients with all types of legal services available on the site.</span>
                        <h4>Your new account</h4>
                        <form method="POST" action="{{ route('user.register.submit', ['usertype'=>'lawyer'])}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="Lname"><i class="fa fa-address-book-o" aria-hidden="true"></i>
                                    Last Name</label>
                                <input type="text" class="form-control" name="lawyer[Lname]"
                                       placeholder="Enter your Last Name" required>
                            </div>
                            <div class="form-group">
                                <label for="Fame"><i class="fa fa-user-circle" aria-hidden="true"></i> First
                                    Name</label>
                                <input type="text" class="form-control" name="lawyer[Fname]"
                                       placeholder="Enter your First Name" required>
                            </div>
                            <div class="form-group">
                                <label for="Mname"><i class="fa fa-user-circle" aria-hidden="true"></i> Middle
                                    Name</label>
                                <input type="text" class="form-control" name="lawyer[Mname]"
                                       placeholder="Enter your Middle Name">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</label>
                                <input type="email" class="form-control" name="lawyer[email]"
                                       placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> Password</label>
                                @if ($errors->has('lawyer.password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('lawyer.password') }}</strong>
                                </span>
                                @endif
                                @if ($errors->has('lawyer.password_confirm'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('lawyer.password_confirm') }}</strong>
                                </span>
                                @endif
                                <input type="password" class="form-control" name="lawyer[password]"
                                       placeholder="Enter new password">
                            </div>
                            <div class="form-group">
                                <label for="password-confirm"><i class="fa fa-lock" aria-hidden="true"></i> Confirm password
                                </label>
                                <input type="password" class="form-control" name="lawyer[password-confirm]"
                                       placeholder="Re-enter the new password">
                            </div>
                            <button type="submit"
                                    class="btn btn-primary pull-right green-button register">Sign In</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <div id="client" class="tab-pane fade in {{$activeuser==='client' ? 'active' : ''}}">
                        <span class="green-text">Choose this type of account if you need legal assistance.</span>
                        <h4>Your new account</h4>
                        <form method="POST" action="{{ route('user.register.submit', ['usertype'=>'client'])}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="Fname"><i class="fa fa-user-circle"
                                                      aria-hidden="true"></i>First Name</label>
                                <input type="text" class="form-control" name="client[Fname]"
                                       placeholder="Enter your First Name" required>
                            </div>
                            <div class="form-group">
                                <label for="Lname"><i class="fa fa-user-circle"
                                                      aria-hidden="true"></i>Last Name</label>
                                <input type="text" class="form-control" name="client[Lname]"
                                       placeholder="Enter your Last Name" required>
                            </div>
                            <div class="form-group">
                                <label for="Mname"><i class="fa fa-user-circle"
                                                      aria-hidden="true"></i>Middle Name</label>
                                <input type="text" class="form-control" name="client[Mname]"
                                       placeholder="Enter your Middle Name">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fa fa-envelope-o"
                                                         aria-hidden="true"></i> Email</label>
                                <input type="email" class="form-control" name="client[email]"
                                       placeholder="Enter your email">
                            </div>
                            <div class="form-group{{ $errors->has('client.password') || $errors->has('client.password_confirm') ? ' has-error' : '' }}">
                                <label for="password"><i class="fa fa-lock"
                                                         aria-hidden="true"></i> Password</label>
                                @if ($errors->has('client.password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('client.password') }}</strong>
                                </span>
                                @endif
                                @if ($errors->has('client.password_confirm'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('client.password_confirm') }}</strong>
                                </span>
                                @endif
                                <input type="password" class="form-control" name="client[password]"
                                       placeholder="Enter new password">
                            </div>
                            <div class="form-group">
                                <label for="password-confirm"><i class="fa fa-lock"
                                                                 aria-hidden="true"></i> Confirm password
                                </label>
                                <input type="password" class="form-control" name="client[password_confirm]"
                                       placeholder="Re-enter the new password">
                            </div>
                            <button type="submit"
                                    class="btn btn-primary pull-right green-button register">Sign in</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Login Form -->
@endsection