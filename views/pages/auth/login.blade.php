@extends('sweetdigitaladmin::layouts.default')

@section('content')
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Log In</div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'login']) !!}
                        <fieldset>
                            <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus="" value="{{ old('username') }}" required>
                                {!! $errors->first('username', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                <input class="form-control" placeholder="Password" name="password" type="password" required>
                                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                            </div>
                            <button type="submit" class="btn btn-primary">Log In</button>
                        </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
