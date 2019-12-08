@extends('layouts.other')


@section('content')

{{--  <h2>Collapsible List Group</h2>
<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse1">Collapsible list group</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <ul class="list-group">
        <li class="list-group-item">One</li>
        <li class="list-group-item">Two</li>
        <li class="list-group-item">Three</li>
      </ul>
      <div class="panel-footer">Footer</div>
    </div>
  </div>
</div>  --}}
<section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
       <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Frequently Ask Question</h3>
       <div class="row">
            <div id="accordion" class="col-md-12" role="tablist">
                    <div class="card">
                      <div class="card-header " role="tab" id="headingOne">
                        <span class="badge badge-primary badge-pill incat-count">1</span>
                          <a data-toggle="collapse" style="color: blue" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            I got my first interview! How should I prepare?
                          </a>
                      </div>
                      <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body p-0">
                          <ul class="list-group cat-list">
                           <li class="list-group-item">
                            You were called for an interview, which is awesome,
                            but now you probably are worried about what you will be
                            asked and wondering how to ensure that you end up with that
                            coveted school counseling position. A while back, I had a linky party about this topic, where I posted my own interview tips and other school counselors did the same. I found their responses very helpful and I know you will as well.

                           </li>

                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" role="tab" id="headingTwo">

                          <span class="badge badge-primary badge-pill incat-count">2</span>
                          <a class="collapsed" style="color: blue" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            I finally have a full-time school counseling position - now what?

                          </a>

                      </div>
                      <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body p-0">
                          <ul class="list-group cat-list">
                           <li class="list-group-item">
                            I remember that feeling - yep, the overwhelmingly intimidating one that follows the euphoria of landing the job. You spend the entire interview process convincing everyone that you would be their perfect school counselor and now they're actually letting you loose in their school, working with their students? My first day was definitely sink or swim and I remember wondering how I could ever think I was adequately prepared for the flood of responsibilities.

                            If you find yourself in the same boat, trust me that you will make it through. I know it's hard and definitely a bit terrifying, but you will grow to have a sense of confidence, poise, and strength that only diving in headfirst can give you.

                           </li>

                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                        <div class="card-header " role="tab" id="headingOne">
                          <span class="badge badge-primary badge-pill incat-count">3</span>
                            <a data-toggle="collapse" style="color: blue" href="#collapse3" aria-expanded="true" aria-controls="collapseOne">
                                What does a typical school day look like?
                            </a>
                        </div>
                        <div id="collapse3" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                          <div class="card-body p-0">
                            <ul class="list-group cat-list">
                             <li class="list-group-item">
                                School counseling is not a one-size-fits-all approach. Every building is different and requires a program that can address those specific needs. However, there are some things that are fairly similar, such as the importance of including direct school counseling services, such as individual, small group, classroom-based, and school-wide programs.

                                For me, every week looks a little different. I have a small school with approximately 360 students (2 classrooms per grade level, K-6). My typical goal is to get in around 4-5 classrooms a week to teach classroom-based counseling lessons. On average, I facilitate 2 small groups per day and 5-7 individual counseling sessions per day. I organize or help organize about 1 major school-wide program each quarter. However, these numbers are never set in stone. I may have a day where I'm doing more administrative tasks because that's what needs to get done. I may have a day when I'm snatching up any scrap of time I can find in the day to see students on my list because THAT's what needs to get done. I always have an outline of what I'd like to accomplish for the week, month, and year, but I allow myself flexibility so that the focus is not on what I want, but what my students NEED.

                             </li>

                            </ul>
                          </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header " role="tab" id="headingOne">
                          <span class="badge badge-primary badge-pill incat-count">4</span>
                            <a data-toggle="collapse" style="color: blue" href="#collapse4" aria-expanded="true" aria-controls="collapseOne">
                              I got my first interview! How should I prepare?
                            </a>
                        </div>
                        <div id="collapse4" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                          <div class="card-body p-0">
                            <ul class="list-group cat-list">
                             <li class="list-group-item">
                              You were called for an interview, which is awesome,
                              but now you probably are worried about what you will be
                              asked and wondering how to ensure that you end up with that
                              coveted school counseling position. A while back, I had a linky party about this topic, where I posted my own interview tips and other school counselors did the same. I found their responses very helpful and I know you will as well.

                             </li>

                            </ul>
                          </div>
                        </div>
                    </div>


                </div>


         </div>
    </div>
 </section>

<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script>

</script>
@stop



