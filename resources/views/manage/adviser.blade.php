@extends('layouts.dashboard')

@section('content')
<div class="form-three widget-shadow">
    <h1 class="text-center">Create Course Adviser
    </h1>
<div data-example-id="form-validation-states">
    <form action="{{ route('manage.store')}}" method="POST">
        @csrf

        <input type="hidden" name="role_id" value="4">

        <div class="form-group has-success">
            <label class="control-label" for="inputSuccess1">Full Name</label>
            <input type="text" name="name" placeholder="Full Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="inputSuccess1" aria-describedby="helpBlock2"  value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span id="helpBlock2" class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
             @endif

        </div>

        <div class="form-group has-primary">
            <label class="control-label" for="inputSuccess1">Counsellor ID</label>
            <input type="text" name="lecturer_id" placeholder="Course Adviser ID" class="form-control{{ $errors->has('lecturer_id') ? ' is-invalid' : '' }}" id="inputSuccess1" aria-describedby="helpBlock2"  value="{{ old('lecturer_id') }}" required autofocus>
            @if ($errors->has('lecturer_id'))
                <span id="helpBlock2" class="help-block">
                    <strong>{{ $errors->first('lecturer_id') }}</strong>
                </span>
             @endif

        </div>

        <div class="form-group has-warning">
            <label class="control-label" for="inputSuccess1">Email</label>
            <input type="text" name="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="inputSuccess1" aria-describedby="helpBlock2"  value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span id="helpBlock2" class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
             @endif

        </div>

        <div class="form-group has-danger">
            <label class="control-label" for="inputSuccess1">Password</label>
            <input type="password" name="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="inputSuccess1" aria-describedby="helpBlock2"  required>
            @if ($errors->has('password'))
                <span id="helpBlock2" class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
             @endif

        </div>

        <div class="form-group has-danger">
            <label class="control-label" for="inputSuccess1">Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Confirm password" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2"  required>


        </div>
        <div class="has-error">
            <div class="checkbox">
                 <button name="submit" type="submit" id="checkboxError"  class="btn btn-info btn-sm">Create</button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
