<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Blood Sugar Series Test</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
        <input hidden="true" value="{{$req->input('type')}}" name="type">
        <div class="box-body">
            @if($req->input('type')=='2'|$req->input('type')=='3')
            <div class="form-group">
                <label for="fbs">Fasting Blood Sugar</label>
                <input @if($req_old->fbs)value={{$req_old->fbs}}@endif type="number" min="0" name="fbs" class="form-control" id="fbs" placeholder="mg/dl">
            </div>
            @endif
            @if($req->input('type')=='1')
            <div class="form-group">
                <label for="preb">Pre Breakfast</label>
                <input @if($req_old->pre_breakfast)value={{$req_old->pre_breakfast}}@endif type="number" min="0" name="pre_breakfast" class="form-control" id="preb" placeholder="mg/dl">
            </div>
                @endif
            <div class="form-group">
                <label for="postb">Post Breakfast</label>
                <input type="number" @if($req_old->post_breakfast)value={{$req_old->post_breakfast}}@endif min="0" name="post_breakfast" class="form-control" id="postb" placeholder="mg/dl">
            </div>
                    @if($req->input('type')=='1')
            <div class="form-group">
                <label for="preln">Pre Lunch</label>
                <input type="number" min="0" @if($req_old->pre_lunch)value={{$req_old->pre_lunch}} @endif name="pre_lunch" class="form-control" id="preln" placeholder="mg/dl">
            </div>
                @endif

                <div class="form-group">
                <label for="postln">Post Lunch</label>
                <input type="number" min="0" name="post_lunch" class="form-control" id="postln" @if($req_old->post_lunch)value={{$req_old->post_lunch}} @endif placeholder="mg/dl">
            </div>
                        @if($req->input('type')=='1')
            <div class="form-group">
                <label for="prednr">Pre Dinner</label>
                <input type="number" min="0" name="pre_dinner" class="form-control" id="prednr" @if($req_old->pre_dinner)value={{$req_old->pre_dinner}} @endif placeholder="mg/dl">
            </div>                @endif

            @if($req->input('type')=='1'|$req->input('type')=='2')
            <div class="form-group">
                <label for="postdnr">Post Dinner</label>
                <input type="number" min="0" name="post_dinner" @if($req_old->post_dinner)value={{$req_old->post_dinner}} @endif class="form-control" id="postdnr" placeholder="mg/dl">
            </div>                @endif



        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

</div>
<!-- /.box -->
</form>