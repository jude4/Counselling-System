
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
          <div class="modal-header text-center">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">
             <div class="login px-4 py-4 mx-auto mw-100">
                <h5 class="text-center mb-4">Login Now</h5>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                   <div class="form-group">
                      <p class="mb-2">Email address</p>
                      <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail1" name="email" value="{{ old('email') }}"  placeholder="" required="" autofocus>
                      @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif


                    </div>
                   <div class="form-group">
                      <p class="mb-2">Password</p>
                      <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="" required="">

                      @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif

                    </div>
                   <div class="form-check mb-3">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <p class="form-check-p">Check me out</p>
                   </div>
                   <button type="submit" class="btn submit">Sign In</button>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--//Login-->
 <!--/Register-->
 <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
          <div class="modal-header text-center">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">
             <div class="login px-4 py-4 mx-auto mw-100">
                <h5 class="text-center mb-4">Register Now</h5>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <input type="hidden" name="role_id" value="3">
                   <div class="form-group ">
                      <p class="mb-2">Full name</p>
                      <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" name="name" id="validationDefault01" placeholder="" required="" autofocus>

                      @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                      @endif


                    </div>
                    <div class="form-group ">
                        <p class="mb-2">Matriculation Number</p>
                        <input type="text" class="form-control{{ $errors->has('student_id') ? ' is-invalid' : '' }}" value="{{ old('student_id') }}" name="student_id" id="validationDefault01" placeholder="" required="" autofocus>

                        @if ($errors->has('student_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('student_id') }}</strong>
                        </span>
                        @endif

                      </div>

                      {{--  <div class="form-group ">
                        <p class="mb-2">Faculty</p>
                        <input type="text" class="form-control{{ $errors->has('facty') ? ' is-invalid' : '' }}" value="{{ old('facty') }}" name="facty" id="validationDefault01" placeholder="" required="" autofocus>

                        @if ($errors->has('facty'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('facty') }}</strong>
                        </span>
                        @endif

                      </div>

                      <div class="form-group ">
                        <p class="mb-2">Department</p>
                        <input type="text" class="form-control{{ $errors->has('dept') ? ' is-invalid' : '' }}" value="{{ old('dept') }}" name="dept" id="validationDefault01" placeholder="" required="" autofocus>

                        @if ($errors->has('dept'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('dept') }}</strong>
                        </span>
                        @endif

                      </div>
                      <div class="form-group ">
                        <p class="mb-2">Current Level</p>
                        <input type="text" class="form-control{{ $errors->has('level') ? ' is-invalid' : '' }}" value="{{ old('level') }}" name="level" id="validationDefault01" placeholder="" required="" autofocus>

                        @if ($errors->has('level'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('level') }}</strong>
                        </span>
                        @endif

                      </div>  --}}


                   <div class="form-group">
                      <p class="mb-2">Email Address</p>
                      <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" name="email" id="validationDefault02" placeholder="" required="" autofocus>

                      @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif


                    </div>
                   <div class="form-group">
                      <p class="mb-2">Password</p>
                      <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password1" placeholder="" required="">

                      @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif

                    </div>
                   <div class="form-group">
                      <p class="mb-2">Confirm Password</p>
                      <input type="password" class="form-control" name="password_confirmation" id="password2" placeholder="" required="">
                   </div>
                   <button type="submit" class="btn submit ">Register</button>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
