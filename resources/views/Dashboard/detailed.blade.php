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
            <div class="box box-success">
                <form action="{{url('dashboard/reports/detailed')}}" method="post"><div class="box-header with-border">
                        <h3 class="box-title">Filter Reports</h3>
                    </div>
                    {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <label>Name</label>
                                <input type="text" @if($req)value="{{$req->name}}"@endif name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="all">All</option>
                                        <option @if($req->gender=='male') selected @endif value="male">Male</option>
                                        <option @if($req->gender=='female') selected @endif value="female">Female</option>
                                        <option @if($req->gender=='other') selected @endif value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-1">
                                <label>Age</label>
                                <input @if($req) value="{{$req->age}}" @endif name="age" type="number" min="0"  class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <label>Date:</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input name="date" type="text" @if($req)value="{{$req->date}}"@endif class="form-control pull-right" id="datepicker">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select name="type" class="form-control" >
                                        <option value="null">Select a type</option>
                                        @foreach($types as $type)
                                            <option @if($req->type==$type->type_id) selected @endif value="{{$type->type_id}}">{{$type->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Filter</button>
                    </div></form>
            </div>
            <!-- /.box -->
            <div class="container" style="width: 100%">
                <table class="table" width="100">
                    <tr>
                        <th width="20">Name</th>
                        <th width="5">Gender</th>
                        <th width="5">Age</th>
                        <th width="20">Type</th>
                        <th width="10">Date</th>
                        <th width="10">Created At</th>
                        <th width="10">Updated At</th>
                        <th width="10"></th>
                        <th width="10"></th>
                    </tr>
                    @foreach($reports as $report)
                    <tr>
                        <td>{{$report->name_front}} {{$report->name}}</td>
                        <td>{{$report->gender}}</td>
                        <td>@if($report->age_years>0){{$report->age_years}} Years @endif @if($report->age_months>0){{$report->age_months}} Months @endif @if($report->age_days>0){{$report->age_days}} Days @endif</td>
                            <td>{{$report->getType()}}</td>
                        <td>{{$report->date}}</td>
                        <td>{{$report->created_at}}</td>
                        <td>{{$report->updated_at}}</td>
                        <td><form TARGET="_blank" action="{{url('dashboard/reports/print')}}" method="get">{!! csrf_field() !!}<input hidden="true" value="{{$report->id}}" name="id"><button type="submit" class="btn btn-success">Print</button></form></td>
                        <td><form  action="{{url('dashboard/reports/view')}}" method="get">{!! csrf_field() !!}<input hidden="true" value="{{$report->id}}" name="id"> <button type="submit" class="btn btn-info">View</button></form></td>
                    </tr>
                        @endforeach
                </table>
                {!! $reports->render() !!}
            </div>
        </div>
        @include('Templates.Components.footer')
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 2.2.3 -->
    <script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <!-- bootstrap datepicker -->
    <script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- Page script -->
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/app.min.js')}}"></script>

    <script>
        $(function () {

            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            });

        });
    </script>
</body>
</html>