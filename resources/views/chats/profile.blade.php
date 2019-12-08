@extends('layouts.dashboard')


@section('content')
    <div class="main-page compose">

@include('inc.slidebar')


        <div class="col-md-8 compose-right widget-shadow">
                <div class="panel-info widget-shadow">
                        <div class="row">
                            <div class="col-lg-12 ">
                               <h1 class="page-header">Sender Details
                                    <span class="pull-right">
                                            <a href="{{ url('chats/reply/'. $msg->sender_id) }}" class="btn btn-primary btn-sm">Reply message</a>
                                        </span>
                            </h1>

                               <p>
                                   <b>Name: </b>{{ $user->name}}<hr>
                                   @if ($user->role_id == 3)
                                     <b>Mat No: </b>{{ $user->student_id}}<hr>
                                     <b>Faculty: </b>{{ $user->facty}}<hr>
                                     <b>Department: </b>{{ $user->dept}}<hr>
                                     <b>Level: </b>{{ $user->level}}<hr>
                                     <b>Subject: </b>{{ $msg->subject }}<hr>
                                     <b>Message: </b> {{$msg->body}}<hr>
                                     <b>Date: </b> {{$createdAt->format('M d, Y')}}


                                     @endif
                                   @if($user->role_id == 2)
                                     <b>Course Adviser ID: </b>{{ $user->lecturer_id}}<hr>
                                     <b>Subject: </b>{{ $msg->subject }}<hr>
                                     <b>Message: </b> {{$msg->body}}<hr>
                                     <b>Date: </b> {{$createdAt->format('M d, Y')}}
                                    @endif


                               </p>

                            </div>
                    </div>

            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
@stop


