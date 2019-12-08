
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Uniben Counselling System</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Job-point Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);

         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Mukta+Malar:400,500,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
   </head>
   <body>
        {{--  Navigation bar  --}}

        @include('inc.navbar')

        {{--  Sldeshow  --}}

        <!--//headder-->
        <!-- banner -->
        <div class="inner_page-banner one-img">
        </div>

        <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
               <ul class="short_ls">
                  <li>
                     <a href="{{url('/')}}">Home</a>
                     <span>/ /</span>
                  </li>
                  <li>{{$active}}</li>
               </ul>
            </div>
         </div>
         @yield('content')

         {{--  Footer  --}}

         @include('inc.footer')

         {{--  Modal  --}}

         @include('inc.modal')


         {{--  Script  --}}

         @include('inc.script')

    </body>
 </html>


