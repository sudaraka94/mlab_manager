<table class="table table-responsive">
    <tr style="background-color: lightgrey;">
        <th style="font-weight: 500;">Description</th>
        <th style="font-weight: 500;">Result</th>
        <th style="font-weight: 500;">Unit</th>
        <th style="font-weight: 500;">Reference Range</th>
    </tr>

    <tr>
        <td>Serum Creatinine</td>
        <td>{{$det->s_creatinine}}</td>
        <td>mg/dl</td>
        <td>0.50 - 1.30</td>
    </tr>
    @if($report->type=='14')
        <tr>
            <td>Estimated GFR</td>
            <td>{{$det->egfr}}</td>
            <td>ml /min /1.73 m<sup>2</sup></td>
            <td>Normal >85 <br>
                Mild 60-85 <br>
                Moderate 30-59 <br>
                Sever <30 <br>
            </td>
        </tr>
    @endif
    @if($report->type=='15')
        <tr>
            <td>Blood Urea</td>
            <td>{{$det->b_urea}}</td>
            <td>mg / dl</td>
            <td>10.0 - 50.0</td>
        </tr>
    @endif

</table>