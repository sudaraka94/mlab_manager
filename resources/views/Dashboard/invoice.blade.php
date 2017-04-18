<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rathna Medical Laboratory </title>
    <!-- Tell the browser to be responsive to screen width -->
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/dist/css/skins/_all-skins.min.css')}}">
    <style>
        h1 {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 24px;
            font-style: normal;
            font-variant: normal;
            font-weight: 500;
            line-height: 26.4px;
        }
        h3 {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 14px;
            font-style: normal;
            font-variant: normal;
            font-weight: 500;
            line-height: 15.4px;
        }
        p {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 14px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 20px;
        }
        blockquote {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 21px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 30px;
        }
        pre {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 13px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 18.5714px;
        }
        table{
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 14px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 20px;
        }
        .page-header{
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 20px;
        }
        .address{
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-style: normal;
            font-variant: normal;
        }
    </style>
</head>
<body onload="window.print();">
<div class="wrapper" >
    <!-- Main content -->
    <section class="invoice" >
        <!-- title row -->
        <div style="margin-top: 32%"></div>
        {{--<div class="row">--}}
            {{--<div class="col-xs-12">--}}
                {{--<h2 class="page-header" style="font-weight: 500;">--}}
                    {{--<i class="fa fa-globe"></i>RATHNA--}}
                    {{--<small class="pull-right">Date: {{$report->getDate()}}</small>--}}
                {{--</h2>--}}
            {{--</div>--}}
            {{--<!-- /.col -->--}}
        {{--</div>--}}
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-12 ">
                <div class="pull-right">Date: {{$report->getDate()}}</div>
                <address class="address">
                    Patient Name : {{$report->name_front}} {{$report->name}}<br>
                    Age : @if($report->age_years>0){{$report->age_years}} Years @endif @if($report->age_months>0){{$report->age_months}} Months @endif @if($report->age_days>0){{$report->age_days}} Days @endif<br>
                    Sex :{{$report->gender}}<br>
                    Speciemn :{{$report->specimen}}
                </address>
            </div>
        </div>
        <!-- /.row -->
        <div class="container" style="padding: 30px;margin-top: -40px">
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
</div>
<!-- ./wrapper -->
</body>
</html>
