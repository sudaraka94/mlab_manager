<table class="table table-responsive">
    <tr style="background-color: lightgrey;">
        <th style="font-weight: 500;">Chemistry</th>
        <th style="font-weight: 500;">Result</th>
        <th style="font-weight: 500;">Unit</th>
        <th style="font-weight: 500;">Reference Range</th>
    </tr>

    <tr>
        <td>Cholesterol - Total</td>
        <td>{{$det->c_total}}</td>
        <td>mg/dl</td>
        <td>150.0 - 240.0</td>
    </tr>
    <tr>
        <td>Cholesterol - HDL</td>
        <td>{{$det->c_hdl}}</td>
        <td>mg/dl</td>
        <td>>= 45.0</td>
    </tr>
    <tr>
        <td>Triglycerides</td>
        <td>{{$det->triglycerides}}</td>
        <td>mg/dl</td>
        <td>40.0 - 150.0</td>
    </tr>
    <tr>
        <td>Cholesterol - LDL</td>
        <td>{{$det->c_ldl}}</td>
        <td>mg/dl</td>
        <td>< 160.0</td>
    </tr>
    <tr>
        <td>Total Cholesterol / HDL</td>
        <td>{{$det->c_total_hdl}}</td>
        <td></td>
        <td></td>
    </tr>

</table>
<br><br>
<table class="table table-responsive">
    <tr style="background-color: lightgrey;">
        <th style="font-weight: 500;">LIPID<br>FRACTIONS</th>
        <th style="font-weight: 500;">PROGNOSTICALLY<br>FAVORABLE</th>
        <th style="font-weight: 500;">STANDARD<br>RISK LEVEL</th>
        <th style="font-weight: 500;">RISK<br>INDICATE</th>
    </tr>

    <tr>
        <td>Total Cholesterol (mg/dl)</td>
        <td>< 220.0</td>
        <td>226.0 - 260.0</td>
        <td>> 266.0</td>
    </tr>
    <tr>
        <td>HDL (mg/l)   Men<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Women</td>
        <td>> 55.0 <br>> 65.0</td>
        <td>35.0 - 55.0 <br>45.5 - 65.0</td>
        <td>< 35.0<br>< 45.0</td>
    </tr>
    <tr>
        <td>LDL (mg/dl)   Men/Women</td>
        <td>< 150.0</td>
        <td>150.0 - 190.0</td>
        <td>> 190.0</td>
    </tr>
    <tr>
        <td>Total Cholesterol   Men</td>
        <td>< 3.8</td>
        <td>3.8 - 5.9</td>
        <td>> 5.9</td>
    </tr>
    <tr>
        <td>HDL Cholesterol   Women</td>
        <td>< 3.1</td>
        <td>3.1 - 4.6</td>
        <td>> 4.6</td>
    </tr>

</table>