@extends('layouts.dashboard')


@section('content')
    <div class="main-page compose">
        <h2 class="title1">Compose Mail Page</h2>
   @include('inc.slidebar')
   <div class="col-md-8 compose-right widget-shadow">
        <div class="panel-default">
            <div class="panel-heading">
                Compose New Message
            </div>
            <div class="panel-body">
                <div class="alert alert-info">
                    Please fill details to send a new message
                </div>
                <form class="com-mail" action="{{ route('chats.store') }}" method="POST">
                    @csrf

                    <input type="hidden" name="role_id" value="3" />
                    @if ($role_id == 2)
                    <select class="form-control control3" name="recipient_id">

                        <option value="">Select Counsellor to Speak to:</option>
                        @foreach($users as $user)
                            @if ($user->role_id == 2)
                                <option value="{{$user->id}}">{{ $user->name }}</option>
                            @endif
                        @endforeach
                        @else
                        <select class="form-control control3" name="recipient_id">

                                <option value="">Select Lecturer to Speak to:</option>
                                @foreach($users as $user)
                                    @if ($user->role_id == 4)
                                        <option value="{{$user->id}}">{{ $user->name }}</option>
                                    @endif
                                @endforeach
                    @endif
                    </select>
                    {{--  <input type="hidden" class="form-control1 control3" name="recipient_id" value="2">  --}}
                    {{--  <input type="text" class="form-control1 control3" placeholder="To : Counsellor" disabled>  --}}
                    <input type="text" class="form-control1 control3" name="subject" value="{{ old('subject') }}" placeholder="Subject :">
                    <textarea rows="6" class="form-control1 control2" name="body"value="{{ old('body') }}"  placeholder="Message :"></textarea>
                    <div class="form-group">
                        <div class="btn btn-default btn-file">
                            <i class="fa fa-paperclip"></i> Attachment
                            <input type="file" name="attachment">
                        </div>
                        <p class="help-block">Max. 32MB</p>
                    </div>
                    <input type="submit" value="Send Message">
                </form>
            </div>
        </div>
    </div>
        <div class="clearfix"> </div>
    </div>
@stop


