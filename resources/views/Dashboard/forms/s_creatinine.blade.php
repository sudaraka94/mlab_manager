<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Serum Creatinine Test</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <div class="box-body">
        <div class="form-group">
            <label for="s_creatinine">Serum Creatinine</label>
            <input @if($req_old->s_creatinine)value={{$req_old->s_creatinine}}@endif type="number" name="s_creatinine" class="form-control" id="s_creatinine" placeholder="mg/dl">
        </div>
        @if($req->input('type')=='14')
        <div class="form-group">
            <label for="egfr">Estimated GFR</label>
            <input @if($req_old->egfr)value={{$req_old->egfr}}@endif type="number" name="egfr" class="form-control" id="egfr" placeholder="ml /min /1.73 m2">
        </div>
        @endif
        @if($req->input('type')=='15')
        <div class="form-group">
            <label for="b_urea">Blood Urea</label>
            <input @if($req_old->b_urea)value={{$req_old->b_urea}}@endif type="number" name="b_urea" class="form-control" id="b_urea" placeholder="mg/dl">
        </div>
        @endif
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<!-- /.box -->

</form>