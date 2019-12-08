@extends('layouts.dashboard')


@section('content')

<div class="main-page">
        {{--  <div class="col_3">
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <div class="stats">
                  <h1><strong>2</strong></h1>
                  <h3>Notification</h3>
                </div>
            </div>
        </div>  --}}
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <div class="stats">
                  <h1><strong>{{$msgs}}</strong></h1>
                  <h3>Inbox</h3>
                </div>
            </div>
        </div>
        {{--  <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <div class="stats">
                      <h2><strong>Department</strong></h2>
                      <h3>Computer Science</h3>
                    </div>
                </div>
            </div>  --}}

            {{--  <div class="col-md-3 widget widget1">
                    <div class="r3_counter_box">
                        <div class="stats">
                          <h2><strong>Currnet Level</strong></h2>
                          <h3>{{auth()->user()->level}}</h3>
                        </div>
                    </div>
                </div>  --}}
    </div>

        </div>



@stop

