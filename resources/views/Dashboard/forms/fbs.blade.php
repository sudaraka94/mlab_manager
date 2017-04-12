<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Fasting Blood Sugar</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
        <input hidden="true" value="{{$req->input('type')}}" name="type">
        <div class="box-body">
            <div class="form-group">
                <label for="fbs">Fasting Blood Sugar</label>
                <input @if($req_old->fbs)value={{$req_old->fbs}}@endif type="number" min="0" name="fbs" class="form-control" id="fbs" placeholder="mg/dl">
            </div>
            @if($req->input('type')=='5')
            <div class="form-group">
                <label for="fbs1">Post Parandial Blood Sugar</label>
                <input @if($req_old->ppbs)value={{$req_old->ppbs}}@endif type="number" min="0" name="ppbs" class="form-control" id="fbs1" placeholder="mg/dl">
            </div>
            @endif
            @if($req->input('type')=='6')
            <div class="form-group">
                <label for="preb">Urine Sugar</label>
                <input @if($req_old->urine_sugar)value={{$req_old->urine_sugar}}@endif type="text" list="sugar_set" name="urine_sugar" class="form-control" id="preb" >
                <datalist id="sugar_set">
                    <option>nil</option>
                    <option>Trace</option>
                    <option>0.5 g%</option>
                    <option>1.0 g%</option>
                    <option>1.5 g%</option>
                    <option>2.0 g%</option>
                    <option>>2.0 g%</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="postb">Urine Albumen</label>
                <input type="text" @if($req_old->urine_albumen)value={{$req_old->urine_albumen}}@endif  name="urine_albumen" class="form-control" id="postb"  list="albumen_set">
                <datalist id="albumen_set">
                    <option>nil</option>
                    <option>Trace</option>
                    <option>+</option>
                    <option>++</option>
                    <option>+++</option>
                </datalist>
            </div>
            @endif



        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

</div>
<!-- /.box -->
</form>