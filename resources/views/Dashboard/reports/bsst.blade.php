<table class="table table-responsive">
    <tr style="background-color: lightgrey;">
        <th style="font-weight: 500;">Description</th>
        <th style="font-weight: 500;">Result</th>
        <th style="font-weight: 500;">Unit</th>
        <th style="font-weight: 500;">Reference Range</th>
    </tr>
    @if($report->type=='2'|$report->type=='3')
        <tr>
            <td>F.B.S<br>(Fasting Blood Sugar)</td>
            <td>{{$det->fbs}}</td>
            <td>mg/dl</td>
            <td>75.0-115.0</td>
        </tr>
    @endif
    @if($report->type=='1')
        <tr>
            <td>Pre Breakfast</td>
            <td>{{$det->pre_breakfast}}</td>
            <td>mg/dl</td>
            <td></td>
        </tr>
    @endif
    <tr>
        <td>Post Breakfast</td>
        <td>{{$det->post_breakfast}}</td>
        <td>mg/dl</td>
        <td></td>
    </tr>
    @if($report->type=='1')
        <tr>
            <td>Pre Lunch</td>
            <td>{{$det->pre_lunch}}</td>
            <td>mg/dl</td>
            <td></td>
        </tr>
    @endif
    <tr>
        <td>Post Lunch</td>
        <td>{{$det->post_lunch}}</td>
        <td>mg/dl</td>
        <td></td>
    </tr>
    @if($report->type=='1')
        <tr>
            <td>Pre Dinner</td>
            <td>{{$det->pre_dinner}}</td>
            <td>mg/dl</td>
            <td></td>
        </tr>
    @endif
    @if($report->type=='1'|$report->type=='2')
        <tr>
            <td>Post Dinner</td>
            <td>{{$det->post_dinner}}</td>
            <td>mg/dl</td>
            <td></td>
        </tr>
    @endif
</table>