<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Lipid Profile Test</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <div class="box-body">
        <div class="form-group">
            <label for="c_total">Cholesterol - Total</label>
            <input @if($req_old->c_total)value={{$req_old->c_total}}@endif  type="number" name="c_total" class="form-control" id="c_total" placeholder="mg/dl">
        </div>
        <div class="form-group">
            <label for="c_hdl">Cholesterol - HDL</label>
            <input @if($req_old->c_hdl)value={{$req_old->c_hdl}}@endif  type="number" name="c_hdl" class="form-control" id="c_hdl" placeholder="mg/dl">
        </div>
        <div class="form-group">
            <label for="triglycerides">Triglycerides</label>
            <input @if($req_old->triglycerides)value={{$req_old->triglycerides}}@endif  type="number" name="triglycerides" class="form-control" id="triglycerides" placeholder="mg/dl">
        </div>
        <div class="form-group">
            <label for="c_ldl">Cholesterol - LDL</label>
            <input @if($req_old->c_ldl)value={{$req_old->c_ldl}}@endif  type="number" name="c_ldl" class="form-control" id="c_ldl" placeholder="mg/dl">
        </div>
        <div class="form-group">
            <label for="c_total_hdl">Total Cholesterol / HDL</label>
            <input @if($req_old->c_total_hdl)value={{$req_old->c_total_hdl}}@endif  type="number" name="c_total_hdl" class="form-control" id="c_total_hdl" placeholder="mg/dl">
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<!-- /.box -->

</form>