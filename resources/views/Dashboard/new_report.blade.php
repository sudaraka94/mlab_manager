@extends("Templates.master")
@section("title")
    New Report
@endsection
@section("Styles")
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

@section("content")
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    @include("Templates.Components.nav_bar")
    @include("Templates.Components.sidebar")
    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissable" style="margin-bottom: 3px;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul>
                            <li>{{ $error }}</li>
                        </ul>
                    </div>
                @endforeach
            @endif

            @include("Dashboard.forms.general")
            @if($req->input('type')=="1"|$req->input('type')=="2"|$req->input('type')=="3")
                @include("Dashboard.forms.bsst")
                @elseif($req->input('type')=="4"|$req->input('type')=="5"|$req->input('type')=="6")
                    @include("Dashboard.forms.fbs")
                @elseif($req->input('type')=="7")
                    @include("Dashboard.forms.ufr")
                @elseif($req->input('type')=="8")
                    @include("Dashboard.forms.sfr")
                @elseif($req->input('type')=="9"|$req->input('type')=="10")
                    @include("Dashboard.forms.hcg")
                @elseif($req->input('type')=="11")
                    @include("Dashboard.forms.blood_group")
                @elseif($req->input('type')=="12")
                    @include("Dashboard.forms.lipidp")
                @elseif($req->input('type')=="13"|$req->input('type')=="14"|$req->input('type')=="15")
                    @include("Dashboard.forms.s_creatinine")
                @endif
        </div>
    </div>
    <!-- ./wrapper -->
    @endsection
    @section("scripts")
        <!-- jQuery 2.2.3 -->
        <script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- Morris.js charts -->
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>
        <script src="{{asset('plugins/morris/morris.min.js')}}"></script>
        <!-- Sparkline -->
        <script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <!-- jvectormap -->
        <script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{asset('plugins/knob/jquery.knob.js')}}"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <!-- datepicker -->
        <script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
        <!-- Slimscroll -->
        <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/app.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('dist/js/demo.js')}}"></script>
        <script>
            $(function () {
//                Date picker
                $('#datepicker').datepicker({
                    autoclose: true
//                    dateFormat:'dd-mm-yy'
                });
                $('#datepicker_hcg').datepicker({
                    autoclose: true
//                    dateFormat:'dd-mm-yy'
                });
            });

    </script>

@endsection