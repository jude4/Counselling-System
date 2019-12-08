@extends('layouts.dashboard')


@section('content')
<div class="main-page">
        <?php $id = 1; ?>
            <div class="tables">
                <div class="bs-example widget-shadow" data-example-id="contextual-table">
                    <h4>List of Register Course Adivser
                            <span class="pull-right">
                                    <a href="{{ url('manage/adviser') }}" class="btn btn-primary btn-sm">Register Course Adviser+</a>
                                </span>
                    </h4>
                    <div class="table-responsive bs-example widget-shadow">

                    <table class="table table-hover">

                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Profile</th>
                                <th>Course Advisers ID</th>
                                <th>#Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @if (count($course_advisers) < 1)
                                <tr>
                                    <td colspan="6">
                                        <center> <h3 style="color:red;">{{'No Course Adviser is Registered Yet!!'}}</h3></center>
                                    </td>
                                </tr>
                                @endif
                                @foreach ($course_advisers as $course_adivser)

                            <tr>
                                <th width="10%" scope="row">{{$id++}}</th>
                                <td width="20%">{{$course_adivser->name}}</td>
                                <td width="25%">{{$course_adivser->email}}</td>
                                <td>
                                    <img src="/emma/storage/app/public/public/cover_image/{{$course_adviser->cover_image}}" style="width:120; height:120;>" title="" class="img-circle img-thumbnail isTooltip"  data-original-title="Usuario">
                                </td>
                                <td width="25%">{{$course_adivser->lecturer_id}}</td>
                                <td width="10%">
                                        <form action="{{ route('manage.destroy', $course_adivser->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete">
                                                <button name="submit">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button>

                                                </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    </div>
                </div>

            </div>
    </div>
@stop

