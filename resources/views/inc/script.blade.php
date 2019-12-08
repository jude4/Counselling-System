<script src='js/jquery-2.2.3.min.js'></script>
<!--//js working-->
<!--responsiveslides banner-->
<script src="js/responsiveslides.min.js"></script>
<script>
   // You can also use "$(window).load(function() {"
   $(function () {
       // Slideshow 4
       $("#slider4").responsiveSlides({
           auto:true,
           pager:false,
           nav:true,
           speed: 900,
           namespace: "callbacks",
           before: function () {
               $('.events').append("<li>before event fired.</li>");
           },
           after: function () {
               $('.events').append("<li>after event fired.</li>");
           }
       });

   });
</script>
<!--// responsiveslides banner-->
<!--About OnScroll-Number-Increase-JavaScript -->
<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.countup.js')}}"></script>
<script>
   $('.counter').countUp();
</script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!-- start-smoth-scrolling -->
<script src="{{ asset('js/move-top.js')}}"></script>
<script src="{{ asset('js/easing.js')}}"></script>
<script>
   jQuery(document).ready(function ($) {
       $(".scroll").click(function (event) {
           event.preventDefault();
           $('html,body').animate({
               scrollTop: $(this.hash).offset().top
           }, 900);
       });
   });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
   $(document).ready(function () {

       var defaults = {
           containerID: 'toTop', // fading element id
           containerHoverID: 'toTopHover', // fading element hover id
           scrollSpeed: 1100,
           easingType: 'linear'
       };


       $().UItoTop({
           easingType: 'easeOutQuart'
       });

   });
</script>
<!-- //here ends scrolling icon -->
<!--bootstrap working-->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- //bootstrap working-->
