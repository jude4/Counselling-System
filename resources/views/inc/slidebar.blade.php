<div class="col-md-4 compose-left">
            <div class="folder widget-shadow">
                <ul>
                    <li class="head">Folders</li>
                    @if (auth()->user()->role_id == 2)
                    <li><a href="{{ url('chats/counsellor')}}"><i class="fa fa-inbox"></i>Inbox <span>52</span></a></li>
              @endif

              @if (auth()->user()->role_id == 3)
              <li><a href="{{ url('chats/student')}}"><i class="fa fa-inbox"></i>Inbox <span>52</span></a></li>
              {{--  <li><a href="{{ url('chats/compose') }}"><i class="fa fa-file-text-o"></i>Compose mail</a> </li>  --}}
             @endif

             @if (auth()->user()->role_id == 4)
              <li><a href="{{ url('chats/lecturer')}}"><i class="fa fa-inbox"></i>Inbox <span>52</span></a></li>
             @endif
                    {{--  <li><a href="#"><i class="fa fa fa-envelope-o"></i>Sent </a></li>  --}}

                </ul>
            </div>

        </div>
