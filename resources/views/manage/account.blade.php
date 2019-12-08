@extends('layouts.dashboard')

@section('content')
<div class="form-three widget-shadow">
    <h1 class="text-center">Edit Account
    </h1>
    <div data-example-id="form-validation-states">
        {{--  Update Student Account  --}}
        @if (auth()->user()->role_id == 3)
            <form action="{{ url('manage/update')}}" method="POST">
                @csrf

                <input type="hidden" name="role_id" value="3">

                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess1">Full Name</label>
                    <input type="text" name="name" placeholder="Full Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="inputSuccess1" aria-describedby="helpBlock2"  value="{{$student->name }}" required autofocus>
                    @if ($errors->has('name'))
                        <span id="helpBlock2" class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                     @endif

                </div>



                <div class="form-group has-warning">
                    <label class="control-label" for="inputSuccess1">Email</label>
                    <input type="email" name="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="inputSuccess1" aria-describedby="helpBlock2"  value="{{ $student->email }}" required autofocus>
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
                         <button name="submit" type="submit" id="checkboxError"  class="btn btn-info btn-sm">Update</button>
                    </div>
                </div>
            </form>
        @endif
{{--  Update Counsellor Account  --}}
        @if (auth()->user()->role_id == 2)
        <form action="{{ url('manage/update')}}" method="POST">
                @csrf

                <input type="hidden" name="role_id" value="2">

                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess1">Full Name</label>
                    <input type="text" name="name" placeholder="Full Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="inputSuccess1" aria-describedby="helpBlock2"  value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span id="helpBlock2" class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
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
                         <button name="submit" type="submit" id="checkboxError"  class="btn btn-info btn-sm">Update</button>
                    </div>
                </div>
            </form>
        @endif
    {{--  Update Course Adviser Account   --}}
        @if (auth()->user()->role_id == 4)
        <form action="{{ url('manage/update')}}" method="POST">
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
                         <button name="submit" type="submit" id="checkboxError"  class="btn btn-info btn-sm">Update</button>
                    </div>
                </div>
            </form>
        @endif
    </div>
</div>
@endsection
