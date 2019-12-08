@extends('layouts.dashboard')

@section('content')
			<div class="main-page">
			<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <div class="stats text-center">
                      <h3>Avaliable Posts</h3>
                      <h1 class="text-center"><strong>
                        {{count($posts)}}
                    </strong></h1>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <div class="stats text-center">
                            <h3>Course Adviser</h3>
                            <h1 class="text-center">
                                    <h1 class="">
                                            @if (count($course_advisers) < 1)
                                            <strong>0</strong>
                                            @else
                                                <strong>{{ count($course_advisers) }}</strong>
                                            @endif
                            </h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 widget widget1">
                    <div class="r3_counter_box">
                        <div class="stats text-center">
                                <h3>Student</h3>
                                <h1 class="">
                                        @if (count($students) < 1)
                                        <strong>0</strong>
                                        @else
                                            <strong>{{ count($students) }}</strong>
                                        @endif
                                </h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <div class="stats text-center">
                                    <h3>Counsellor</h3>
                                    <h1 class="text-center">
                                        @if (count($counsellors) < 1)
                                        <strong>0</strong>
                                        @else
                                            <strong>{{ count($counsellors) }}</strong>
                                        @endif
                                    </h1>
                            </div>
                        </div>
                    </div>



		</div>

			</div>

@endsection
