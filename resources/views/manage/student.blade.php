@extends('layouts.dashboard')

@section('content')
<div class="form-three widget-shadow">
    <h1 class="text-center">Register Student
    </h1>
<div data-example-id="form-validation-states">
    <form action="{{ route('manage.store')}}" method="POST">
        @csrf

        <input type="hidden" name="role_id" value="3">

        <div class="form-group has-primary">
            <label class="control-label" for="inputSuccess1">Matriculation Number</label>
            <input type="text" name="student_id" placeholder="Mat No" class="form-control{{ $errors->has('student_id') ? ' is-invalid' : '' }}" id="inputSuccess1" aria-describedby="helpBlock2"  value="{{ old('student_id') }}" required autofocus>
            @if ($errors->has('student_id'))
                <span id="helpBlock2" class="help-block">
                    <strong>{{ $errors->first('student_id') }}</strong>
                </span>
             @endif

        </div>
        <div class="form-group has-primary">
                <label class="control-label" for="inputSuccess1">Faculty</label>
                <input type="text" name="facty" placeholder="Faculty" class="form-control{{ $errors->has('facty') ? ' is-invalid' : '' }}" id="inputSuccess1" aria-describedby="helpBlock2"  value="{{ old('facty') }}" required autofocus>
                @if ($errors->has('facty'))
                    <span id="helpBlock2" class="help-block">
                        <strong>{{ $errors->first('facty') }}</strong>
                    </span>
                 @endif

            </div>

            <div class="form-group has-primary">
                    <label class="control-label" for="inputSuccess1">Department</label>
                    <input type="text" name="dept" placeholder="Department" class="form-control{{ $errors->has('dept') ? ' is-invalid' : '' }}" id="inputSuccess1" aria-describedby="helpBlock2"  value="{{ old('dept') }}" required autofocus>
                    @if ($errors->has('dept'))
                        <span id="helpBlock2" class="help-block">
                            <strong>{{ $errors->first('dept') }}</strong>
                        </span>
                     @endif

                </div>
                <div class="form-group has-primary">
                        <label class="control-label" for="inputSuccess1">Current Level</label>
                        <input type="text" name="level" placeholder="Current Level" class="form-control{{ $errors->has('level') ? ' is-invalid' : '' }}" id="inputSuccess1" aria-describedby="helpBlock2"  value="{{ old('level') }}" required autofocus>
                        @if ($errors->has('level'))
                            <span id="helpBlock2" class="help-block">
                                <strong>{{ $errors->first('level') }}</strong>
                            </span>
                         @endif

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
