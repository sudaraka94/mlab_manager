<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rathna|Browse Reports</title>
    <!-- Tell the browser to be responsive to screen width -->
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset('/plugins/datepicker/datepicker3.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('/plugins/iCheck/all.css')}}">

    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
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
        @if (!empty($message))
            <div class="alert alert-danger alert-dismissable" style="margin-bottom: 3px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <ul>
                    <li>{{ $message }}</li>
                </ul>
            </div>
    @endif
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div clas="row" style="height: 40px">
            <div class="col-md-1">
                <!-- Indicates a successful or positive action -->
                <form action="{{url('dashboard/reports/print')}}" target="_blank" method="get">{!! csrf_field() !!}<input hidden="true" value="{{$report->id}}" name="id"><button type="submit" class="btn btn-success">Print</button></form>
            </div>
            <div class="col-md-1">
                <form action="{{url('dashboard/reports/edit')}}" method="get">{!! csrf_field() !!}<input hidden="true" value="{{$report->id}}" name="id"><input hidden="true" value="{{$report->type}}" name="type"><button type="submit" class="btn btn-primary">Edit</button></form>
            </div>
            <div class="col-md-1">
                <form action="{{url('dashboard/reports/delete')}}" method="get">{!! csrf_field() !!}<input hidden="true" value="{{$report->id}}" name="id"><button type="submit" class="btn btn-danger">Delete</button></form>
            </div>

        </div>
        </section>

        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-globe"></i>RATHNA
                        <small class="pull-right">Date: {{$report->getDate()}}</small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-12 ">
                    <address>
                        <strong>Patient Name : {{$report->name_front}} {{$report->name}}<br>
                            Age : @if($report->age_years>0){{$report->age_years}} Years @endif @if($report->age_months>0){{$report->age_months}} Months @endif @if($report->age_days>0){{$report->age_days}} Days @endif<br>
                            Sex :{{$report->gender}}<br>
                            Specimen :{{$report->specimen}}</strong>
                    </address>
                </div>
            </div>
            <!-- /.row -->
            <div class="container" style="padding: 30px">
                <h3 align="center">{{$report->getType()}}</h3>
            </div>
            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    @if($report->type=='1'|$report->type=='2'|$report->type=='3')
                        @include('Dashboard.reports.bsst')
                    @elseif($report->type=='4'|$report->type=='5'|$report->type=='6')
                        @include('Dashboard.reports.fbs')
                    @elseif($report->type=='7')
                        @include('Dashboard.reports.ufr')
                    @elseif($report->type=='8')
                        @include('Dashboard.reports.sfr')
                    @endif
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
    <!-- /.content-wrapper -->
  @include('Templates.Components.footer')
<!-- Modal -->
    <div class="modal fade" id="editReport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">New Report</h4>
                </div>
                <div class="modal-body">
                    <!-- general form elements -->
                    <div>
                        <!-- /.box-header -->
                        <!-- form start -->

                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/app.min.js')}}"></script>
</body>
</html>