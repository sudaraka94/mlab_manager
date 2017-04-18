<table class="table table-responsive">
    <tr style="background-color: lightgrey;">
        <th style="font-weight: 500;">Description</th>
        <th style="font-weight: 500;">Result</th>
    </tr>
    <tr>
        <td>Pregnancy Test (H.C.G)</td>
        <td>{{$det->hcg}}</td>
    </tr>
    {{--@if($det->hcg=="Positive")--}}
        {{--<tr>--}}
            {{--<td>ඔබ ප්‍රදේශයේ පවුල් සෞඛ්‍ය සෙවා නිලධාරිණිය අමතන්න</td>--}}
            {{--<td></td>--}}
        {{--</tr>--}}
    {{--@endif--}}
    @if($det->repeat!=null)
        <tr>
            <td>* Please Repeat On</td>
            <td>{{$det->repeat}}</td>
        </tr>
    @endif
    @if($report->type=='10')
    <tr>
        <td><h4>Urine Full Report (U.F.R)</h4></td>
        <td></td>
    </tr>
    <tr>
        <td>Appearance</td>
        <td>{{$det->appearance}}</td>
    </tr>
    <tr>
        <td>S .G</td>
        <td>{{$det->sg}}</td>
    </tr>
    <tr>
        <td>Reaction</td>
        <td>{{$det->reaction}}</td>
    </tr>
    <tr>
        <td>Albumen</td>
        <td>{{$det->albumen}}</td>
    </tr>
    <tr>
        <td>Sugar</td>
        <td>{{$det->sugar}}</td>
    </tr>
    <tr>
        <td>Acetone</td>
        <td>{{$det->acetone}}</td>
    </tr>
    <tr>
        <td>Bile</td>
        <td>{{$det->bile}}</td>
    </tr>
    <tr>
        <td>Urobilino gen</td>
        <td>{{$det->urobilino}}</td>
    </tr>
    <tr>
        <td><h4>Deposits</h4></td>
        <td></td>
    </tr>
    <tr>
        <td>Pus Cells</td>
        <td>{{$det->u_pus}}</td>
    </tr>
    <tr>
        <td>R.B.Cs</td>
        <td>{{$det->u_rbc}}</td>
    </tr>
    <tr>
        <td>Fpi Cells</td>
        <td>{{$det->fpi}}</td>
    </tr>
    <tr>
        <td>Cast</td>
        <td>{{$det->cast}}</td>
    </tr>
    <tr>
        <td>Organized Diposits</td>
        <td>{{$det->o_deposit}}</td>
    </tr>
    <tr>
        <td>Crystals</td>
        <td>{{$det->crystals}}</td>
    </tr>
        @endif
</table>



<table>

</table>