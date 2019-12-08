@extends('layouts.dashboard')


@section('content')
    <div class="main-page compose" >
        <h2 class="title1">Compose Mail Page</h2>
        <div class="col-md-4 compose-left">
            <div class="folder widget-shadow">
                <ul>
                    <li class="head">Folders</li>
                    <li><a href="{{ url('/chats/counsellor') }}"><i class="fa fa-inbox"></i>Inbox </a></li>
                    {{--  <li><a href="#"><i class="fa fa fa-envelope-o"></i>Sent</a></li>  --}}
                    {{--  <li><a href="#"><i class="fa fa-file-text-o"></i>Drafts <span>03</span></a> </li>
                    <li><a href="#"><i class="fa fa-flag-o"></i>Spam </a></li>
                    <li><a href="#"><i class="fa fa-trash-o"></i>Trash</a></li>  --}}
                </ul>
            </div>

        </div>
        <div class="col-md-8 compose-right widget-shadow">
                <div class="panel-info widget-shadow">
                        <div class="row">
            <div class="col-lg-12 ">
                    <h1 class="page-header">Inbox </h1>
                       </div>
                    </div>
<?php $id = 1; ?>

                                {{--  <form class="wow fadeInDownaction" action="" method="POST">  --}}

                                    <table id="dash-table" class="table table-striped  table-hover table-responsive dataTable no-footer" style="font-size:12px" role="grid" aria-describedby="dash-table_info" cellspacing="0">

                                      <thead>
                                          <tr role="row">
                                              <th class="sorting_asc" tabindex="0" aria-controls="dash-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Product: activate to sort column descending" style="width: 107px;">
                                                  S/N
                                                </th>
                                                  <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 143px;">
                                                    Sender
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 79px;">
                                                    Subject
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 113px;">
                                                    Message
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 113px;">
                                                        Read Message
                                                    </th>
                                                 {{--  <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1" colspan="1" aria-label="Expired Date: activate to sort column ascending" style="width: 157px;">

                                                    </th>  --}}
                                               {{--  <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1" colspan="1" aria-label="Categories: activate to sort column ascending" style="width: 137px;">Categories</th>  --}}
                                                <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 139px;" width="14%">
                                                    #Action
                                                </th>
                                            </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($msgs as $msg)
                                <tr>
                                                <td>{{$id++}}</td>
                                                @if ($msg->role_id == 3)
                                                <td>{{'Student'}}</td>
                                                @endif
                                                @if ($msg->role_id == 2)
                                                <td>{{'Counsellor'}}</td>
                                                @endif
                                                @if ($msg->role_id == 4)
                                                <td>{{'Course Adviser'}}</td>
                                                @endif
                                                    <td>{{$msg->subject}}</td>

                                                <td>{{$msg->body}}</td>
                                                <td><a href="{{url('chats/profile/' . $msg->id . '/' . $msg->sender_id)}}" class="btn btn-info btn-sm">View profile</a></td>
                                                <td>



                                                    <a href="{{url('chats/reply',$msg->sender_id)}}" class="btn btn-primary btn-sm" type="submit">
                                                        {{--  Reply  --}}
                                                        <span class="glyphicon glyphicon-send text-send text-white"></span>
                                                        </a>


                                            </tr>
                                            @endforeach

                                                                                </tbody>

                                    </table>
                                         </div>






                     {{--  </form>  --}}
                    </div>
        </div>
        <div class="clearfix"> </div>
    </div>

@stop


