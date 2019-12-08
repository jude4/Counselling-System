@extends('layouts.dashboard')


@section('content')

<div class="box-body">

        <div class="container">
<div class="panel-body inf-content">
<div class="row">
    <h1 class="text-center"><strong>User Profile</strong></h1><br>

  <div class="col-md-4">
   <a data-target="#myModal" data-toggle="modal" href="" title="Click here to Change Image.">
      <img src="/emma/storage/app/public/public/cover_image/{{$user->cover_image}}" style="width:500px; height:400px;>" title="" class="img-circle img-thumbnail isTooltip"  data-original-title="Usuario">
   </a>
  </div>
  <div class="col-md-6">
       <form class="form-horizontal span6" action="" method="POST">
        @csrf
        <input type="hidden" name="_method" value="put">


       <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="idno"></label>

                <div class="col-md-8">
                    <div class="well">
                        <h3>Description</h3>
                        <br>
                        <p>
                            +Click on the white circle board no the left of the screen <hr>
                            +upload only images of the following format: <span style="color:red">*jpg, *png</sapn></p>
                    </div>
                   {{--  <button class="btn btn-primary " name="submit" type="submit"><span class="fa fa-save fw-fa"></span> Save</button>  --}}
                    <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span>&nbsp;<strong>List of Users</strong></a> -->
                </div>
              </div>
            </div>



  </form>


  </div>
</div>
</div>
</div>


<!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" data-dismiss="modal" type="button">×</button>

            <h4 class="modal-title" id="myModalLabel">Choose Image.</h4>
          </div>

          <form action="{{ url('manage/profile') }}" enctype="multipart/form-data" method="post">
            @csrf
            <input type="hidden" name="_method" value="head">
            <div class="modal-body">
              <div class="form-group">
                <div class="rows">
                  <div class="col-md-12">
                    <div class="rows">
                      <div class="col-md-8">
                      <input class="mealid" type="hidden" name="mealid" id="mealid" value="">
                        <input name="MAX_FILE_SIZE" type="hidden" value="1000000"> <input id="photo" name="cover_image" type="file">
                      </div>

                      <div class="col-md-4"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button class="btn btn-default" data-dismiss="modal">Close</button> <button class="btn btn-primary" name="submit" type="submit">Upload Photo</button>
            </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

       </div>
@endsection


