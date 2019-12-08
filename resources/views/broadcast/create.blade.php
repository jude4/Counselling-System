@extends('layouts.dashboard')


@section('content')
    <div class="main-page compose">
        <h2 class="title1">BroadCast Message</h2>
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
                <form class="com-mail" action="{{ route('boardcast.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="role_id" value="2">
                    <label class="form-group"><span style="color: red">*This field is disable*</span></label>
                    <input type="text" class="form-control1 control3" name="subject" value="" disabled placeholder="To : All Users ">
                    <input type="text" class="form-control1 control3" name="subject" value="{{ old('subject') }}" placeholder="Subject :">
                    <textarea rows="6" class="form-control1 control2" name="body"value="{{ old('body') }}"  placeholder="Message :"></textarea>
                    <div class="form-group">

                    </div>
                    <input type="submit" value="Send Message">
                </form>
            </div>
        </div>
    </div>
        <div class="clearfix"> </div>
    </div>
@stop


