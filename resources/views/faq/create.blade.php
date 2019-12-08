@extends('layouts.dashboard')


@section('content')
<div class="form-three widget-shadow">
    <h1 class="text-center">Create New FAQ
    </h1>
<div data-example-id="form-validation-states">
    <form action="{{ route('faq.store')}}" method="POST">
        @csrf


        <div class="form-group has-success">
            <label class="control-label" for="inputSuccess1">Question Asked</label>
            <input type="text" name="question" placeholder="Type Question here..." class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" id="inputSuccess1" aria-describedby="helpBlock2"  value="{{ old('question') }}" required autofocus>
            @if ($errors->has('question'))
                <span id="helpBlock2" class="help-block">
                    <strong>{{ $errors->first('question') }}</strong>
                </span>
             @endif

        </div>

        <div class="form-group has-primary">
            <label class="control-label" for="inputSuccess1">Answer To Question</label>
            <textarea name="answer" placeholder="Answer Question here..." class="form-control{{ $errors->has('answer') ? ' is-invalid' : '' }}" id="inputSuccess1" aria-describedby="helpBlock2"  value="{{ old('body') }}" required autofocus></textarea>
            @if ($errors->has('counsellor_id'))
                <span id="helpBlock2" class="help-block">
                    <strong>{{ $errors->first('answer') }}</strong>
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

@stop

