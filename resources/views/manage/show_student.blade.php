@extends('layouts.dashboard')


@section('content')
<div class="main-page">
    <?php $id = 1; ?>
        <div class="tables">
            <div class="bs-example widget-shadow" data-example-id="contextual-table">
                <h4>List of Register Students
                        <span class="pull-right">
                                <a href="{{ url('manage/student') }}" class="btn btn-primary btn-sm">Register Student+</a>
                            </span>
                </h4>
                <div class="table-responsive bs-example widget-shadow">

                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mat No</th>
                            <th>Profile</th>
                            <th>#Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            @if (count($students) < 1)
                            <tr>
                                <td colspan="6">
                                    <center> <h3 style="color:red;">{{'No Student is Registered Yet!!'}}</h3></center>
                                </td>
                            </tr>
                            @endif
                            @foreach ($students as $student)

                        <tr>
                            <th width="10%" scope="row">{{$id++}}</th>
                            <td width="20%">{{$student->name}}</td>
                            <td width="25%">{{$student->email}}</td>
                            <td width="25%">{{$student->student_id}}</td>
                            <td><img src="/emma/storage/app/public/public/cover_image/{{$student->cover_image}}" style="width:120; height:120;>" title="" class="img-circle img-thumbnail isTooltip"  data-original-title="Usuario"></td>
                            <td width="10%">
                                    <form action="{{ route('manage.destroy', $student->id) }}" method="POST">
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

