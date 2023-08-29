  
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>


<style type="text/css">
  
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 0px; /* Location of the box */
    padding-bottom: 100px;
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    margin: auto;
    padding: 0;
    width: 80%;
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@media (max-width: 576px)
 { 

    .frame{
   
    position: relative;
    background: #435d77;
    border-radius:0 0 40px 40px; 
}

 }

 @media (min-width: 1200px) 
 { 
    .frame{
    width: 600px;
    height: 350px;
    margin: 96px auto 0;
    position: relative;
    background: #435d77;
    border-radius:0 0 40px 40px; 
}

 }





@media (min-width: 1200px) 
{ 

#button_open_envelope {
  width: 180px;
  height: 43px;
  position: absolute;
  z-index: 311;
  top: 250px;
  left: 208px;
  border-radius: 10px;
  color: #fff;
  font-size: 26px;
  padding: -24px 0;
  border: 2px solid #fff;
  transition: all .3s ease-in-out;
}
#button_open_envelope:hover{
    background: #FFf;
    color: #081D3D;
    transform:scale(1.1);
    cursor: pointer;
}
.left,.right,.top{width: 0; height: 0;position:absolute;top:0;z-index: 310;}
.left{  
    border-left: 601px  solid #081d3d;
    border-top: 160px solid transparent;
    border-bottom: 160px solid transparent;
}
.right{ 
    border-right: 300px solid #081d3d;
    border-top: 160px solid transparent;
    border-bottom: 160px solid transparent;;
    left:300px;
}
.top{   
    border-right: 300px solid transparent;
    border-top: 200px solid #193e6e;
    border-left: 300px solid transparent;
    transition:transform 1s,border 1s, ease-in-out;
    transform-origin:top;
    transform:rotateX(0deg);
    z-index: 500;
}
.bottom{
    width: 600px;
    height: 190px;
    position: absolute;
    background: #072247;
    top: 160px;
    border-radius:0 0 30px 30px;
    z-index: 310; 
}

.open{
    transform-origin:top;
    transform:rotateX(180deg);
    transition:transform .7s,border .7s,z-index .7s ease-in-out;
    border-top: 200px solid #2c3e50;
    z-index: 200;
}

.message{
    position: relative;
   
    min-height:300px;
    height: auto;
    background: #fff;
    margin: 0 auto;
    top: 30px;
    box-shadow: 0 0 5px 2px #333;
    transition:2s ease-in-out;
    transition-delay:1.5s;
    z-index: 300;

    width: 586px;
}


}

@media (max-width: 576px) 
{ 

    #button_open_envelope {
  width: 180px;
  height: 43px;
  position: absolute;
  z-index: 311;
  top: 250px;
  left: 128px;
  border-radius: 10px;
  color: #fff;
  font-size: 26px;
  padding: -24px 0;
  border: 2px solid #fff;
  transition: all .3s ease-in-out;

  cursor: pointer;
}
#button_open_envelope:hover{
    background: #FFf;
    color: #081D3D;
    transform:scale(1.1);
    cursor: pointer;
}


.left,.right,.top{width: 0; height: 0;position:absolute;top:0;z-index: 310;}
.left{  
 border-left: 404px solid #081d3d;
border-top: 233px solid transparent;
border-bottom: 96px solid transparent;
}
.right{ 
   border-right: 176px solid #081d3d;
border-top: 142px solid transparent;
border-bottom: 182px solid transparent;
left: 228px;
}
.top {
  border-right: 201px solid transparent;
  border-top: 201px solid #193e6e;
  border-left: 199px solid transparent;
  transition: transform 1s,border 1s, ease-in-out;
  transform-origin: top;
  transform: rotateX(0deg);
  z-index: 500;
}
.bottom {
  width: 405px;
  height: 174px;
  position: absolute;
  background: #072247;
  top: 160px;
  border-radius: 0 0 -5px 30px;
  z-index: 310;
}

.open{
    transform-origin:top;
    transform:rotateX(180deg);
    transition:transform .7s,border .7s,z-index .7s ease-in-out;
    border-top: 200px solid #2c3e50;
    z-index: 200;
}

.message{
    position: relative;
   
    min-height:300px;
    height: auto;
    background: #fff;
    margin: 0 auto;
    top: 30px;
    box-shadow: 0 0 5px 2px #333;
    transition:2s ease-in-out;
    transition-delay:1.5s;
    z-index: 300;

     
}

     

}

.pull{
-webkit-animation:message_animation 2s 1 ease-in-out;
    animation:message_animation 2s 1 ease-in-out;
  -webkit-animation-fill-mode:forwards;
  animation-fill-mode:forwards;
    -webkit-animation-delay:.9s;
    animation-delay:.45s;
    transition:1.5s;
    transition-delay:1s;
    z-index: 300;
}



@-webkit-keyframes message_animation {
    0%{
        transform:translatey(0px);
        z-index: 300;
        transition: 1s ease-in-out;
    }
    50%{
        transform:translatey(-340px);
        z-index: 300;
        transition: 1s ease-in-out;
    }
    51%{
        transform:translatey(-340px);
        z-index: 350;
        transition: 1s ease-in-out;
    }
    100%{
        transform:translatey(0px);
        z-index: 350;
        transition: 1s ease-in-out;
    }
}
@keyframes message_animation {
    0%{
        transform:translatey(0px);
        z-index: 300;
        transition: 1s ease-in-out;
    }
    50%{
        transform:translatey(-340px);
        z-index: 300;
        transition: 1s ease-in-out;
    }
    51%{
        transform:translatey(-340px);
        z-index: 350;
        transition: 1s ease-in-out;
    }
    100%{
        transform:translatey(0px);
        z-index: 350;
        transition: 1s ease-in-out;
    }
}
</style>

 </head>
 <body>
 
  
@if(session()->has('success') )

  <div class="alert alert-success">



    {{session('success')}}

    

  </div>

@endif

@if(session()->has('danger') )

  <div class="alert alert-danger">



    {{session('danger')}}

    

  </div>

@endif



                    @if ($errors->any())

    <div class="alert alert-danger" style="text-align: center;">

        <ul style="list-style: none;">

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif


                <div class="row">
 
 
                    <div class="col-lg-12">

                            <div class="frame">
      <div id="button_open_envelope" style="text-align: center;">
         فتح  الدعوة 
      </div>
      <div class="message" style="text-align: center;">
        <div>
          <br>
          <br>
           <h2> 
          أفراح الدريس و  الشلهوب 
            <br>
           	 االمعرف  :{{$admin->id}}
           	 <br>
           	   الجوال  :{{$admin->phone}}
           	 <br>
           	  الاسم   :{{$admin->name}}
           	 <br>
            شكرا لتلبية الدعوة


</h2>
        </div>
      </div>
      <div class="bottom"></div>
      <div class="left"></div>
      <div class="right"></div>
      <div class="top"></div>
    </div>
                       
  </div>    
                    </div>



  <!--[if lt IE 9]>
<script src="{{url('/')}}/assets/global/plugins/respond.min.js"></script>
<script src="{{url('/')}}/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{url('/')}}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{url('/')}}/assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{url('/')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{url('/')}}/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{url('/')}}/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
  <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{url('/')}}/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->

         <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{url('/')}}/assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

<script src="{{ asset('/assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('/assets/plugins/sweetalert/jquery.sweet-alert.custom.js') }}"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="{{ asset('/assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
        <script src="{{ asset('/assets/plugins/toastr/toastr.js') }}"></script>


 <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{url('/')}}/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{url('/')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{url('/')}}/assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
   <script src="https://www.pilotpenksa.com/Desgin/ckeditor/ckeditor/ckeditor.js"></script>
   <script src="https://cdn.datatables.net/plug-ins/1.11.3/i18n/ar.json"></script>


 <script type="text/javascript">
     $(document)
    .ready(function() {
        $('.frame')
            .click(function() {
                $('.top')
                    .addClass('open');
                $('.message')
                    .addClass('pull');
            })
    });

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
 </script>

 </body>
 </html>
 
 
 
