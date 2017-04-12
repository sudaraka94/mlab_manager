<table class="table table-responsive">
    <tr style="background-color: lightgrey;">
        <th style="font-weight: 500;">Description</th>
        <th style="font-weight: 500;">Result</th>
        <th style="font-weight: 500;">Unit</th>
        <th style="font-weight: 500;">Reference Range</th>
    </tr>

        <tr>
            <td>F.B.S<br>(Fasting Blood Sugar)</td>
            <td>{{$det->fbs}}</td>
            <td>mg/dl</td>
            <td>75.0-115.0</td>
        </tr>
    @if($report->type=='5')
        <tr>
            <td>P.P.B.S<br>(Post Parandial Blood Sugar)</td>
            <td>{{$det->ppbs}}</td>
            <td>mg/dl</td>
            <td>80.0-140.0</td>
        </tr>
    @endif
    @if($report->type=='6')
    <tr>
        <td>Urine Sugar</td>
        <td>{{$det->urine_sugar}}</td>
        <td></td>
        <td></td>
    </tr>
        <tr>
            <td>Urine Albumen</td>
            <td>{{$det->urine_albumen}}</td>
            <td></td>
            <td></td>
        </tr>
    @endif
</table>