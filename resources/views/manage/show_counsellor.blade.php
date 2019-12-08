@extends('layouts.dashboard')


@section('content')
<div class="main-page">
        <?php $id = 1; ?>
            <div class="tables">
                <div class="bs-example widget-shadow" data-example-id="contextual-table">
                    <h4>List of Register Counsellors
                            <span class="pull-right">
                                    <a href="{{ url('manage/counsellor') }}" class="btn btn-primary btn-sm">Register Counsellors+</a>
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
                                <th>Counsellor ID</th>
                                <th>#Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @if (count($counsellors) < 1)
                                <tr>
                                    <td colspan="6">
                                        <center> <h3 style="color:red;">{{'No Counsellor is Registered Yet!!'}}</h3></center>
                                    </td>
                                </tr>
                                @endif
                                @foreach ($counsellors as $counsellor)

                            <tr>
                                <th width="10%" scope="row">{{$id++}}</th>
                                <td width="20%">{{$counsellor->name}}</td>
                                <td width="25%">{{$counsellor->email}}</td>
                                <td><img src="/emma/storage/app/public/public/cover_image/{{$counsellor->cover_image}}" style="width:120; height:120;>" title="" class="img-circle img-thumbnail isTooltip"  data-original-title="Usuario"></td>
                                <td width="25%">{{$counsellor->counsellor_id}}</td>
                                <td width="10%">
                                        <form action="{{ route('manage.destroy', $counsellor->id) }}" method="POST">
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

