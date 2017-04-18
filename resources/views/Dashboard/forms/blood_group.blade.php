<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Blood Group Test</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <div class="box-body">
        <div class="form-group">
            <label for="group">Blood Group Test</label>
            <input @if($req_old->group)value={{$req_old->group}}@endif list="group_set" type="text" name="group" class="form-control" id="group" placeholder="">
            <datalist id="group_set">
                <option>A Positive</option>
                <option>B Positive</option>
                <option>O Positive</option>
                <option>AB Positive</option>
                <option>A Negative</option>
                <option>B Negative</option>
                <option>O Negative</option>
                <option>AB Negative</option>
            </datalist>
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